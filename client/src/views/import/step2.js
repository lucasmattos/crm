/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014  Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/ 
Espo.define('Views.Import.Step2', 'View', function (Dep) {
	
	return Dep.extend({
		
		template: 'import.step-2',
		
		events: {	
			'click button[data-action="back"]': function () {
				this.back();
			},
			'click button[data-action="next"]': function () {
				this.next();
			},
			'click a[data-action="addField"]': function (e) {
				var field = $(e.currentTarget).data('name');
				$(e.currentTarget).parent().addClass('hidden');
				this.addField(field);
			},
			
			'click a[data-action="removeField"]': function (e) {
				var field = $(e.currentTarget).data('name');
				
				this.$el.find('a[data-action="addField"]').parent().removeClass('hidden');			

				var index = this.additionalFields.indexOf(field);				
				if (~index) {
					this.additionalFields.splice(index, 1);
				}
				this.$el.find('.field-' + field).parent().remove();
			},
		},		
		
		data: function () {
			return {
				scope: this.scope,
				fieldList: this.getFieldList(),
			};
		},
		
		setup: function () {		
			this.formData = this.options.formData;
			
			this.scope = this.formData.entityType;
			
			var mapping = [];
			
			this.additionalFields = [];
			
			if (this.formData.previewArray) {
				var index = 0;
				if (this.formData.headerRow) {
					index = 1;
				}
				if (this.formData.previewArray.length > index) {
					this.formData.previewArray[index].forEach(function (value, i) {
						var d = {
							value: value
						};
						if (this.formData.headerRow) {
							d.name = this.formData.previewArray[0][i];
						}
						mapping.push(d);
					}, this);
				}				
			}
			
			this.wait(true);
			this.getModelFactory().create(this.scope, function (model) {
				this.model = model;
				this.wait(false);				
			}, this);
			
			this.mapping = mapping;			
		},
		
		afterRender: function () {
			$container = $('#mapping-container');
			
			$table = $('<table>').addClass('table').addClass('table-bordered');
			
			$row = $('<tr>');
			if (this.formData.headerRow) {
				$cell = $('<th>').html(this.translate('Header Row Value', 'labels', 'Import'));
				$row.append($cell);
			}
			$cell = $('<th>').html(this.translate('Field', 'labels', 'Import'));
			$row.append($cell);
			$cell = $('<th>').html(this.translate('First Row Value', 'labels', 'Import'));
			$row.append($cell);
			$table.append($row);
			
			this.mapping.forEach(function (d, i) {
				$row = $('<tr>');
				if (this.formData.headerRow) {
					$cell = $('<td>').html(d.name);
					$row.append($cell);
				}
				$select = this.getFieldDropdown(i, d.name);
				$cell = $('<td>').append($select);
				$row.append($cell);				
				
				$cell = $('<td>').html(d.value);
				$row.append($cell);
				
				$table.append($row);
			}, this);
			
			$container.empty();
			$container.append($table);

		},
		
		getFieldList: function () {
			var defs = this.getMetadata().get('entityDefs.' + this.scope + '.fields');
			
			var fieldList = [];
			for (var field in defs) {
				fieldList.push(field);
			}
			
			return fieldList;			
		},
		
		getFieldDropdown: function (num, name) {
			name = name || false;
			
			var fields = this.getMetadata().get('entityDefs.' + this.scope + '.fields');
			
			var fieldList = [];
			fieldList.push('id');
			
			for (var field in fields) {
				var d = fields[field];
				
				if (['modifiedBy', 'createdBy', 'modifiedAt', 'createdAt'].indexOf(field) !== -1) {
					continue;
				}
				
				if (d.type == 'link') {
					fieldList.push(field + 'Name');
					fieldList.push(field + 'Id');
				}
				
				if (['linkMultiple', 'foreign'].indexOf(d.type) !== -1) {
					continue;
				}
				
				if (d.type == 'personName') {
					fieldList.push(field);
				}
				
				var type = d.type;				
				var actualFields = this.getFieldManager().getActualAttributes(type, field);
				actualFields.forEach(function (f) {
					if (fieldList.indexOf(f) === -1) {
						fieldList.push(f);
					}
				}, this);
			}
			
			$select = $('<select>').addClass('form-control').attr('id', 'column-' + num.toString());
			$option = $('<option>').val('').html('-' + this.translate('Skip', 'labels', 'Import') + '-');
			
			$select.append($option);
			fieldList.forEach(function (field) {
				$option = $('<option>').val(field).html(this.translate(field, 'fields', this.formData.entityType));
				
				if (name) {
					if (field == name) {
						$option.prop('selected', true);
					} else {
						if (name.toLowerCase().replace('_', '') == field.toLowerCase()) {
							$option.prop('selected', true);
						}
					}
				}
				$select.append($option);
			}, this);
			
			return $select;
		},
		
		addField: function (name) {
			$(this.containerSelector + ' button[data-name="update"]').removeClass('disabled');

			this.notify('Loading...');
			var label = this.translate(name, 'fields', this.scope);
			
			var removeLink = '<a href="javascript:" class="pull-right" data-action="removeField" data-name="'+name+'"><span class="glyphicon glyphicon-remove"></span></a>';
			
			var html = '<div class="cell form-group col-sm-3">'+removeLink+'<label class="control-label">' + label + '</label><div class="field field-'+name+'" /></div>';
			$('#default-values-container').append(html);

			var type = Espo.Utils.upperCaseFirst(this.model.getFieldParam(name, 'type'));
			this.createView(name, this.getFieldManager().getViewName(type), {
				model: this.model,
				el: this.$el.selector + ' .field-' + name,
				defs: {
					name: name,
				},
				mode: 'edit'
			}, function (view) {
				this.additionalFields.push(name);
				view.render();
				view.notify(false);
			}.bind(this));
		},
		
		disableButtons: function () {
			this.$el.find('button[data-action="next"]').addClass('disabled');
			this.$el.find('button[data-action="back"]').addClass('disabled');
		},
		
		enableButtons: function () {
			this.$el.find('button[data-action="next"]').removeClass('disabled');
			this.$el.find('button[data-action="back"]').removeClass('disabled');
		},
		
		fetch: function () {
			
			var attributes = {};
			this.additionalFields.forEach(function (field) {
				var view = this.getView(field);
				_.extend(attributes, view.fetch());
			}, this);

			this.model.set(attributes);
			
			var notValid = false;
			this.additionalFields.forEach(function (field) {
				var view = this.getView(field);
				notValid = view.validate() || notValid;
			}, this);
			
			if (!notValid) {
				this.formData.defaultValues = attributes;
				return true;
			}
		},		
		
		back: function () {
			this.getParentView().changeStep(1);	
		},
		
		
		next: function () {			
			if (!this.fetch()) {
				return;
			}
			
			var fields = [];
			
			this.mapping.forEach(function (d, i) {
				fields.push($('#column-' + i).val());
			}, this);
			
			
			this.formData.fields = fields;
			
					
			this.getParentView().formData = this.formData;
			
			this.disableButtons();
			
			this.notify('File uploading...');
			
			$.ajax({
				type: 'POST',
				url: 'Import/action/uploadFile',
				contentType: 'text/csv',
				data: this.getParentView().fileContents,
				timeout: 0,
				success: function (data) {
					if (data.attachmentId) {						
						this.runImport(data.attachmentId);
					} else {
						this.notify('Bad response', 'error');
					}
				}.bind(this)
			});			
		},
		
		runImport: function (attachmentId) {
			this.formData.attachmentId = attachmentId;
			
			this.notify('Import running...');
			
			$.ajax({
				type: 'POST',
				url: 'Import',
				data: JSON.stringify(this.formData),
				timeout: 150000,
				success: function (result) {
					this.getParentView().changeStep(3, result);
					this.notify(false);
				}.bind(this),
				error: function () {
					this.enableButtons();
				}.bind(this),
			});	
		}
					
	});
});

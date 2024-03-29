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
Espo.define('Views.Email.Fields.EmailAddressVarchar', 'Views.Fields.Varchar', function (Dep) {

	return Dep.extend({
	
		detailTemplate: 'email.fields.email-address-varchar.detail',
	
		editTemplate: 'email.fields.email-address-varchar.edit',
		
		events: {
			'click a[data-action="clearAddress"]': function (e) {
				var address = $(e.currentTarget).data('address').toString();
				this.deleteAddress(address);
			},			
			'keyup input': function (e) {
				if (e.keyCode == 188 || e.keyCode == 186) {
					var $input = $(e.currentTarget);
					var address = $input.val().replace(',','').replace(';','').trim();
					if (~address.indexOf('@')) {
						this.addAddress(address, '');
						$input.val('');
						
					}
															
				}
			},			
			'change input': function (e) {
				var $input = $(e.currentTarget);
				var address = $input.val().replace(',','').replace(';','').trim();
				if (~address.indexOf('@')) {
					this.addAddress(address, '');
					$input.val('');
				}				
			},
		},
		
		getAttributeList: function () {
			var list = Dep.prototype.getAttributeList.call(this);
			list.push('nameHash');
			return list;
		},
		
		setup: function () {
			Dep.prototype.setup.call(this);
			
			this.nameHash = {};
			
			this.initAddressList();			
			this.listenTo(this.model, 'change:' + this.name, function () {
				this.initAddressList();
			}, this);
		},
		
		initAddressList: function () {
			this.addressList = (this.model.get(this.name) || '').split(';').filter(function (item) {
				return item != '';
			}).map(function (item) {
				return item.trim();
			});
		
			this.typeHash = this.model.get('typeHash') || {};
			this.idHash = this.model.get('idHash') || {};
			
			_.extend(this.nameHash, this.model.get('nameHash') || {});
			this.nameHash = _.clone(this.nameHash);
			this.typeHash = _.clone(this.typeHash);
			this.idHash = _.clone(this.idHash);
			
		},
		
		afterRender: function () {
			Dep.prototype.afterRender.call(this);
			
			this.$input = this.$el.find('input');
			
			if (this.mode == 'edit') {
			
				this.addressList.forEach(function (item) {
					this.addAddressHtml(item, this.nameHash[item] || '');
				}, this);
						
				this.$input.autocomplete({
					serviceUrl: function (q) {
						return 'EmailAddress/action/searchInAddressBook?limit=5';
					}.bind(this),
					paramName: 'q',
					minChars: 1,
					autoSelectFirst: true,
			       	formatResult: function (suggestion) {
			        	return suggestion.name + ' &#60;' + suggestion.id + '&#62;';
			        },
			        transformResult: function (response) {
			        	var response = JSON.parse(response);	        	
			        	var list = [];			        	
			        	response.forEach(function(item) {
			        		list.push({
			        			id: item.emailAddress,
			        			name: item.name,
			        			data: item.emailAddress,
			        			value: item.emailAddress
					        });
			        	}, this);
			        	return {
			        		suggestions: list
			        	};			        	
			        }.bind(this),
					onSelect: function (s) {
						this.addAddress(s.id, s.name);
						this.$input.val('');
					}.bind(this)
				});
			}
		},
		
		addAddress: function (address, name) {
			if (!~this.addressList.indexOf(address)) {
				this.addressList.push(address);
				this.nameHash[address] = name;
				this.addAddressHtml(address, name);
				this.trigger('change');
			}
		},
		
		addAddressHtml: function (address, name) {
			var conteiner = this.$el.find('.link-container');
			var $el = $('<div />').attr('data-address', address).addClass('list-group-item');
			$el.html(((name) ? (name + ' <span class="text-muted">&#187;</span> ') : '') + '<span>' + address + '</span>');
			$el.append('<a href="javascript:" class="pull-right" data-address="' + address + '" data-action="clearAddress"><span class="glyphicon glyphicon-remove"></a>');
			conteiner.append($el);
			
			return $el;
		},
		
		deleteAddress: function (address) {
			this.deleteAddressHtml(address);
					
			var index = this.addressList.indexOf(address);
			if (index > -1) {
				this.addressList.splice(index, 1);
			}
			delete this.nameHash[address];
			this.trigger('change');		
		},
		
		deleteAddressHtml: function (address) {
			this.$el.find('.list-group-item[data-address="' + address + '"]').remove();
		},
		
		fetch: function () {
			var data = {};
			data[this.name] = this.addressList.join(';');		

			return data;
		},
		
		getValueForDisplay: function () {
			if (this.mode == 'detail') {
				var names = [];
				this.addressList.forEach(function (address) {
					names.push(this.getDetailAddressHtml(address));
				}, this);
				return names.join('');
			}
		},
		
		getDetailAddressHtml: function (address) {
			if (!address) {
				return '';
			}
			var name = this.nameHash[address] || null;
			var entityType = this.typeHash[address] || null;
			var id = this.idHash[address] || null;			

			var addressHtml = '<span class="">' + address + '</span>';

			var lineHtml;
			if (id) {
				lineHtml = '<div>' + '<a href="#' + entityType + '/view/' + id + '">' + name + '</a> <span class="text-muted">&#187;</span> ' + addressHtml + '</div>';
			} else {
				lineHtml = '<div>' + addressHtml + '</div>';
			}
			return lineHtml;
		},	
		
	});
	
});

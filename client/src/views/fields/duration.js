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
Espo.define('Views.Fields.Duration', 'Views.Fields.Enum', function (Dep) {

	return Dep.extend({

		type: 'duration',

		listTemplate: 'fields.base.detail',

		detailTemplate: 'fields.base.detail',

		editTemplate: 'fields.duration.edit',

		data: function () {
			return _.extend({
				durationOptions: this.durationOptions,
			}, Dep.prototype.data.call(this));			
		},
		
		calculateSeconds: function () {
			this.seconds = 0;			
			var start = this.model.get(this.startField);
			var end = this.model.get(this.endField);
			if (this.mode == 'edit' || this.mode == 'detail') {
				this.seconds = this.model.getFieldParam(this.name, 'default') || 0;
			}			
			
			if (start && end) {
				this.seconds = moment(this.model.get(this.endField)).unix() - moment(this.model.get(this.startField)).unix();							
			} else {
				if (start) {
					var end = this._getDateEnd();
					this.model.set(this.endField, end, {silent: true});
				}
			}			
		},
		
		init: function () {
			Dep.prototype.init.call(this);
			
	
			
			this.listenTo(this, 'render', function () {
			
				this.calculateSeconds();
				
				var durationOptions = '';
				var options = this.defaultOptions = _.clone(this.model.getFieldParam(this.name, 'options'));

				if (options.indexOf(this.seconds) == -1) {
					options.push(this.seconds);
				}
				options.sort(function (a, b) {
					return a - b;
				});

				options.forEach(function (d) {
					durationOptions += '<option value="' + d + '" ' + (d == this.seconds ? 'selected' : '') +'>' + this.stringifyDuration(d) + '</option>';
				}.bind(this));
				this.durationOptions = durationOptions;
				this.stringValue = this.stringifyDuration(this.seconds);
			}.bind(this));
		},

		setup: function () {
			this.startField = this.model.getFieldParam(this.name, 'start');
			this.endField = this.model.getFieldParam(this.name, 'end');
			if (!this.startField || !this.endField) {
				throw new Error('Bad definition for field \'' + this.name + '\'.');
			}
			this.calculateSeconds();
		},

		getValueForDisplay: function () {
			return this.stringValue;
		},

		stringifyDuration: function (seconds) {
			if (!seconds) {
				return '';
			}
			var d = seconds;
			var days = Math.floor(d / (86400));
			d = d % (86400);
			var hours = Math.floor(d / (3600));
			d = d % (3600);
			var minutes = Math.floor(d / (60));

			var parts = [];
			if (days) {
				parts.push(days + '' + this.getLanguage().translate('d'));
			}
			if (hours) {
				parts.push(hours + '' + this.getLanguage().translate('h'));
			}
			if (minutes) {
				parts.push(minutes + '' + this.getLanguage().translate('m'));
			}
			return parts.join(' ');
		},

		afterRender: function () {
			this.startFieldView = this.getParentView().getView(this.startField);
			this.endFieldView = this.getParentView().getView(this.endField);

			if (this.mode == 'edit') {
				this.$duration = this.$el.find('[name="' + this.name + '"]');
				this.$duration.on('change', function () {					
					this.seconds = parseInt(this.$duration.val());
					this.updateDateEnd();
					this.$duration.find('option.custom').remove();
				}.bind(this));				
			}			
			
			this.stopListening(this.model, 'change:' + this.endField);
			this.stopListening(this.model, 'change:' + this.endField);
			
			this.listenTo(this.model, 'change:' + this.endField, function () {		
				var start = this.model.get(this.startField);
				var end = this.model.get(this.endField);
				
				if (!end || !start) {
					return;
				}				
					
				this.seconds = moment(end).unix() - moment(start).unix();
				this.updateDuration();
			}.bind(this));
			
			this.listenTo(this.model, 'change:' + this.startField, this.updateDateEnd);

			if (this.mode == 'edit') {
				var start = this.model.get(this.startField);
				var end = this.model.get(this.endField);
				var seconds = this.$duration.val();
				
				if (!end && start && seconds) {
					if (this.endFieldView) {
						if (this.endFieldView.isRendered()) {
							this.updateDateEnd();
						} else {
							this.endFieldView.once('after:render', function () {
								this.updateDateEnd();
							}.bind(this));
						}
					}
				}
			}
		},

		_getDateEnd: function () {
			var seconds = this.seconds;
			var start = this.model.get(this.startField);

			if (!start) {
				return;
			}

			var endUnix;
			var end;
			if (seconds) {
				endUnix = moment.utc(start).unix() + seconds;				
				end = moment.unix(endUnix).utc().format(this.getDateTime().internalDateTimeFormat);
			} else {
				end = start;
			}
			return end;
		},

		updateDateEnd: function () {
			var end = this._getDateEnd();
						
			setTimeout(function () {
				this.model.set(this.endField, end);
			}.bind(this), 1);
		},

		updateDuration: function () {
			var seconds = this.seconds;

			if (seconds <= 0) {
				if (this.mode == 'edit') {
					this.$duration.val('');
				} else {
					this.setup();
					this.render();
				}
			} else {			
				if (this.mode == 'edit') {
					this.$duration.find('option.custom').remove();
					var $o = $('<option>').val(seconds).text(this.stringifyDuration(seconds)).addClass('custom');
						var $found = this.$duration.find('option').filter(function (i, el) {
						return $(el).val() >= seconds;
					}).first();

					if ($found.size()) {
						if ($found.val() != seconds) {
							$o.insertBefore($found);
						};
					} else {
						$o.appendTo(this.$duration);
					}
					this.$duration.val(seconds);
				} else {
					this.setup();
					this.render();
				}
			}
		},

		fetch: function () {
			return {};
		},
	});
});


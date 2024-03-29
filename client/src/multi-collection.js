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
(function (Espo, _,Backbone) {

	Espo.MultiCollection = Espo.Collection.extend({

		/**
		 * @prop {Object} seeds Hash off model classes.
		 */
		seeds: null,

		initialize: function (models, options) {
			options = options || {};
			
			this.sortBy = options.sortBy || this.sortBy;			
			this.asc = ('asc' in options) ? options.asc : this.asc;
			
			Backbone.Collection.prototype.initialize.call(this);
		},

		parse: function (resp, options) {
			this.total = resp.total;
			return resp.list.map(function (attributes) {
				var a = _.clone(attributes);
				delete a['_scope'];
				return new this.seeds[attributes._scope](a, options);				
			}.bind(this));
		},

	});

}).call(this, Espo, _, Backbone);

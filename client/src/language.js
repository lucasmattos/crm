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

Espo.Language = function (cache) {
	this.cache = cache || null;
	this.data = {};
};

_.extend(Espo.Language.prototype, {

	data: null,

	cache: null,
	
	url: 'I18n',
	
	has: function (name, category, scope) {
		if (scope in this.data) {
			if (category in this.data[scope]) {
				if (name in this.data[scope][category]) {
					return true;
				}
			}
		}
	},

	get: function (scope, category, name) {
		if (scope in this.data) {
			if (category in this.data[scope]) {
				if (name in this.data[scope][category]) {
					return this.data[scope][category][name];
				}
			}
		}
		if (scope == 'Global') {
			return name;
		}
		return false;
	},

	translate: function (name, category, scope) {
		scope = scope || 'Global';
		category = category || 'labels';
		var res = this.get(scope, category, name);
		if (res === false && scope != 'Global') {
			res = this.get('Global', category, name);
		}
		return res;
	},
	
	translateOption: function (value, field, scope) {
		var translation = this.translate(field, 'options', scope);	
		if (typeof translation != 'object') {
			translation = {};
		}		
		return translation[value] || value;
	},
	
	loadFromCache: function () {
		
		if (this.cache) {
			var cached = this.cache.get('app', 'language');			
			if (cached) {
				this.data = cached;
				return true;
			}
		}
		return null;
	},
	
	clearCache: function () {
		if (this.cache) {
			this.cache.clear('app', 'language');
		}
	},
	
	storeToCache: function () {
		if (this.cache) {
			this.cache.set('app', 'language', this.data);
		}
	},
	
	load: function (callback, sync) {
		var sync = (typeof sync == 'undefined') ? true: sync; 
		this.once('sync', callback);
		if (!this.loadFromCache()) {				
			this.fetch(sync);
			return;
		}
		this.trigger('sync');
	},

	fetch: function (sync) {
		var self = this;		
		$.ajax({
			url: this.url,
			type: 'GET',
			dataType: 'JSON',
			async: !(sync || false),
			success: function (data) {
				self.data = data;
				self.storeToCache();
				self.trigger('sync');
			}
		});
	},
	
}, Backbone.Events);



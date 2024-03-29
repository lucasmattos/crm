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
(function (Espo, _, $, Backbone) {

	Espo.Metadata = function (cache) {
		this.cache = cache || null;

		this.data = {};
		this.ajax = $.ajax;
	}

	_.extend(Espo.Metadata.prototype, {

		cache: null,

		data: null,

		url: 'Metadata',

		load: function (callback, sync) {
			var sync = (typeof sync == 'undefined') ? false: sync;
			this.off('sync');
			this.once('sync', callback);
			if (!this.loadFromCache()) {				
				this.fetch(sync);
				return;
			}
			this.trigger('sync');
		},

		fetch: function (sync) {
			var self = this;
			this.ajax({
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

		get: function (path, defaultValue) {
			defaultValue = defaultValue || null;

			var pointer = this.data;
			var arr = path.split('.');
			var result = defaultValue;
			arr.forEach(function (key, i) {
				if (!(key in pointer)) {
					result = defaultValue;
					return;
				}
				if (arr.length - 1 == i) {
					result = pointer[key];
				}
				pointer = pointer[key];
			});
			return result;
		},

		loadFromCache: function () {
			if (this.cache) {
				var cached = this.cache.get('app', 'metadata');
				if (cached) {
					this.data = cached;
					return true;
				}
			}
			return null;
		},

		storeToCache: function () {
			if (this.cache) {
				this.cache.set('app', 'metadata', this.data);
			}
		},

	}, Backbone.Events);

}).call(this, Espo, _, $, Backbone);

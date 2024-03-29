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

/**
 * Controller. Views, Models and Collections are created here.
*/	
Espo.Controller = function (params, injections) {
	this.initialize();
	this.params = params || {};
	this.viewFactory = injections.viewFactory;
	this.modelFactory = injections.modelFactory;
	this.collectionFactory = injections.collectionFactory;
	
	this._settings = injections.settings || null;
	this._user = injections.user || null;
	this._preferences = injections.preferences || null;
	this._acl = injections.acl || null;
	this._cache = injections.cache || null;
	this._router = injections.router || null;
	this._storage = injections.storage || null;
	this._metadata = injections.metadata || null;
	this._dateTime = injections.dateTime || null;
			
	this.set('masterRendered', false);
};

_.extend(Espo.Controller.prototype, {
	
	defaultAction: 'index',
	
	name: false,
	
	params: null,
	
	viewFactory: null,
	
	modelFactory: null,
	
	controllerFactory: null,
	
	initialize: function () {},
	
	getConfig: function () {
		return this._settings;
	},
	
	getUser: function () {
		return this._user;
	},
	
	getPreferences: function () {
		return this._preferences;
	},
	
	getAcl: function () {
		return this._acl;
	},
	
	getCache: function () {
		return this._cache;
	},
	
	getRouter: function () {
		return this._router;
	},
	
	getStorage: function () {
		return this._storage;
	},
	
	getMetadata: function () {
		return this._metadata;
	},
	
	getDateTime: function () {
		return this._dateTime;
	},
	
	/**
	 * Get parameter of all controllers.
	 * @param key
	 * @return null if doesn't exist.
	 */	
	get: function (key) {
		if (key in this.params) {
			return this.params[key];
		}
		return null;
	},	
	
	/**
	 * Set paramer for all controllers.
	 * @param key Name of view.
	 * @param value.
	 */	
	set: function (key, value) {
		this.params[key] = value;			
	},		
	
	checkAccess: function (action) {
		return true;
	},
	
	handleAccessGlobal: function () {
		if (!this.checkAccessGlobal()) {
			throw new Espo.Exceptions.AccessDenied("Denied access to action '" + this.name + "#" + action + "'");
		}
	},		
	
	checkAccessGlobal: function () {
		return true;
	},
	
	handleCheckAccess: function (action) {
		if (!this.checkAccess(action)) {
			throw new Espo.Exceptions.AccessDenied("Denied access to action '" + this.name + "#" + action + "'");
		}
	},
	
	doAction: function (action, options) {
		this.handleAccessGlobal();
		
		action = action || this.defaultAction;			
		var method = action;
		if (!(method in this)) {
			throw new Espo.Exceptions.NotFound("Action '" + this.name + "#" + action + "' is not found");
		}		
		
		var preMethod = 'before' + Espo.Utils.upperCaseFirst(method);
		var postMethod = 'after' + Espo.Utils.upperCaseFirst(method);
		
		if (preMethod in this) {
			this[preMethod].call(this, options || {});
		}						
		this[method].call(this, options || {});			
		if (postMethod in this) {
			this[postMethod].call(this, options || {});
		}
	},			
	
	/**
	 * Create master view, render it if not rendered and return it.
	 * @param {Function} callback Master view will be argument for this.
	 */	
	master: function (callback) {
		var entire = this.get('entire');
		if (entire) {
			entire.remove();
			this.set('entire', null);
		}
		var master = this.get('master');
		if (!master) {				
			this.viewFactory.create('Site.Master', null, function (master) {
				this.set('master', master);
				if (!this.get('masterRendered')) {
					master.render(function () {
						this.set('masterRendered', true);
						callback.call(this, master);
					}.bind(this));
					return;
				}
				callback.call(this, master);					
			}.bind(this));
		} else {
			callback.call(this, master);
		}							 		
	},
	
	/**
	 * Create main view in master and return it.
	 * @param {String} view Name of view.
	 * @param {Object} options Options for view.
	 * @return {Espo.View}
	 */		
	main: function (view, options, callback) {			
		var view = view || 'Base';			
		var master = this.master(function (master) {
			master.showLoadingNotification();
			options = options || {};
			options.el = '#main';			
			this.viewFactory.create(view, options, function (main) {
				main.once('render', function () {
					main.updatePageTitle();				
					master.hideLoadingNotification();						
				});
				master.setView('main', main);
				
				main.once('after:render', function () {
					$(window).scrollTop(0)
				});
				
				if (callback) {					
					callback.call(this, main);
				} else {
					main.render();
				}
			});				
		}.bind(this));		
	},
	
	showLoadingNotification: function () {
		var master = this.get('master');
		if (master) {
			master.showLoadingNotification();
		}
	},
	
	hideLoadingNotification: function () {
		var master = this.get('master');
		if (master) {
			master.hideLoadingNotification();
		}
	},
	
	/**
	 * Create view in the body tag.
	 * @param {String} view Name of view.
	 * @param {Object} options Options for view.
	 * @return {Espo.View}
	 */	
	entire: function (view, options, callback) {
		var master = this.get('master');
		if (master) {
			master.remove();
		}
		this.set('master', null);
		this.set('masterRendered', false);
		options = options || {};
		options.el = 'body';			
		this.viewFactory.create(view, options, function (view) {
			this.set('entire', view);
			callback(view);
		}.bind(this));			
	}	

}, Backbone.Events);

Espo.Controller.extend = Backbone.Router.extend;	



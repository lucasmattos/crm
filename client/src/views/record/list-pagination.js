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
Espo.define('Views.Record.ListPagination', 'View', function (Dep) {

	return Dep.extend({
	
		template: 'record.list-pagination',
				
		data: function () {
			var previous = this.collection.offset > 0;
			var next = this.collection.total - this.collection.offset > this.collection.maxSize;
			
			return {
				total: this.collection.total,
				from: this.collection.offset + 1 ,
				to: this.collection.offset + this.collection.length,
				previous: previous,
				next: next,
			};
		},
		
		setup: function () {	
		},
	});

});

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

Espo.define('Crm:Views.Dashlets.Meetings', 'Views.Dashlets.Abstract.RecordList', function (Dep) {

	return Dep.extend({

		name: 'Meetings',

		scope: 'Meeting',

		defaultOptions: {
			sortBy: 'createdAt',
			asc: false,
			displayRecords: 5,
			columnLayout: [
				{
					name: 'name',
					link: true,
					sortable: false,
					width: 40,
				},
				{
					name: 'status',
					sortable: false,
				},
				{
					name: 'dateStart',
					sortable: false,
				}
			],
			expandedLayout: {
				rows: [
					[
						{
							name: 'name',
							link: true,
						}
					],
					[
						{
							name: 'status'
						},
						{
							name: 'dateStart'
						}
					]
				]
			},
			searchData: {
				bool: {
					onlyMy: true,
				},
				advanced: {
					status: {
						type: 'notIn',
						value: ['Held', 'Not Held']
					}
				}
			},
		},

	});
});


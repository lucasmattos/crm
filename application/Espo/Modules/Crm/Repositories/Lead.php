<?php
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

namespace Espo\Modules\Crm\Repositories;

use Espo\ORM\Entity;

class Lead extends \Espo\Core\ORM\Repositories\RDB
{	
	public function handleSelectParams(&$params)
	{
		parent::handleSelectParams($params);		
		
		if (empty($params['customJoin'])) {
			$params['customJoin'] = '';	
		}
		
		$params['customJoin'] .= " 
			LEFT JOIN currency ON currency.id = lead.opportunity_amount_currency
		";
	}	

}


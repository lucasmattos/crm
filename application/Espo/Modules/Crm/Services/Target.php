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

namespace Espo\Modules\Crm\Services;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\Forbidden;
use \Espo\ORM\Entity;

class Target extends \Espo\Services\Record
{	
	protected function getDuplicateWhereClause(Entity $entity)
	{
		return array(
			'firstName' => $entity->get('firstName'),
			'lastName' => $entity->get('lastName'),
		);
	}
	
	public function convert($id)
	{
    	$entityManager = $this->getEntityManager();    	
    	$target = $this->getEntity($id);
    	
    	if (!$this->getAcl()->check($target, 'delete')) {
    		throw new Forbidden();
    	}
    	if (!$this->getAcl()->check('Lead', 'read')) {
    		throw new Forbidden();
    	} 	
    	
    	$lead = $entityManager->getEntity('Lead');    	
    	$lead->set($target->toArray());		
		
		$entityManager->removeEntity($target);
    	$entityManager->saveEntity($lead);

    	return $lead;
	}
}


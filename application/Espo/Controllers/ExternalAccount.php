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

namespace Espo\Controllers;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\Forbidden;

class ExternalAccount extends \Espo\Core\Controllers\Record
{
	public static $defaultAction = 'list';
	
	public function actionList($params, $data, $request)
	{
		$integrations = $this->getEntityManager()->getRepository('Integration')->find();	
		$arr = array();
		foreach ($integrations as $entity) {
			if ($entity->get('enabled') && $this->getMetadata()->get('integrations.' . $entity->id .'.allowUserAccounts')) {				
				$arr[] = array(
					'id' => $entity->id
				);
			}
		}
		return array(
			'list' => $arr
		);
	}
	
	public function actionGetOAuthCredentials($params, $data, $request)
	{
		$id = $request->get('id');
		list($integration, $userId) = explode('__', $id);
		
		if (!$this->getUser()->isAdmin()) {
			if ($this->getUser()->id != $userId) {
				throw new Forbidden();
			}
		}
		
		$entity = $this->getEntityManager()->getEntity('Integration', $integration);
		if ($entity) {
			return array(
				'clientId' => $entity->get('clientId'),
				'redirectUri' => $this->getConfig()->get('siteUrl') . '/oauthcallback'
			);
		}
	}

	public function actionRead($params, $data, $request)
	{
		list($integration, $userId) = explode('__', $params['id']);
		
		if (!$this->getUser()->isAdmin()) {
			if ($this->getUser()->id != $userId) {
				throw new Forbidden();
			}
		}
		
		$entity = $this->getEntityManager()->getEntity('ExternalAccount', $params['id']);		
		return $entity->toArray();
	}
	
	public function actionUpdate($params, $data)
	{
		return $this->actionPatch($params, $data);
	}
	
	public function actionPatch($params, $data)
	{
		list($integration, $userId) = explode('__', $params['id']);
		
		if (!$this->getUser()->isAdmin()) {
			if ($this->getUser()->id != $userId) {
				throw new Forbidden();
			}
		}
		
		$entity = $this->getEntityManager()->getEntity('ExternalAccount', $params['id']);
		$entity->set($data);
		$this->getEntityManager()->saveEntity($entity);
		
		return $entity->toArray();		
	}
}


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

use \Espo\ORM\Entity;
use \Espo\Modules\Crm\Business\Event\Invitations;

use \Espo\Core\Exceptions\Error;
use \Espo\Core\Exceptions\Forbidden;

class Meeting extends \Espo\Services\Record
{
	protected function init()
	{
		$this->dependencies[] = 'mailSender';
		$this->dependencies[] = 'preferences';
		$this->dependencies[] = 'language';
		$this->dependencies[] = 'dateTime';
	}

	protected function getMailSender()
	{
		return $this->injections['mailSender'];
	}

	protected function getPreferences()
	{
		return $this->injections['preferences'];
	}

	protected function getLanguage()
	{
		return $this->injections['language'];
	}

	protected function getDateTime()
	{
		return $this->injections['dateTime'];
	}
	
	protected function getInvitationManager()
	{
		return new Invitations($this->getEntityManager(), $this->getMailSender(), $this->getConfig(), $this->getDateTime(), $this->getLanguage());
	}

	public function sendInvitations(Entity $entity)
	{
		$invitationManager = $this->getInvitationManager();
		
		$users = $entity->get('users');
		foreach ($users as $user) {
			$invitationManager->sendInvitation($entity, $user, 'users');
		}

		$contacts = $entity->get('contacts');
		foreach ($contacts as $contact) {
			$invitationManager->sendInvitation($entity, $contact, 'contacts');
		}

		$leads = $entity->get('leads');
		foreach ($leads as $lead) {
			$invitationManager->sendInvitation($entity, $lead, 'leads');
		}

		return true;
	}

	protected function storeEntity(Entity $entity)
	{
		$assignedUserId = $entity->get('assignedUserId');
		if ($assignedUserId && $entity->has('usersIds')) {
			$usersIds = $entity->get('usersIds');
			if (!is_array($usersIds)) {
				$usersIds = array();
			}
			if (!in_array($assignedUserId, $usersIds)) {
				$usersIds[] = $assignedUserId;
				$entity->set('usersIds', $usersIds);
				$hash = $entity->get('usersNames');
				if ($hash instanceof \stdClass) {
					$hash->assignedUserId = $entity->get('assignedUserName');
					$entity->set('usersNames', $hash);
				}
			}
		}
		return parent::storeEntity($entity);
	}
}


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

namespace Espo\Hooks\Common;

use Espo\ORM\Entity;

class AssignmentEmailNotification extends \Espo\Core\Hooks\Base
{	
	
	public function afterSave(Entity $entity)
	{
		if (
			$this->getConfig()->get('assignmentEmailNotifications')
			&& 
			in_array($entity->getEntityName(), $this->getConfig()->get('assignmentEmailNotificationsEntityList', array()))
		) {		
		
			$userId = $entity->get('assignedUserId');
			if (!empty($userId) && $userId != $this->getUser()->id && $entity->isFieldChanged('assignedUserId')) {
				$job = $this->getEntityManager()->getEntity('Job');
				$job->set(array(
					'serviceName' => 'EmailNotification',
					'method' => 'notifyAboutAssignmentJob',
					'data' => json_encode(array(
						'userId' => $userId,
						'assignerUserId' => $this->getUser()->id,
						'entityId' => $entity->id,
						'entityType' => $entity->getEntityName()
					)),
					'executeTime' => date('Y-m-d H:i:s'),
				));
				$this->getEntityManager()->saveEntity($job);
			}			
		}
	}

}


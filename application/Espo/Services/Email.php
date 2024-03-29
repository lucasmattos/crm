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

namespace Espo\Services;

use \Espo\ORM\Entity;

use \Espo\Core\Exceptions\Error;

class Email extends Record
{

	protected function init()
	{
		$this->dependencies[] = 'mailSender';
		$this->dependencies[] = 'preferences';
		$this->dependencies[] = 'fileManager';
	}
	
	protected function getFileManager()
	{
		return $this->getInjection('fileManager');
	}

	protected function getMailSender()
	{
		return $this->injections['mailSender'];
	}

	protected function getPreferences()
	{
		return $this->injections['preferences'];
	}

	public function createEntity($data)
	{
		$entity = parent::createEntity($data);

		if ($entity && $entity->get('status') == 'Sending') {
			$emailSender = $this->getMailSender();

			if (strtolower($this->getUser()->get('emailAddress')) == strtolower($entity->get('from'))) {
				$smtpParams = $this->getPreferences()->getSmtpParams();
				if ($smtpParams) {
					$smtpParams['fromName'] = $this->getUser()->get('name');
					$emailSender->useSmtp($smtpParams);
				}
			} else {
				if (!$this->getConfig()->get('outboundEmailIsShared')) {
					throw new Error('Can not use system smtp. outboundEmailIsShared is false.');
				}
			}

			$emailSender->send($entity);

			$this->getEntityManager()->saveEntity($entity);
		}

		return $entity;
	}

	public function getEntity($id = null)
	{
		$entity = parent::getEntity($id);
		if (!empty($id)) {

			if ($entity->get('fromEmailAddressName')) {
				$entity->set('from', $entity->get('fromEmailAddressName'));
			}

			$entity->loadLinkMultipleField('toEmailAddresses');
			$entity->loadLinkMultipleField('ccEmailAddresses');
			$entity->loadLinkMultipleField('bccEmailAddresses');

			$names = $entity->get('toEmailAddressesNames');
			if (!empty($names)) {
				$arr = array();
				foreach ($names as $id => $address) {
					$arr[] = $address;
				}
				$entity->set('to', implode(';', $arr));
			}

			$names = $entity->get('ccEmailAddressesNames');
			if (!empty($names)) {
				$arr = array();
				foreach ($names as $id => $address) {
					$arr[] = $address;
				}
				$entity->set('cc', implode(';', $arr));
			}

			$names = $entity->get('bccEmailAddressesNames');
			if (!empty($names)) {
				$arr = array();
				foreach ($names as $id => $address) {
					$arr[] = $address;
				}
				$entity->set('bcc', implode(';', $arr));
			}
			
			$this->loadNameHash($entity);

		}
		return $entity;
	}
	
	public function loadNameHash(Entity $entity)
	{
		$addressList = array();
		if ($entity->get('from')) {
			$addressList[] = $entity->get('from');
		}
		
		$arr = explode(';', $entity->get('to'));
		foreach ($arr as $address) {
			if (!in_array($address, $addressList)) {
				$addressList[] = $address;
			}
		}
		
		$arr = explode(';', $entity->get('cc'));
		foreach ($arr as $address) {
			if (!in_array($address, $addressList)) {
				$addressList[] = $address;
			}
		}
		
		$nameHash = array();
		$typeHash = array();
		$idHash = array();
		foreach ($addressList as $address) {
			$p = $this->getEntityManager()->getRepository('EmailAddress')->getEntityByAddress($address);
			if ($p) {
				$nameHash[$address] = $p->get('name');
				$typeHash[$address] = $p->getEntityName();
				$idHash[$address] = $p->id;
			}
		}
		
		$entity->set('nameHash', $nameHash);
		$entity->set('typeHash', $typeHash);
		$entity->set('idHash', $idHash);
	}
	
	public function findEntities($params)
	{
		$searchByEmailAddress = false;
		if (!empty($params['where']) && is_array($params['where'])) {
			foreach ($params['where'] as $i => $p) {
				if (!empty($p['field']) && $p['field'] == 'emailAddress') {
					$searchByEmailAddress = true;				
					$emailAddress = $this->getEntityManager()->getRepository('EmailAddress')->where(array(
						'lower' => strtolower($p['value'])
					))->findOne();
					unset($params['where'][$i]);					
					$emailAddressId = null;
					if ($emailAddress) {
						$emailAddressId = $emailAddress->id;
					}
				}
		
			}
		}
		
		$selectParams = $this->getSelectManager($this->entityName)->getSelectParams($params, true);
		
		if ($searchByEmailAddress) {
			if ($emailAddressId) {
				$pdo = $this->getEntityManager()->getPDO();
		
				$selectParams['customJoin'] = "
					LEFT JOIN email_email_address 
						ON 
						email_email_address.email_id = email.id AND 
						email_email_address.deleted = 0
				";
				$selectParams['customWhere'] = " 
					AND
					(
						email.from_email_address_id = ".$pdo->quote($emailAddressId)." OR 
						email_email_address.email_address_id = ".$pdo->quote($emailAddressId)."
					)
				";
			} else {
				$selectParams['customWhere'] = ' AND 0';
			}
		
		}		
		
		$collection = $this->getRepository()->find($selectParams);	
		
		foreach ($collection as $e) {
			$this->loadParentNameFields($e);
		}
		
    	return array(
    		'total' => $this->getRepository()->count($selectParams),
    		'collection' => $collection,
    	);
	}
	
	public function getCopiedAttachments($id)
	{
		$ids = array();		
		$names = new \stdClass();
		
		if (!empty($id)) {
			$email = $this->getEntityManager()->getEntity('Email', $id);
			if ($email && $this->getAcl()->check($email, 'read')) {
				$email->loadLinkMultipleField('attachments');
				$attachmentsIds = $email->get('attachmentsIds');
				
				foreach ($attachmentsIds as $attachmentId) {
					$source = $this->getEntityManager()->getEntity('Attachment', $attachmentId);
					if ($source) {				
						$attachment = $this->getEntityManager()->getEntity('Attachment');
						$attachment->set('role', 'Attachment');
						$attachment->set('type', $source->get('type'));
						$attachment->set('size', $source->get('size'));
						$attachment->set('global', $source->get('global'));
						$attachment->set('name', $source->get('name'));
						
						$this->getEntityManager()->saveEntity($attachment);
						
						$contents = $this->getFileManager()->getContents('data/upload/' . $source->id);
						if (!empty($contents)) {
							$this->getFileManager()->putContents('data/upload/' . $attachment->id, $contents);
							$ids[] = $attachment->id;
							$names->{$attachment->id} = $attachment->get('name');
						}
					}
				}			
			}
		}
		
		return array(
			'ids' => $ids,
			'names' => $names
		);
	}
}


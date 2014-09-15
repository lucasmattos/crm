<?php

return array (
  'Attachment' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 36,
      ),
      'size' => 
      array (
        'type' => 'int',
        'len' => 11,
      ),
      'parent' => 
      array (
        'type' => 'linkParent',
        'notStorable' => true,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'contents' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'role' => 
      array (
        'type' => 'varchar',
        'len' => 36,
      ),
      'global' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'token' => 
      array (
        'type' => 'varchar',
        'len' => '36',
      ),
      'hash' => 
      array (
        'type' => 'varchar',
        'len' => '36',
        'index' => true,
      ),
      'userId' => 
      array (
        'type' => 'foreignId',
        'len' => '24',
        'index' => true,
        'dbType' => 'varchar',
        'notNull' => false,
      ),
      'ipAddress' => 
      array (
        'type' => 'varchar',
        'len' => '36',
      ),
      'lastAccess' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Currency' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rate' => 
      array (
        'type' => 'float',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'fromName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'from' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'to' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'cc' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'bcc' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'nameHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'typeHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'idHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'messageId' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'messageIdInternal' => 
      array (
        'type' => 'varchar',
        'len' => 300,
        'index' => true,
      ),
      'emailAddress' => 
      array (
        'type' => 'base',
        'notStorable' => true,
      ),
      'bodyPlain' => 
      array (
        'type' => 'text',
      ),
      'body' => 
      array (
        'type' => 'text',
      ),
      'isHtml' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Archived',
        'len' => 255,
      ),
      'parent' => 
      array (
        'type' => 'linkParent',
        'notStorable' => true,
      ),
      'dateSent' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deliveryDate' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'bccEmailAddressesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'bccEmailAddressesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'ccEmailAddressesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'ccEmailAddressesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'toEmailAddressesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'toEmailAddressesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'fromEmailAddressName' => 
      array (
        'type' => 'foreign',
        'relation' => 'fromEmailAddress',
        'foreign' => 'name',
      ),
      'fromEmailAddressId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'bccEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'EmailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'bcc',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'ccEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'EmailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'cc',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'toEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'EmailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'to',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'fromEmailAddress' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailAddress',
        'key' => 'fromEmailAddressId',
        'foreignKey' => 'id',
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Email',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'host' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'port' => 
      array (
        'type' => 'varchar',
        'default' => '143',
        'len' => 255,
      ),
      'ssl' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'password' => 
      array (
        'type' => 'password',
      ),
      'monitoredFolders' => 
      array (
        'type' => 'varchar',
        'default' => 'INBOX',
        'len' => 255,
      ),
      'fetchSince' => 
      array (
        'type' => 'date',
      ),
      'fetchData' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'EmailAddress' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'lower' => 
      array (
        'type' => 'varchar',
        'index' => true,
        'len' => 255,
      ),
      'invalid' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'optOut' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'body' => 
      array (
        'type' => 'text',
      ),
      'isHtml' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'EmailTemplate',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
    ),
  ),
  'ExternalAccount' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'data' => 
      array (
        'type' => 'text',
      ),
      'enabled' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'data' => 
      array (
        'type' => 'text',
      ),
      'enabled' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Pending',
        'len' => 255,
      ),
      'executeTime' => 
      array (
        'type' => 'datetime',
      ),
      'serviceName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'method' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'data' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'scheduledJobName' => 
      array (
        'type' => 'foreign',
        'relation' => 'scheduledJob',
        'foreign' => 'name',
      ),
      'scheduledJobId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'scheduledJob' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'post' => 
      array (
        'type' => 'text',
      ),
      'data' => 
      array (
        'type' => 'text',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'parent' => 
      array (
        'type' => 'linkParent',
        'notStorable' => true,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'relationName' => 'NoteAttachments',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Notification' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'data' => 
      array (
        'type' => 'text',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'read' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'userId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'OutboundEmail' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'server' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'port' => 
      array (
        'type' => 'int',
        'default' => '25',
        'len' => 11,
      ),
      'auth' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'security' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'password' => 
      array (
        'type' => 'password',
      ),
      'fromName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'fromAddress' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'userId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'PhoneNumber' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'timeZone' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'dateFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'MM/DD/YYYY',
        'len' => 255,
      ),
      'timeFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'HH:mm',
        'len' => 255,
      ),
      'weekStart' => 
      array (
        'type' => 'int',
        'default' => '0',
        'len' => 11,
      ),
      'thousandSeparator' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'decimalMark' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
      ),
      'defaultCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'len' => 255,
      ),
      'dashboardLayout' => 
      array (
        'type' => 'text',
      ),
      'dashletOptions' => 
      array (
        'type' => 'text',
      ),
      'presetFilters' => 
      array (
        'type' => 'text',
      ),
      'smtpEmailAddress' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'smtpServer' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => 'en_US',
        'len' => 255,
      ),
      'exportDelimiter' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'receiveAssignmentEmailNotifications' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 150,
      ),
      'data' => 
      array (
        'type' => 'text',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'roleId',
          1 => 'teamId',
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'roleId',
          1 => 'userId',
        ),
      ),
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'job' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'scheduling' => 
      array (
        'type' => 'varchar',
        'default' => '* * * * *',
        'len' => 255,
      ),
      'lastRun' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'logIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'logNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'log' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ScheduledJobLogRecord',
        'foreignKey' => 'scheduledJobId',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'executionTime' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'scheduledJobName' => 
      array (
        'type' => 'foreign',
        'relation' => 'scheduledJob',
        'foreign' => 'name',
      ),
      'scheduledJobId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'scheduledJob' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'useCache' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'recordsPerPage' => 
      array (
        'type' => 'int',
        'default' => '20',
        'len' => 11,
      ),
      'recordsPerPageSmall' => 
      array (
        'type' => 'int',
        'default' => '10',
        'len' => 11,
      ),
      'timeZone' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'dateFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'MM/DD/YYYY',
        'len' => 255,
      ),
      'timeFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'HH:mm',
        'len' => 255,
      ),
      'weekStart' => 
      array (
        'type' => 'int',
        'default' => '0',
        'len' => 11,
      ),
      'thousandSeparator' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'decimalMark' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
      ),
      'currencyList' => 
      array (
        'type' => 'jsonArray',
        'default' => '["USD","EUR"]',
      ),
      'defaultCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'len' => 255,
      ),
      'baseCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'len' => 255,
      ),
      'currencyRates' => 
      array (
        'type' => 'base',
        'notStorable' => true,
      ),
      'outboundEmailIsShared' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'outboundEmailFromName' => 
      array (
        'type' => 'varchar',
        'default' => 'EspoCRM',
        'len' => 255,
      ),
      'outboundEmailFromAddress' => 
      array (
        'type' => 'varchar',
        'default' => 'crm@example.com',
        'len' => 255,
      ),
      'smtpServer' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
      ),
      'tabList' => 
      array (
        'type' => 'jsonArray',
      ),
      'quickCreateList' => 
      array (
        'type' => 'jsonArray',
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => 'en_US',
        'len' => 255,
      ),
      'exportDelimiter' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'authenticationMethod' => 
      array (
        'type' => 'varchar',
        'default' => 'Espo',
        'len' => 255,
      ),
      'ldapHost' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapPort' => 
      array (
        'type' => 'int',
        'default' => '389',
        'len' => 11,
      ),
      'ldapSecurity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAuth' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapUsername' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapPassword' => 
      array (
        'type' => 'password',
      ),
      'ldapBindRequiresDn' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapBaseDn' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapUserLoginFilter' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountCanonicalForm' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountDomainName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountDomainNameShort' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountFilterFormat' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapTryUsernameSplit' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapOptReferrals' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapCreateEspoUser' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'disableExport' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignmentEmailNotifications' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignmentEmailNotificationsEntityList' => 
      array (
        'type' => 'jsonArray',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'companyLogoName' => 
      array (
        'type' => 'foreign',
        'relation' => 'companyLogo',
        'foreign' => 'name',
      ),
      'companyLogoId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'companyLogo' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'companyLogoId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'rolesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rolesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'roles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'roleId',
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'userId',
        ),
      ),
    ),
  ),
  'UniqueId' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'data' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(user.first_name, \'\'), \' \', IFNULL(user.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(user.first_name LIKE {value} OR user.last_name LIKE {value} OR CONCAT(user.first_name, \' \', user.last_name) LIKE {value} OR CONCAT(user.last_name, \' \', user.first_name) LIKE {value})',
          '=' => '(user.first_name = {value} OR user.last_name = {value} OR CONCAT(user.first_name, \' \', user.last_name) = {value} OR CONCAT(user.last_name, \' \', user.first_name) = {value})',
        ),
        'orderBy' => 'user.first_name {direction}, user.last_name {direction}',
      ),
      'isAdmin' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userName' => 
      array (
        'type' => 'varchar',
        'len' => 50,
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'password' => 
      array (
        'type' => 'password',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'email_address.name',
        'where' => 
        array (
          'LIKE' => 'user.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'User\' AND
									email_address.deleted = 0 AND email_address.name LIKE {value}          		
							)',
          '=' => 'user.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'User\' AND
									email_address.deleted = 0 AND email_address.name = {value}          		
							)',
          '<>' => 'user.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'User\' AND
									email_address.deleted = 0 AND email_address.name <> {value}          		
							)',
        ),
        'orderBy' => 'email_address.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phone_number.name',
        'where' => 
        array (
          'LIKE' => 'user.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
									phone_number.deleted = 0 AND phone_number.name LIKE {value}          		
							)',
          '=' => 'user.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
									phone_number.deleted = 0 AND phone_number.name = {value}          		
							)',
          '<>' => 'user.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
									phone_number.deleted = 0 AND phone_number.name <> {value}          		
							)',
        ),
        'orderBy' => 'phone_number.name {direction}',
      ),
      'token' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rolesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rolesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'defaultTeamName' => 
      array (
        'type' => 'foreign',
        'relation' => 'defaultTeam',
        'foreign' => 'name',
      ),
      'defaultTeamId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'callId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'meetingId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'roles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'roleId',
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'teamId',
        ),
      ),
      'defaultTeam' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'defaultTeamId',
        'foreignKey' => 'id',
      ),
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'User',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'User',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'email_address.name',
        'where' => 
        array (
          'LIKE' => 'account.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Account\' AND
									email_address.deleted = 0 AND email_address.name LIKE {value}          		
							)',
          '=' => 'account.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Account\' AND
									email_address.deleted = 0 AND email_address.name = {value}          		
							)',
          '<>' => 'account.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Account\' AND
									email_address.deleted = 0 AND email_address.name <> {value}          		
							)',
        ),
        'orderBy' => 'email_address.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phone_number.name',
        'where' => 
        array (
          'LIKE' => 'account.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
									phone_number.deleted = 0 AND phone_number.name LIKE {value}          		
							)',
          '=' => 'account.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
									phone_number.deleted = 0 AND phone_number.name = {value}          		
							)',
          '<>' => 'account.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
									phone_number.deleted = 0 AND phone_number.name <> {value}          		
							)',
        ),
        'orderBy' => 'phone_number.name {direction}',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'industry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'sicCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
      ),
      'contactRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'billingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'billingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'billingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'billingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'billingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'cases' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'accountId',
      ),
      'opportunities' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'accountId',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planned',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
      ),
      'duration' => 
      array (
        'type' => 'int',
        'default' => '300',
        'len' => 11,
      ),
      'direction' => 
      array (
        'type' => 'varchar',
        'default' => 'Outbound',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'parent' => 
      array (
        'type' => 'linkParent',
        'notStorable' => true,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'leadsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'leadId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'userId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Call',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'len' => 11,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'New',
        'len' => 255,
      ),
      'priority' => 
      array (
        'type' => 'varchar',
        'default' => 'Normal',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactName' => 
      array (
        'type' => 'foreign',
        'relation' => 'contact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'contactId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'contact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Case',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(contact.first_name, \'\'), \' \', IFNULL(contact.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(contact.first_name LIKE {value} OR contact.last_name LIKE {value} OR CONCAT(contact.first_name, \' \', contact.last_name) LIKE {value} OR CONCAT(contact.last_name, \' \', contact.first_name) LIKE {value})',
          '=' => '(contact.first_name = {value} OR contact.last_name = {value} OR CONCAT(contact.first_name, \' \', contact.last_name) = {value} OR CONCAT(contact.last_name, \' \', contact.first_name) = {value})',
        ),
        'orderBy' => 'contact.first_name {direction}, contact.last_name {direction}',
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'where' => 
        array (
          '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id = {value})',
        ),
        'len' => '24',
        'index' => true,
        'dbType' => 'varchar',
        'notNull' => false,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'notStorable' => true,
        'select' => 'accountContact.role',
        'orderBy' => 'accountContact.role {direction}',
        'where' => 
        array (
          'LIKE' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND role LIKE {value})',
          '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND role = {value})',
        ),
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'email_address.name',
        'where' => 
        array (
          'LIKE' => 'contact.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Contact\' AND
									email_address.deleted = 0 AND email_address.name LIKE {value}          		
							)',
          '=' => 'contact.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Contact\' AND
									email_address.deleted = 0 AND email_address.name = {value}          		
							)',
          '<>' => 'contact.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Contact\' AND
									email_address.deleted = 0 AND email_address.name <> {value}          		
							)',
        ),
        'orderBy' => 'email_address.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phone_number.name',
        'where' => 
        array (
          'LIKE' => 'contact.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
									phone_number.deleted = 0 AND phone_number.name LIKE {value}          		
							)',
          '=' => 'contact.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
									phone_number.deleted = 0 AND phone_number.name = {value}          		
							)',
          '<>' => 'contact.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
									phone_number.deleted = 0 AND phone_number.name <> {value}          		
							)',
        ),
        'orderBy' => 'phone_number.name {direction}',
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'accountRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'opportunityRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'accountsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'callId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'meetingId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'cases' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'contactId',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'opportunityId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'accountId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'host' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'port' => 
      array (
        'type' => 'varchar',
        'default' => '143',
        'len' => 255,
      ),
      'ssl' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'password' => 
      array (
        'type' => 'password',
      ),
      'monitoredFolders' => 
      array (
        'type' => 'varchar',
        'default' => 'INBOX',
        'len' => 255,
      ),
      'fetchData' => 
      array (
        'type' => 'text',
      ),
      'createCase' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'caseDistribution' => 
      array (
        'type' => 'varchar',
        'default' => 'Direct-Assignment',
        'len' => 255,
      ),
      'reply' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'replyFromAddress' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'replyToAddress' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'replyFromName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'replyEmailTemplateName' => 
      array (
        'type' => 'foreign',
        'relation' => 'replyEmailTemplate',
        'foreign' => 'name',
      ),
      'replyEmailTemplateId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'teamName' => 
      array (
        'type' => 'foreign',
        'relation' => 'team',
        'foreign' => 'name',
      ),
      'teamId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignToUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignToUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignToUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'replyEmailTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'replyEmailTemplateId',
        'foreignKey' => 'id',
      ),
      'team' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'teamId',
        'foreignKey' => 'id',
      ),
      'assignToUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignToUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Lead' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(lead.first_name, \'\'), \' \', IFNULL(lead.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(lead.first_name LIKE {value} OR lead.last_name LIKE {value} OR CONCAT(lead.first_name, \' \', lead.last_name) LIKE {value} OR CONCAT(lead.last_name, \' \', lead.first_name) LIKE {value})',
          '=' => '(lead.first_name = {value} OR lead.last_name = {value} OR CONCAT(lead.first_name, \' \', lead.last_name) = {value} OR CONCAT(lead.last_name, \' \', lead.first_name) = {value})',
        ),
        'orderBy' => 'lead.first_name {direction}, lead.last_name {direction}',
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'New',
        'len' => 255,
      ),
      'source' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'opportunityAmountCurrency' => 
      array (
        'type' => 'varchar',
        'orderBy' => 'opportunityAmountConverted {direction}',
        'len' => 255,
      ),
      'opportunityAmount' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'orderBy' => 'opportunityAmountConverted {direction}',
      ),
      'opportunityAmountConverted' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'notStorable' => true,
        'select' => 'lead.opportunity_amount * currency.rate',
        'where' => 
        array (
          '=' => 'lead.opportunity_amount * currency.rate = {value}',
          '>' => 'lead.opportunity_amount * currency.rate > {value}',
          '<' => 'lead.opportunity_amount * currency.rate < {value}',
          '>=' => 'lead.opportunity_amount * currency.rate >= {value}',
          '<=' => 'lead.opportunity_amount * currency.rate <= {value}',
          '<>' => 'lead.opportunity_amount * currency.rate <> {value}',
        ),
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'email_address.name',
        'where' => 
        array (
          'LIKE' => 'lead.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Lead\' AND
									email_address.deleted = 0 AND email_address.name LIKE {value}          		
							)',
          '=' => 'lead.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Lead\' AND
									email_address.deleted = 0 AND email_address.name = {value}          		
							)',
          '<>' => 'lead.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Lead\' AND
									email_address.deleted = 0 AND email_address.name <> {value}          		
							)',
        ),
        'orderBy' => 'email_address.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phone_number.name',
        'where' => 
        array (
          'LIKE' => 'lead.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
									phone_number.deleted = 0 AND phone_number.name LIKE {value}          		
							)',
          '=' => 'lead.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
									phone_number.deleted = 0 AND phone_number.name = {value}          		
							)',
          '<>' => 'lead.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
									phone_number.deleted = 0 AND phone_number.name <> {value}          		
							)',
        ),
        'orderBy' => 'phone_number.name {direction}',
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdOpportunityName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdOpportunity',
        'foreign' => 'name',
      ),
      'createdOpportunityId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdContactName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdContactId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdAccountName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdAccount',
        'foreign' => 'name',
      ),
      'createdAccountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'createdOpportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'createdOpportunityId',
        'foreignKey' => 'id',
      ),
      'createdContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'createdContactId',
        'foreignKey' => 'id',
      ),
      'createdAccount' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'createdAccountId',
        'foreignKey' => 'id',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'callId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'meetingId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'opportunities' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planned',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
      ),
      'duration' => 
      array (
        'type' => 'int',
        'default' => '3600',
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'parent' => 
      array (
        'type' => 'linkParent',
        'notStorable' => true,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'leadsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'leadId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'userId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Meeting',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'orderBy' => 'amountConverted {direction}',
        'len' => 255,
      ),
      'amount' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'orderBy' => 'amountConverted {direction}',
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'notStorable' => true,
        'select' => 'opportunity.amount * currency.rate',
        'where' => 
        array (
          '=' => 'opportunity.amount * currency.rate = {value}',
          '>' => 'opportunity.amount * currency.rate > {value}',
          '<' => 'opportunity.amount * currency.rate < {value}',
          '>=' => 'opportunity.amount * currency.rate >= {value}',
          '<=' => 'opportunity.amount * currency.rate <= {value}',
          '<>' => 'opportunity.amount * currency.rate <> {value}',
        ),
      ),
      'stage' => 
      array (
        'type' => 'varchar',
        'default' => 'Prospecting',
        'len' => 255,
      ),
      'probability' => 
      array (
        'type' => 'int',
        'len' => 11,
      ),
      'leadSource' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'closeDate' => 
      array (
        'type' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Opportunity',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(target.first_name, \'\'), \' \', IFNULL(target.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(target.first_name LIKE {value} OR target.last_name LIKE {value} OR CONCAT(target.first_name, \' \', target.last_name) LIKE {value} OR CONCAT(target.last_name, \' \', target.first_name) LIKE {value})',
          '=' => '(target.first_name = {value} OR target.last_name = {value} OR CONCAT(target.first_name, \' \', target.last_name) = {value} OR CONCAT(target.last_name, \' \', target.first_name) = {value})',
        ),
        'orderBy' => 'target.first_name {direction}, target.last_name {direction}',
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'accountName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'email_address.name',
        'where' => 
        array (
          'LIKE' => 'target.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Target\' AND
									email_address.deleted = 0 AND email_address.name LIKE {value}          		
							)',
          '=' => 'target.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Target\' AND
									email_address.deleted = 0 AND email_address.name = {value}          		
							)',
          '<>' => 'target.id IN (
								SELECT entity_id 
								FROM entity_email_address
								JOIN email_address ON email_address.id = entity_email_address.email_address_id
								WHERE 
									entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Target\' AND
									email_address.deleted = 0 AND email_address.name <> {value}          		
							)',
        ),
        'orderBy' => 'email_address.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phone_number.name',
        'where' => 
        array (
          'LIKE' => 'target.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
									phone_number.deleted = 0 AND phone_number.name LIKE {value}          		
							)',
          '=' => 'target.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
									phone_number.deleted = 0 AND phone_number.name = {value}          		
							)',
          '<>' => 'target.id IN (
								SELECT entity_id 
								FROM entity_phone_number
								JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
								WHERE 
									entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
									phone_number.deleted = 0 AND phone_number.name <> {value}          		
							)',
        ),
        'orderBy' => 'phone_number.name {direction}',
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'priority' => 
      array (
        'type' => 'varchar',
        'default' => 'Normal',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'isOverdue' => 
      array (
        'type' => 'base',
        'notStorable' => true,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'parent' => 
      array (
        'type' => 'linkParent',
        'notStorable' => true,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Task',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
);

?>
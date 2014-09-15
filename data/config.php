<?php

return array (
  'cacheTimestamp' => 1410801616,
  'database' => 
  array (
    'driver' => 'pdo_mysql',
    'dbname' => 'crm',
    'user' => 'root',
    'password' => 'root',
    'port' => '',
    'host' => 'localhost',
  ),
  'useCache' => true,
  'recordsPerPage' => 20,
  'recordsPerPageSmall' => 5,
  'applicationName' => 'EspoCRM',
  'version' => '2.5.2',
  'timeZone' => 'UTC',
  'dateFormat' => 'DD.MM.YYYY',
  'timeFormat' => 'HH:mm',
  'weekStart' => 0,
  'thousandSeparator' => '.',
  'decimalMark' => ',',
  'exportDelimiter' => ',',
  'currencyList' => 
  array (
    0 => 'BRL',
  ),
  'defaultCurrency' => 'BRL',
  'baseCurrency' => 'BRL',
  'currencyRates' => 
  array (
  ),
  'outboundEmailIsShared' => false,
  'outboundEmailFromName' => '',
  'outboundEmailFromAddress' => '',
  'smtpServer' => '',
  'smtpPort' => '25',
  'smtpAuth' => false,
  'smtpSecurity' => '',
  'smtpUsername' => '',
  'smtpPassword' => '',
  'languageList' => 
  array (
    0 => 'en_US',
    1 => 'de_DE',
    2 => 'es_ES',
    3 => 'fr_FR',
    4 => 'nl_NL',
    5 => 'tr_TR',
    6 => 'ro_RO',
    7 => 'pl_PL',
    8 => 'pt_BR',
    9 => 'vi_VN',
  ),
  'language' => 'pt_BR',
  'logger' => 
  array (
    'path' => 'data/logs/espo.log',
    'level' => 'ERROR',
    'isRotate' => true,
    'maxRotateFiles' => 30,
  ),
  'authenticationMethod' => 'Espo',
  'globalSearchEntityList' => 
  array (
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
  ),
  'tabList' => 
  array (
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Calendar',
    5 => 'Meeting',
    6 => 'Call',
    7 => 'Task',
    8 => 'Case',
    9 => 'Email',
  ),
  'quickCreateList' => 
  array (
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Meeting',
    5 => 'Call',
    6 => 'Task',
    7 => 'Case',
  ),
  'calendarDefaultEntity' => 'Meeting',
  'disableExport' => false,
  'assignmentEmailNotifications' => false,
  'assignmentEmailNotificationsEntityList' => 
  array (
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case',
  ),
  'emailMessageMaxSize' => 10,
  'isInstalled' => true,
  'siteUrl' => 'http://localhost:8888/crm',
);

?>
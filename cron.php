<?php

$sapiName = php_sapi_name();

if (substr($sapiName, 0, 3) != 'cli') {
    die("Cron can be run only via CLI");
}

include "bootstrap.php";
	
$app = new \Espo\Core\Application();
$app->runCron();


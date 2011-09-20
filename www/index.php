<?php

define('PRODUCTION', ($_SERVER['HTTP_HOST'] != 'localhost' && strpos($_SERVER['HTTP_HOST'], '.dev') === false));

$config = dirname(__FILE__).'/../protected/config/main.php';
$yii = (PRODUCTION)?
	'/etc/yii/yii-1.1.8/framework/yii.php' :
	'/var/www/shared/yii/1.1.8-orig/framework/yii.php';

defined('YII_DEBUG') or define('YII_DEBUG', !PRODUCTION);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', PRODUCTION? 0 : 3);

require_once($yii);
Yii::createWebApplication($config)->run();

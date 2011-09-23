<?php
$env = getenv('ENVIRONMENT');
define('ENV', $env? $env : 'prod');
define('PRODUCTION', ENV == 'prod');

switch ($env) {
	case 'prod':
		$config = dirname(__FILE__).'/protected/config/main.php';
		$yiic = dirname(__FILE__).'/../etc/yii/yii-1.1.8/framework/yiic.php';
	break;

	case 'test':
		$config = dirname(__FILE__).'/protected/config/main.php';
		$yiic = '/etc/yii/yii-1.1.8/framework/yiic.php';
	break;

	case 'dev':
		$config = dirname(__FILE__).'/../protected/config/main.php';
		$yiic = '/var/www/shared/yii/1.1.8-orig/framework/yiic.php';
	break;
}

require_once($yiic);

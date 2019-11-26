<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

//remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
/**
* mod select
* 
*/
defined('is_select_mod') or define('is_select_mod', true);
defined('store_id') or define('store_id', 1);
defined('categorie_root_id') or define('categorie_root_id', null);


require_once($yii);
Yii::createWebApplication($config)->run();

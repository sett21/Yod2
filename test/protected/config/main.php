<?php
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
function pre($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'YoDeZeen',
	// preloading 'log' component
	'preload'=>array('log'),
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		// 'gii'=>array(
		// 	'class'=>'system.gii.GiiModule',
		// 	'password'=>'123',
		// 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
		// 	'ipFilters'=>array('127.0.0.1','::1'),
		// ),
		'admin' => array(
			   'defaultController' => 'mainpage',
		),
		
	),
	// application components
	'components'=>array(
		'user'=>array(
			'class' => 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
				
		'urlManager'=>array(
			'class' => 'UrlManager', //new UrlManager in components/UrlManager.php
			'showScriptName'=>false, 
			// 'caseSensitive'=>false,
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/item',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=mshost.mysql.ukraine.com.ua;dbname=mshost_yodezeen',
			'emulatePrepare' => true,
			'username' => 'mshost_yodezeen',
			'password' => 'w3dfutxq',
			'charset' => 'utf8',
			'tablePrefix'=>'yo_',
		),

		// 'db'=>array(
		// 	'connectionString' => 'mysql:host=localhost;dbname=gtest2',
		// 	'emulatePrepare' => true,
		// 	'username' => 'gtest2',
		// 	'password' => 'q2pkiGWp',
		// 	'charset' => 'utf8',
		// 	'tablePrefix'=>'yo_',
		// ),		
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'page/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),	
		
		'authManager' => array(
	    	// Будем использовать свой менеджер авторизации
	    	'class' => 'PhpAuthManager',
	    	// Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
	    	'defaultRoles' => array('guest'),
		),	
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'adminUrl' => '/admin',
	),
);
<?php

class AdminModule extends CWebModule
{

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
		Yii::app()->name = 'GNS Admin Panel';

		Yii::app()->setComponents(array(
            'errorHandler' => array(
                'errorAction' => 'admin/mainpage/error',
            ),
            'user' => array(
                'class' => 'WebUser',
                'stateKeyPrefix' => '_admin',
                'loginUrl' => Yii::app()->createUrl($this->getId() . '/default/login'),
            ),
            'authManager' => array(
	    		'class' => 'PhpAuthManager',
	    		'defaultRoles' => array('guest'),
	    	),
			
        ));

		Yii::app()->sourceLanguage = 'ru'; //script language
		//language on site
		Yii::app()->language = 'ru';
		if(isset(Yii::app()->request->cookies['language']->value))
			Yii::app()->language = substr(Yii::app()->request->cookies['language']->value, 0, 2);
			

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));

		//add menu
		$menu = require dirname(__FILE__).DIRECTORY_SEPARATOR.'config/menu.php';
		CMap::mergeArray(Yii::app()->params, $menu);
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}

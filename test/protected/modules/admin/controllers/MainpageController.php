<?php

class MainpageController extends AdminController
{

	public function actionIndex()
	{
		if (Yii::app()->user->isGuest) 
		{
			$model = new LoginForm;

			// collect user input data
			if (isset($_POST['LoginForm']))
			{
				$model->attributes = $_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if ($model->validate() && $model->login())
					$this->redirect( Yii::app()->params['adminUrl'] . '/' );
			}
			// display the login form
			$this->renderPartial('login',array('model'=>$model));
		}
		else{
			$this->render('main');
		}
	}

	public function actionLanguage(){
		if (isset($_GET['l']))
		{
			$cookie= new CHttpCookie('language', substr($_GET['l'], 0, 2) );
			$cookie->expire = time() + 60 * 60 * 24 * 365; //year
			$cookie->path = '/' . Yii::app()->controller->module->id . '/';
			Yii::app()->request->cookies['language'] = $cookie;
		}
		$this->redirect( Yii::app()->params['adminUrl'] . '/');
	}

	/**
	 * This is the action to handle external exceptions.
	*/
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

}
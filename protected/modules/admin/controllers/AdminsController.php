<?php
class AdminsController extends AdminController
{
	protected $modelName = 'Admins';


	/**
	 * Render list of module items.
	*/
	public function actionIndex()
	{
		if (!Yii::app()->user->checkAccess('root'))
			$this->accessError();

		$model = new $this->modelName('search');
		$model->unsetAttributes();  // clear any default values

		if (isset($_GET[$this->modelName]))
			$model->attributes=$_GET[$this->modelName];

		$this->render('list', array('model'=>$model));
	}

	/**
	 * Create item.
	*/
	public function actionCreate()
	{
		$model = new $this->modelName;
		$this->renderForm($model);
	}

	/**
	 * @param integer $id the ID of the model to be updated
	*/
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);
		$this->renderForm($model);
	}

	/**
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (!Yii::app()->user->checkAccess('root'))
			$this->accessError();
		
		$model = new $this->modelName();
		$model::model()->deleteByPk($id);
		$this->redirect( array('index') );
	}

	/**
	 * switch ON/Off status item
	 */
	public function actionOnoff()
	{
		if (!Yii::app()->user->checkAccess('root') || !Yii::app()->request->isAjaxRequest)
			$this->accessError();

		$model=$this->loadModel($_GET['id']);
		$model->isNewRecord = false;
		if($model->status)
			$model->attributes=array('status' => 0);
		else
			$model->attributes=array('status' => 1);
		$model->save();
		echo $model->status;
		exit;
	}

	/**
	 * Render form. No image upload support
	*/
	protected function renderForm($model)
	{
		if (!Yii::app()->user->checkAccess('root'))
			$this->accessError();

		if (isset($_POST[$this->modelName]))
		{
			$model->attributes=$_POST[$this->modelName];
			try{
				if ($model->save())
					$this->redirect(array('index'));
			}
			catch (Exception $e){
				throw new CHttpException(405,'Sorry, something wrong with request.');
			}
		}

		$this->render('edit', array('model'=>$model));
	}

}

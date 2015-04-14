<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AdminController extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='admin.views.layouts.layout';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	protected $model = null;

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect('/' . Yii::app()->controller->module->id . '/');
	}

	public function accessError()
	{
		$this->render('/layouts/access_error');
		exit;
	}

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Render list of module items.
	*/
	public function actionIndex()
	{
		if (!Yii::app()->user->checkAccess('moderator'))
			$this->accessError();

		$model = new $this->modelName('search');
		$model->unsetAttributes();  // clear any default values

		if (isset($_GET[$this->modelName]))
			$model->attributes=$_GET[$this->modelName];

		$this->render('list', array('model'=>$model, 'countItems'=>$model->count()));
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
		if (!Yii::app()->user->checkAccess('moderator'))
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
		if (!Yii::app()->user->checkAccess('moderator') || !Yii::app()->request->isAjaxRequest)
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
	 * Render form. No image upload support, only text/enum fields
	*/
	protected function renderForm($model)
	{
		if (!Yii::app()->user->checkAccess('moderator'))
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

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return $this->modelName the loaded model
	 * @throws CHttpException
	 */
	protected function loadModel($id)
	{
		$model = new $this->modelName();
		$model = $model::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		else
			$model->isNewRecord = false;
		return $model;
	}		
}
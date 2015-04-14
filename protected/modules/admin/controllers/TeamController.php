<?php
/**
* 
* Functions listed below are described in AdminController class
* public function filters()
* public function actionIndex();
* public function actionCreate()
* public function actionUpdate($id)
* public function actionDelete($id)
* public function actionOnoff()
* protected function loadModel($id)
*
*/
class TeamController extends AdminController
{
	protected $modelName = 'Team';

	public function actionImageEdit()
	{
		if (!Yii::app()->user->checkAccess('moderator') || !Yii::app()->request->isAjaxRequest)
			$this->accessError();

		// http://wideimage.sourceforge.net/examples/crop/ - documentation/examples
		Yii::import("application.modules.".strtolower(Yii::app()->controller->module->id ).'.components.wideimage.WideImage', true);

		if ($_POST['action'] == 'crop' && is_file(Yii::getPathOfAlias('webroot').'/'.$_POST['src'])) 
		{
			// check image in his module uploads
			if (strpos($_POST['src'], '/'.strtolower($this->modelName).'/') !== false)
			{
				$image = WideImage::load(Yii::getPathOfAlias('webroot').'/'.$_POST['src']);
				$cropped = $image->crop($_POST['x'], $_POST['y'], $_POST['w'], $_POST['h']);
				$cropped->saveToFile(Yii::getPathOfAlias('webroot').'/'.$_POST['src']);

				/* image size */
				$size = getimagesize(Yii::getPathOfAlias('webroot').'/'.$_POST['src']);

				echo json_encode($size);
			}
		}
		exit;
	}

	/**
	 * Render form. Image file upload supported. $model->img in DB
	*/
	protected function renderForm($model)
	{
		if (!Yii::app()->user->checkAccess('moderator'))
			$this->accessError();

		if (isset($_POST[$this->modelName]))
		{
			$model->attributes = $_POST[$this->modelName];
			$oldImageName = $model->img;

			/* deleting img */
			if (isset($_POST['delimg']) && $_POST['delimg'] == 1)
			{
				$model->delOldImgFile($oldImageName);
				$model->img = '';
			}

			/* new img name */
			$image = NULL;
			if ($_FILES[$this->modelName]['name']['image'] != '')
			{
				$rnd = date('Ymd') . '_' . rand(0, 1000);
				$image = CUploadedFile::getInstance($model,'image');
				$newImageName = $rnd.'_'.$image->getName();
			}

			try {
				if ($model->save())
				{
					/* saving img */
					if ($image instanceof CUploadedFile)
					{
						$model->delOldImgFile($oldImageName);
						$model->img = $newImageName;
						$model->save();

						$path = Yii::getPathOfAlias('webroot').'/uploads/'.strtolower($this->modelName).'/'.$rnd.'_'.$image->getName();
	                	$image->saveAs($path);
	                }
	                
					$this->redirect(array('index'));
				}
			}
			catch (Exception $e) {
				throw new CHttpException(405,'Sorry, something wrong with request.');
			}
		}

		/*image size*/
		$size = array();
		if($model->img != '' && is_file(Yii::getPathOfAlias('webroot').'/uploads/'.strtolower($this->modelName).'/'.$model->img))
			$size = getimagesize(Yii::getPathOfAlias('webroot').'/uploads/'.strtolower($this->modelName).'/'.$model->img);

		$this->render('edit', array('model'=>$model, 'size'=>$size));
	}

}

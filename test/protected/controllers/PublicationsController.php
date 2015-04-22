<?php

class PublicationsController extends Controller
{
	public function actionIndex()
	{
		$publications = Publications::model()->findAllByAttributes(array(
    		'status' => '1',
		));	

		$this->renderPartial('index', 
					   array(
					   		'publications'=>$publications,
					   	)
					  );		
	}

	public function actionItem()
	{
		$item = Publications::model()->findByAttributes(array(
    		'status' => '1',
    		'id' => (int)$_GET['id'],
		));	

        $dir = Yii::app()->basePath . '/../uploads/publications/list/' . (int)$_GET['id'];
        $dh  = opendir($dir);
        $files = array();
        while (false !== ($filename = readdir($dh))) {
            if($filename != '.' && $filename != '..')
                $files[] = $filename;
        }      		

		$this->renderPartial('item', 
					   array(
					   		'item'=>$item,
					   		'photos'=>$files,
					   	)
					  );		
	}

}
<?php

class ProjectController extends Controller
{
	public function actionItem()
	{
		$item = Projects::model()->findByAttributes(array(
    		'status' => '1',
    		'id' => (int)$_GET['id'],
		));	

        $dir = Yii::app()->basePath . '/../uploads/projects/list/' . (int)$_GET['id'];
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
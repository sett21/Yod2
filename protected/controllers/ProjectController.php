<?php

class ProjectController extends Controller
{



	public function actionItem()
	{
        $projectId = (int)$_GET['id'];
		$item = Projects::model()->findByAttributes(array(
    		'status' => '1',
    		'id' => $projectId,
            'type'=>array(1, 2),
		));

        $files = $item->getPhotosList($projectId);

		$this->renderPartial('item', 
					   array(
					   		'item'=>$item,
					   		'photos'=>$files,
					   	)
					  );		
	}

}
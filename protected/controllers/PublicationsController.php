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
        $publicationId = (int)$_GET['id'];
		$item = Publications::model()->findByAttributes(array(
    		'status' => '1',
    		'id' => $publicationId,
		));	

        $files = $item->getPhotosList($publicationId);

		$this->renderPartial('item', 
					   array(
					   		'item'=>$item,
					   		'photos'=>$files,
					   	)
					  );		
	}

}
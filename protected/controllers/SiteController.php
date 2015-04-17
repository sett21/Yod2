<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
		$about = Blocks::model()->findByPk(1); //about
		$contacts = Blocks::model()->findByPk(2); //contacts

		$team = Team::model()->findAllByAttributes(array(
    		'status' => '1',
		));	

		$bestProjects = Projects::model()->findAllByAttributes(array(
    		'status' => '1',
    		'best' => '1',
		));	

		$this->render('index', 
					   array(
					   		'about'=>$about['body'],
					   		'contacts'=>$contacts,
					   		'team'=>$team,
					   		'bestProjects'=>$bestProjects,
					   	)
					  );		
	}

	public function actionGetportfolio()
	{
		$portfolio = Projects::model()->findAllByAttributes(array(
    		'status' => '1',
		));	

		$this->makeJson($portfolio);
	}

	public function actionGetarch()
	{
		$arch = Projects::model()->findAllByAttributes(array(
    		'status' => '1',
    		'type' => '1',
		));

		$this->makeJson($arch);
	}

	public function actionGetdesign()
	{
		$arch = Projects::model()->findAllByAttributes(array(
    		'status' => '1',
    		'type' => '2',
		));	

		$this->makeJson($arch);
	}	

	private function makeJson($array)
	{
		$forJson = array();
		$i = 0;
		foreach ($array as $item)
		{
			$forJson['data'][$i]['id'] = $item['id'];
			$forJson['data'][$i]['previewImg'] = '/uploads/projects/'.$item['img'];
			$forJson['data'][$i]['folioCaption'] = $item['name'];
			$forJson['data'][$i]['location'] = $item['location'];
			$forJson['data'][$i]['link'] = '/project/'.$item['id'].'/';
			$forJson['data'][$i]['type'] = $item['type'];
			$forJson['data'][$i]['best'] = $item['best'];
			$i++;
		}

		echo json_encode($forJson);
		exit;
	}

}

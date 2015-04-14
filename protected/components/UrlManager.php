<?php
class UrlManager extends CUrlManager
{

	public function init()
	{
		// check DB page
	   	// $url = Yii::app()->request->pathInfo;
		// $page = Yii::app()->db->createCommand()
		//     ->select('id, parent, name, url, controller')
  //           ->from('{{pages}}')
  //           ->where('url=:url', array(':url'=>$url))
  //           ->queryRow();

        // if page found without controller use page text from DB
		if (isset($page['controller']) && trim($page['controller']) == '')
		{
			$rules = array('[\d\w\-_]+'=>'page/index');
			$this->addRules($rules, 0);
		}		
		
		return parent::init();
	}

}
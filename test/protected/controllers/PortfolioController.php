<?php

class PortfolioController extends Controller
{
    public function actionIndex()
    {
        $portfolio = Projects::model()->findAllByAttributes(array(
            'status' => '1',

        ));

        $this->renderPartial('index',
            array(
                'portfolio'=>$portfolio,
            )
        );
    }

    public function actionItem()
    {
        $item = Projects::model()->findByAttributes(array(
            'status' => '1',
            'id' => (int)$_GET['id'],
        ));

        $dir = Yii::app()->basePath . '/../uploads/project/list/' . (int)$_GET['id'];
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
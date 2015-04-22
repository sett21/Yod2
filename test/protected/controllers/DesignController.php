<?php

class DesignController extends Controller
{
    public function actionIndex()
    {
        $design = Projects::model()->findAllByAttributes(array(
            'status' => '1',
            'type'=>'2',
        ));

        $this->renderPartial('index',
            array(
                'architecture'=>$design,
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
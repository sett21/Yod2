<?php
class PhpAuthManager extends CPhpAuthManager{

    public function init()
    {
        if ($this->authFile === null)
            $this->authFile=Yii::getPathOfAlias('application.modules.admin.config.auth').'.php';

        parent::init();

        //Guest by default
        if(!Yii::app()->user->isGuest){
            // linking role frome DB with current user from UserIdentity.getId()
            $this->assign(Yii::app()->user->role, Yii::app()->user->id);
        }
    }
    
}
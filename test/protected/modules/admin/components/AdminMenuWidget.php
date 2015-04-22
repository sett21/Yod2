<?php
class AdminMenuWidget extends CWidget {
    public $parametrs = array('menu', 'action');
    public $action;
 
    public function run() {
        $this->parametrs['action'] = $this->action;
        $this->render('menu/menu', array('parametrs' => $this->parametrs) );
    }
}
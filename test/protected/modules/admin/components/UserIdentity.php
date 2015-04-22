<?php
class UserIdentity extends CUserIdentity {

    protected $_id;
 
    //method running only once, when user auth is coming 
    public function authenticate(){       
        $admin = Admins::model()->find('status = \'1\' and login=?', array(strtolower($this->username)));

        if ( ($admin === null) || (crypt($this->password, md5($this->password)) !== $admin->password) ) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            $this->_id = $admin->id;
            $this->username = $admin->name;
            $this->errorCode = self::ERROR_NONE;
        }
        
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->_id;
    }
}
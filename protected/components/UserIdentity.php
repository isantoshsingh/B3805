<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    public $name = '';
    public $_id = '';

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = User::model()->findByAttributes(array('username' => $this->username));
        if (!$user)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        elseif ($user->password != md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else
            $this->errorCode = self::ERROR_NONE;
        $this->_id = $user->id;
        $this->name = $user->name;
        return !$this->errorCode;
    }

    public function getId() {       //  override Id
        return $this->_id;
    }

    public function getName() {
        return $this->name;
    }

}
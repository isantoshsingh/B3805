<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UserChangePassword extends CFormModel {

    public $password;
    public $verifyPassword;

    public function addError($attribute, $error) {
        parent::addError($attribute, $error);
    }

    public function rules() {

        return array(
            array('password, verifyPassword', 'required'),
            array('verifyPassword, password', 'length', 'max'=>45, 'min'=>5),
            array('password', 'compare', 'compareAttribute' => 'verifyPassword', 'message' => 'Retyped password is incorrect'),
        );
        
    }

    public function attributeLabels() {
        return array(
            'password' => 'New password',
            'verifyPassword' => 'Retype new password',
        );
    }

}

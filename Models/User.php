<?php

class User extends Users {
    
    public $username;
    public $password;
    public $identification;

    public function __construct(String $name,String $lastname,String $email, Bool $credit_card, Float $discount, bool $registered_user, String $username, String $password, Int $identification) {

        parent:: __construct($name, $lastname, $email, $credit_card, $discount, $registered_user);
        $this->username = $username;
        $this->password = $password;
        $this->identification = $identification;
    }

    public function setRegisteredUser(){
        $this->registered_user = true;
    }

    public function getRegisteredUser() {
       return $this->registered_user;
    }
}
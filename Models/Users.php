<?php

class Users {

    public $name;
    public $lastname;
    public $email;
    public $credit_card;
    public $discount = 0;
    public $registered_user = false;
    

    public function __construct(String $name,String $lastname,String $email, Bool $credit_card, Int $discount, bool $registered_user) {

        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->credit_card = $credit_card;
        $this->discount = $discount;
        $this->registered_user = $registered_user;

    }

    public function setSconto($registered_user) {
        if($registered_user === true) {
            $this->discount = 0.20;
        } 
    }

    public function getSconto() {
        return $this->discount;
    }
}
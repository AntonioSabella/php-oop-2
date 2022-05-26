<?php

class Products {

    public $name;
    public $type;
    public $price;
    public $description;
    public $availability;
    
    
    
    public function __construct(String $name, String $type, Mixed $price, String $description, Bool $availability){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->description = $description;
        $this->availability = $availability;
    }
    
    public function getName(){
        return $this->name;
    }
    public function getType(){
        return $this->type;
    }
    public function getPrice(){
        return $this->price;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getAvailability(){
        return $this->availability;
    }


}


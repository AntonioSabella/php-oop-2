<?php

trait ProductPrice {
    public $message;

    public function tellPrice() {
       /*  echo 'Questo è il prezzo'; */
       $this->message = 'Sei bello panzerello';
    }
}

class Products {

    use ProductPrice;

    public $name;
    public $type;
    public $price;
    public $description;
    public $availability;
    
    
    
    public function __construct(String $name, String $type, Int $price, String $description, bool $availability){
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


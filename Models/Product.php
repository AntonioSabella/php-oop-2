<?php 

class Product extends Products {

    public $expiry;
  
    
    public function __construct(String $name, String $type, Mixed $price, String $description, Bool $availability, String $expiry){
        
        parent:: __construct($name, $type, $price, $description, $availability);
        $this->expiry = $expiry;
    }
}
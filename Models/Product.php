<?php 

class Product extends Products {

    use ProductPrice;

    public $expiry;
  
    
    public function __construct(String $name, String $type, Mixed $price, String $description, bool $availability, String $expiry){
        
        parent:: __construct($name, $type, $price, $description, $availability);
        $this->expiry = $expiry;
    }
}
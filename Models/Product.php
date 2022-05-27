<?php 

class Product {

    public $name;
    public $color;
    public $price;
    public $description;
    public $available;
    
    public function __construct(String $name,String $color,int $price,String $description, $available = true) {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->description = $description;
        $this->available = $available;
    }
    
    public function getName()
    {
        return $this->name;
    }
    }

    

?>
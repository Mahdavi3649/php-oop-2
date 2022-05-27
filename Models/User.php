<?php

    class User {

        use Position;

        public $name;
        public $lastname;
        public $email;
        protected $discount = 0;

        function __construct($name, $lastname, $email) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
        }

        public function getName(){
            return $this->name;
        }

        public function getLastname(){
            return $this->lastname;
        }

        public function getDiscount(){
            return $this->discount;
        }
    }

    class RegisteredUser extends User{

        protected $discount = 20;

        public function __construct($name, $lastname, $email , $discount = 20) {

            parent:: __construct($name, $lastname, $email);
            $this->discount = $discount = 20;
        }

    }

    
    trait Position
    {
        public $originalita;
        public $age;

        public function getAddress($originalita,$age)
        {
             $this->originalita = $originalita;
             $this->age = $age;
            return $originalita . $age; 
        }
        
    }
    

?>
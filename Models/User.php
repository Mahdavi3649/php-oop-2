<?php

    class User {

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

    }

?>
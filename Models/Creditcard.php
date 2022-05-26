<?php

    class CreditCard {

        public $number;
        public $expire_date;

        function __construct($number, $expire_date ) {
            $this->number = $number;
            $this->expire_date = $expire_date;
        }

        public function getNumber(){
            return $this->number;
        }

        public function getExpireDate(){
            return $this->expire_date;
        }

        public function isValid(){
            if($this->expire_date < date('m/Y')){
                return '<h6>Your credit card is not valid, Expired</h6>';
            }else{
                return '<h6>Your credit card Accepted</h6>';
            }
        }

    }

?>
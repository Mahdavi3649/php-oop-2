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
                return 'Your credit card is not valid, Expired';
            }else{
                return 'Your credit card Accepted';
            }
        }

    }

?>
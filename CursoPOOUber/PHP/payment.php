<?php
    class Payment {
        public $id = integer;
        public $mount = float;

        public function __construct($mount){
            $this->mount = $mount;
        }

        public function printDataPayment(){
            echo "Mount: $this->mount";
        }
        
    }
?>
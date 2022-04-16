<?php
    require_once('payment.php');
    class Cash extends Payment {
    
        public function __construct($mount){
            parent::__construct($mount);
        }
    }
?>
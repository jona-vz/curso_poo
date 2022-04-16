<?php
    require_once('payment.php');
    class PayPal extends Payment {
        public $email;

        public function __construct($mount, $email){
            parent::__construct($mount);
            $this->email = $email;
        }
    }
?>
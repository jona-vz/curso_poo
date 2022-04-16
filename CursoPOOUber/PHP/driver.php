<?php
    require_once('account.php');
    class Driver extends Account {
        public $license;

        public function __construct($name, $document, $license){
            parent::__construct($name, $document);
            $this->license = $license;
        }
    }
?>
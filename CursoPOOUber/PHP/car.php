<?php
    require_once('account.php');
    class Car {
        public $id = integer;
        public $license  = string;
        public $driver = Account;
        protected $passenger = integer;

        public function __construct($license, $driver){
            $this->license = $license;
            $this->driver = $driver;
        }

        public function printDataCar(){
            echo "
                License: $this->license 
                Driver's name: {$this->driver->name} 
                Driver's document: {$this->driver->document}
                Passengers: $this->passenger


            ";
                
        }

        public function getPassenger(){
            return $this->passenger;
        }

        public function setPassenger($passenger){
            if ($passenger == 4){
                $this->passenger = $passenger;
            }
            else{
                echo "Necesitas asignar 4 pasajeros";
            }
        }

    }
?>
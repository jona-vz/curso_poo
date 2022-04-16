<?php
    require_once('car.php');
    require_once('account.php');
    require_once('uberX.php');
    require_once('uberVan.php');
    require_once('payment.php');
    require_once('card.php');

    //$car = new Car("AMS234", new Account("Andres Herrera", "ANDHER123"));
    //$car->printDataCar();

    $uberX = new UberX("XAMS234", new Account("XAndres Herrera", "XANDHER123"), "Volkswagen", "Vento");
    $uberX->setPassenger(4);
    $uberX->printDataCar();
    
    $uberVan = new UberVan("AMS234", new Account("Andres Herrera", "ANDHER123"));
    $uberVan->setPassenger(6);
    $uberVan->printDataCar();

    /*
    $card = new Card(199.99, 1234657890, 123, "08/25");
    $card->printDataPayment();
    $card->printDataCard();
    */
?>
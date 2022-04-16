var car = new Car("AWS123", new Account("Andres Herrera", "ANDHER123"))
car.passenger = 4;
car.printDataCar();

var uberX = new UberX("JAWS123", new Account("JAndres Herrera", "JANDHER123"), "Volkswagen", "Vento")
uberX.passenger = 4;
uberX.printDataCar();

var card = new Card(199.99, 1234567890, 123, "25/10/2025")
card.printDataPayment();
card.printDataCard();

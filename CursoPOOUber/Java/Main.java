//import java.util.Date;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        /*Car car = new Car("AMQ123", new Account("Andres Herrera", "ANDHER123"));
        car.passenger = 4;
        car.printDataCar();
        
        Car car2 = new Car("QWE567", new Account("Andrea Herrera", "ANDAHER456"));
        car2.passenger = 5;
        car2.printDataCar();*/

        UberX uberX = new UberX("XAMQ123", new Account("XAndres Herrera", "JANDHER123"), "Volkwagen", "Vento");
        //uberX.passenger = 2;
        uberX.setPassenger(4);
        uberX.printDataCar();
        
        UberVan uberVan = new UberVan("VAMQ123", new Driver("VAndres Herrera", "JANDHER123", "driver_license"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();


        /*Card card = new Card(199.99, 1234567890, 123, new Date());
        card.printDataPayment();
        card.printDataCard();*/

    }
}

import java.util.Date;

public class Card extends Payment{
    Integer number;
    Integer cvv;
    Date date;

    public Card(Double mount, Integer number, Integer cvv, Date date){
        super(mount);
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }

    void printDataCard(){
        System.out.println("Number: " + number);
        System.out.println("CVV: " + cvv);
        System.out.println("Date: " + date);
    }
}

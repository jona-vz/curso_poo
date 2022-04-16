public class PayPal extends Payment {
    String email;

    public PayPal(Double mount, String email){
        super(mount);
        this.email = email;
    }
}

class PayPal extends Payment {
    constructor(mount, email){
        super(mount);
        this.email = email;
    }
}
public class Payment {
    Integer id;
    Double mount;

    public Payment(Double mount){
        this.mount = mount;
    }

    void printDataPayment(){
        System.out.println("Mount: " + mount);
    }
}

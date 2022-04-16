public class Driver extends Account {
    String license;

    public Driver(String name, String document, String license){
        super(name, document);
        this.license = license;
    }
}

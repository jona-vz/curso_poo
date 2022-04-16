class Card extends Payment {
    constructor(mount, number, cvv, date){
        super(mount);
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
    printDataCard() {
        console.log(this.number)
        console.log(this.cvv)
        console.log(this.date)
    }
}
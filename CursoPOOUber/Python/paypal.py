from payment import Payment


class PayPal(Payment):
    email = str
    
    def __init__(self, mount, email):
        super().__init__(mount)
        self.email = email
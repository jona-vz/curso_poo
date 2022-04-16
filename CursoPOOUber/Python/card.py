from datetime import datetime
from payment import Payment


class Card(Payment):
    number = float
    cvv = int
    date = datetime
    def __init__(self, mount, number, cvv, date):
        super().__init__(mount)
        self.number = number
        self.cvv = cvv
        self.date = date
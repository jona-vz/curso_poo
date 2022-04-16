from payment import Payment


class Cash(Payment):
    def __init__(self, mount):
        super().__init__(mount)
from account import Account


class Driver(Account):
    license = str
    def __init__(self, name, document, license):
        super().__init__(name, document)
        self.license = license
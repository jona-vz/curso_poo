from Card import Card
from UberX import UberX
from car import Car
from account import Account

if __name__ == "__main__":
    print ("Hola Python")
    # car = Car("AMS234", Account("Andres Herrera", "ANDHER123"))
    # car.passenger = 4
    # print(vars(car))
    # print(vars(car.driver))

    # car2 = Car("QWE567", Account("Andrea Herrera", "ANDAHER456"))
    # car2.passenger = 5
    # print(vars(car2))
    # print(vars(car2.driver))

    uberX = UberX("AMS234", Account("Andres Herrera", "ANDHER123"), "Volkswagen", "Vento")
    print(vars(uberX))
    print(vars(uberX.driver))

    card = Card(199.99, 1234567890, 123, "03/25");
    print(vars(card))
    

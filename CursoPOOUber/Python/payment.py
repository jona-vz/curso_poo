class Payment:
    id = int
    mount = int

    def __init__(self, mount):
        self.mount = mount
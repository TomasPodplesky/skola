from sys import excepthook

print("ahoj")

odpoved = input("Tohle se napise do radky: ")

print(odpoved)
print(type(odpoved))

try:
    odpoved_jako_cislo = int(odpoved)
except:
    print("ty jsi ale peknej *****, ze neumis zadat cislo, nastavuju na 0")
    odpoved_jako_cislo = 0
#odpoved_jako_cislo = float(odpoved)

print("ahoj" + "vole")
print(22 + odpoved_jako_cislo)
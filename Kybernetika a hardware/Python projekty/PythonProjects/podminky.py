vstup = input("Zadej cislo: ")
try:
    cislo = int(vstup)
except:
    cislo = 0

print("vstup = " + vstup)

if cislo > 5:
    print("cislo")
    print(cislo)
    print("je větší než 5")
    if cislo >10:
        print("kgviztflkg")
elif cislo >3:
    print("je větší než 3, menší než 5")
else:
    print("neni vetsi nez 5")
if cislo < 9:
    print("číslo")
    print(cislo)
    print("je menší než 9")
print("konec")

a = input("zadej A")
b = input("zadej B")
c = input("zadej C")

A = int(a)
B = int(b)
C = int(c)

#Y = (A*X)**2 + B*X + C



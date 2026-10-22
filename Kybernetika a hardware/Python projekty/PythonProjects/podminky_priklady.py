vstup = input("Zadej cislo: ")
try:
    cislo = int(vstup)
except:
    cislo = 0

print("vstup = " + vstup)

#if cislo<10:
    #print("cislo je mensi nez 10")
#elif 10<cislo<20:
   # print("cislo je vetsi nez 10 a mensi nez 20")
#elif cislo>20:
 #   print("cislo je vetsi nez 20")

A = cislo%2

if cislo>10:
    print("cislo je vetsi nez 10")
if A == 0:
    print("cislo je sudé")
else:
    print("cislo je liché")
if 10<cislo<20:
    print("cislo je vetsi nez 10, ale mensi nez 20")
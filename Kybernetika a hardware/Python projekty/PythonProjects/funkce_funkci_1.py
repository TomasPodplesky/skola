def secti(a, b):
    return a+b

def odecti(a, b):
    return a-b
def vynasob_soucet_a_rozdil(a,b,c,d):
    soucet = secti(a,b)
    rozdil = odecti(c,d)
    return soucet * rozdil

def kalkulacka(a,b,funkce):
    return funkce(a,b)

vysledek = vynasob_soucet_a_rozdil(1,2,3,4)
print("vylsedek (a+b) * (c-d) = " + str(vysledek))

vysledek2 = kalkulacka(2,3, secti)
vysledek3 = kalkulacka(3,2, odecti)
print(vysledek2)
print(vysledek3)


import random


def hod_k6():
    """
    Simuluje hod kostkou k6
    :return:
    int: nahodne cislo z intervalu 1-6 vcetne
    """
    hod = random.randint(1,6)
    return hod


def pocet_pokusu_na_sestku():
    pocet_pokusu=1
    while(True):
        hod = hod_k6()
        if(hod==6):
            break
        else:
            pocet_pokusu+=1
    return pocet_pokusu

def simulace_pokusu(a):
    pole = [0] * 20
    for i in range(a):
        pokusy = pocet_pokusu_na_sestku()
        if(pokusy>20):
            pokusy=20
        pole[pokusy-1]+=1
    return pole

random.seed(5)
x = simulace_pokusu(10000)
print(x)

#print("na kostce padlo: " + str(hod_k6()))

#print("pocet hodu potřebných na padnutí šestky je: " + str(pocet_pokusu_na_sestku()))
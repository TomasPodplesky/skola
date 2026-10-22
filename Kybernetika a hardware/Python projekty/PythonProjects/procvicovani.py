#import numpy as np

def druhe_nejvetsi(seznam):
    if seznam[0] > seznam[1]:
        max = seznam[0]
        druhe = seznam[1]
    else:
        max = seznam[1]
        druhe = seznam[0]
    for i in range(len(seznam)):
        if (seznam[i] > max):
            druhe = max
            max = seznam[i]
        if (seznam[i]>druhe and seznam[i]!=max):
            druhe = seznam[i]
    return druhe

x = [12,54,1,34,25]
druhe = druhe_nejvetsi(x)
print(druhe)

def prvocislo(a):
    if (a<2):
        print(str(a) + " není prvočíslo")
        return False
    for i in range(2,int(a** (1/2)+1)):
        if(a%i==0 ):
            print( str(a) + " není prvočíslo")
            return False
    print( str(a) + " je prvočíslo")
    return True




def prvocisla(seznam):
    x=0
    for i in range(len(seznam)):
        if (seznam[i]<2):
            x+=0
        for j in range(2,int(seznam[i]** (1/2)+1)):
            if(seznam[i]%j==0 ):
                x+=1

    return x

seznam=[5,13,31,55,17,54]
prvocisla = prvocisla(seznam)
print(prvocisla)


# while(True):
#     cislo = input("napiš číslo: ")
#     try:
#         zadane = int(cislo)
#         break
#     except:
#         print("nezadal jsi číslo zadej znovu")
#
# prvocislo(zadane)
#

def subtracting (x,y):
    return x-y


def adding(x,y):
    return x+y

def calculate(funkce, x, y):
    return function(a,b)

print("***********")
inp1 = int(input("zadej číslo: "))
inp2 = int(input("zadej druhé číslo:"))
inp3 = input("zadej funkci(+/-): ")

if inp3 == "+":
    print(calculate(adding, inp1, inp2))
elif inp2 == "-":
    print(calculate, subtracting, inp1, inp2)
else
    print("neznámá funkce")
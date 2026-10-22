import numpy as np

cislo_hadane = np.random.randint(1,20)
pokusy = 0
while(True):
    cislo_x = input("hadej cislo: ")
    pokusy += 1
    try:
        cislo = int(cislo_x)
        if(cislo == cislo_hadane):
            print("spráně!!")
            print("travlo to pokusů: " + str(pokusy))
            break
        elif(cislo<cislo_hadane):
            print("špatně, hádej vyšší")

        elif(cislo>cislo_hadane):
            print("špatně, hádej nížš")

    except:
        print("nezadal jsi číslo")
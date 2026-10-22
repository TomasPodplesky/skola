promenna = [1, 2, 3, 4, 5]

print(promenna)

p2 = [1, "abc", 5.5, True, [1,2,"a"]]
print(p2)

print(p2[2])
print(type(p2))
print(p2[1][1])
print(p2[1:4])

print(type(p2[2]))
print(type(p2[2:3]))



x= [1, 2, 8, 4, 6, 11, 7, 4]

for i in range(len(x)):
    print(x[i])

for i in range(len(x)):
    if i%2 == 0:
        print(x[i])



print("*********")


#if pole[0]<pole[1]:
#
    # if pole[1]<pole[2]:
    # print(pole[1])
    #     if pole[2]<pole[3]:
    #     print(pole)
    #         if pole[3]<pole[4]:
    #
    #             if pole[4] < pole[5]:
    #
    #                 if pole[5] < pole[6]:
    #
    #                     if pole[6] < pole[7]:
    #
    #                         if pole[7] < pole[8]:
    # print(pole[0])
pole = [5, 2, 9, 1, 7, 3, 10, 6, 4]

maximalni_prvek = pole[0]
pozice_max_prvku = 0

for i in range(1, len(pole)):
    if maximalni_prvek < pole[i]:
        maximalni_prvek = pole[i]
        pozice_max_prvku = i
print( "nejvyšší číslo", maximalni_prvek , "pozice", pozice_max_prvku)

minimalni_prvek = pole[0]
pozice_min_prvku = 0

for i in range(0, len(pole)):
    if minimalni_prvek > pole[i]:
        minimalni_prvek = pole[i]
        pozice_min_prvku = i
print( "nejnižší číslo", minimalni_prvek , "pozice", pozice_min_prvku)

cislo = 0
for i in range(len(pole)):
    cislo = pole[i] + cislo

print(cislo)
print(cislo/len(pole))

pole = [5, 2, 9, 1, 7, 3, 10, 6, 4]
cislo = 5
hodnota = 0
for i in range(len(pole)):
    if pole[i] < cislo:
        hodnota = hodnota+1
print("tolik prvků je větších než "+str(cislo)+" je:" + str(hodnota))

cislo = 0
for i in range(len(pole)):
    cislo = pole[i] + cislo

print("součet čísel v listu je",cislo)

pole = [5, 2, 9, 1, 7, 3, 10, 6, 4]

nove_pole = []

for i in range(len(pole)-1,-1,-1): #len-1 je poslední číslo, druhá -1 je kde chci skončít, poslední -1 je po jakých indexech to jde
    nove_pole.append(pole[i])

print(nove_pole)

print("**************")
pole = [5, 2, 9, 1, 7, 3, 10, 6, 4]
pole2 = [4, 3, 6, 3, 8, 4, 2, 12, 6]
nove_pole=[]
for i in range(len(pole)):
    promenna=pole[i]+pole2[i]
    nove_pole.append(promenna)
print(nove_pole)

print("****************")

pole = [5, 2, 9, 1, 7, 3, 10, 6, 4, 14, 13]
pole2 = [4, 3, 6, 3, 8, 4, 2, 12, 6, 11, 3]
nove_pole=[]
for i in range(len(pole)):
    promenna=pole[-i-1]+pole2[i]
    nove_pole.append(promenna)
print(nove_pole)

nejvetsi = float('-inf')
druhe_nejvetsi = float('-inf')
for i in range(len(pole2)):
    if(pole2[i]>nejvetsi):
        druhe_nejvetsi = nejvetsi
        nejvetsi = pole2[i]
    elif(pole2[i]>druhe_nejvetsi):
        druhe_nejvetsi = pole2[i]
print(druhe_nejvetsi)
print(nejvetsi)
print(float('-inf'))

for i in range(len(pole)-1):
    if(pole[i]<pole[i+1]):
        print("je seřazené")
        break
    else:
        print("není seřazené")
        break

je = False
pole3 = [1, 2, 3, 4, 5, 6, 7]
for i in range(len(pole3)-1):
    if(pole3[i]>pole3[i+1]):
        je = True
        break
if je:
    print("je seřazené")
else:
    print("neni seřazené")

sude = 0
liche = 0
for i in range(len(pole)):
    if(pole[i]%2==0):
        sude = sude + 1
    else:
        liche = liche + 1
print("tolik lichých čísel",sude)
print("tolik lichých čísel",liche)

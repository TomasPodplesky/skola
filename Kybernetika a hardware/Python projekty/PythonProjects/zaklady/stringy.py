text = "ahoj"
text2 = 'ahooj'
text3 = "Sean O'connery"
text4 = 'tak rekl: "to je ale chujovina" A tim to skončilo.'
text5 = 'Sean O\' Connery'
text6 = "cesta k souboru je c:\\hry\\soubor.txt"
text7 = "ahoj \n nazdar"

print(text6)
print(text7)

a = "abc"
b = "def"

print(a+b)

print(a*3)
print("*"*10)

c = "a"
for i in range(5):
    c = c + "a"

print(c)

promenna = "slečnaa anna je za vodou"

print(promenna[6]) # indexovani od 0

print(len(promenna)) #vypíše kolik znaků

for i in range(len(promenna)):
    print(promenna[i])

print(promenna[len(promenna)-1]) #vypíše poslední znak
print(promenna[-1]) #vypíše poslední znak

print(promenna[8:12]) #12. znak se nevypíše
print(promenna[12:8:-2])

print(promenna[8:])

print(promenna[:7:-1])
print(promenna[::-1])

print(promenan.index(",")) #zjistí na které pozici je ","

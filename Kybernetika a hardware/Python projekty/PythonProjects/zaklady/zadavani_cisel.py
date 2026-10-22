while(True):
    cislo_jako_text = input("Zadej cislo: ")
    try:
        cislo = int(cislo_jako_text)
        break
    except:
        print("si ***** a dal si písmenka, zadej znova")
print("zadane cislo + 10 = " + str(cislo + 10))

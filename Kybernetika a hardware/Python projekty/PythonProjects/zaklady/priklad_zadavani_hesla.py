while(True):
    heslo = input("Zadej heslo: ")

    skutecne_heslo ="heslo123"
    if(heslo==skutecne_heslo):
        print("heslo bylo správně")
        break
    else:
        print("heslo bylo špatně, zadej znovu")
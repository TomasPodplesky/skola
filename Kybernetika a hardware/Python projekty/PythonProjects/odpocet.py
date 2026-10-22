def odpocet(n):
    if n == 0:
        return print("konec")
    else:
        print("Odpocet T-" + str(n))
        return odpocet(n-1)

odpocet(10)

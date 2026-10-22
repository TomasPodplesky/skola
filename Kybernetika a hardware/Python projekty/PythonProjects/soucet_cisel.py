def soucet(n):
    souc = 0
    for i in range(n+1):
        souc = souc + i

    return souc


def soucet_rekurze(n):
    if n <= 1:
        return 1
    else:
        return n+soucet_rekurze(n-1)

print(soucet(6))
print(soucet_rekurze(7))

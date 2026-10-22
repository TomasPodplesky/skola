def moje_funkce(a,b,c):
    return a+b+c

def jina_funkce(a,b,c=10,d=10):
    return a+b+c+d

def jeste_jina_funkce(*args):
    for i in range(len(*args)):
        soucet += args[i]
    return soucet


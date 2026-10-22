def secti(a, b):
    globalni_promenna = 20
    vysledek = a+b+globalni_promenna
    return [vysledek, globalni_promenna]

def secti_tuple(a, b):
    globalni_promenna = 20
    vysledek = a+b+globalni_promenna
    return vysledek, globalni_promenna


globalni_promenna = 10

y = secti(5,3)
print(type(y))
print(secti_tuple(5,3))
print(type(secti_tuple(5,3)))

print(y)
print(globalni_promenna)

z = secti_tuple(3,3)
print(z)
print(z[0])
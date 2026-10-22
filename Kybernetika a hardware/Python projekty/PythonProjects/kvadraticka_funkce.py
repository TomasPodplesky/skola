
def kvadr(a,b,c):
    D = pow(b,2)-4*a*c
    if(D>0):
        x1 = (-b+pow(D,1/2))/(2*a)
        x2 = (-b-pow(D,1/2))/(2*a)
        vysledek_text = "řešení jsou, x1: " + str(x1) + " x2: " + str(x2)
        print(vysledek_text)
        vysledek = [x1, x2]
    elif(D<0):
        vysledek_text = "nemá řešení"
        print(vysledek_text)
        vysledek = []
    elif(D==0):
        x1 = (-b+pow(D,2))/2*a
        vysledek_text = "řešení je: " +str(x1)
        print(vysledek_text)
        vysledek = [x1]
    return vysledek

#kvadr(1,3,1)
print("*************************")
def kvadr_test():
    results=[]
    for i in range(5):
        results.append(kvadr(1,i,1))
    return results

vysledky = kvadr_test()
for vysledky in vysledky:
    print(vysledky)
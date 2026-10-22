promenna = "Ahoj Karle, jak se máš?"

#vypište jednotlive znaky pod sebe
#pomoci for-cyklu


for i in range(len(promenna)):
    print(promenna[i])

print("*************")

#totez ale pozpatku
for i in range(len(promenna)):
    print(promenna[-i-1])

print("*************")

for i in range(len(promenna)-1, -1, -1):
    print(promenna[i])

print("*************")

for i in range(len(promenna)):
    print(promenna[:i+1])

print("*************")

for i in range(len(promenna)-2):
    print(promenna[i:i+3])

print("*************")

#vypiste vedle sebe vzdy prvni a posledni pismenko, pak druhy a předposledni, ...

for i in range(int(len(promenna)/2)):
    print(promenna[i], promenna[-i-1])


print("*************")

#promenna = promenna.replace(__old)

print(promenna)
print(promenna.index("jak"))
print(promenna.strip())
a = "       niiiigggggggggggggggaaaaaaaaaaaaaa L"
print(a)
print(a.strip())


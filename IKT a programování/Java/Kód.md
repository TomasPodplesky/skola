# Kód z cvičení a ukázkové projekty

Tato záložka shrnuje osobní upravené materiály určené k nahlížení. Zdrojové projekty jsou uložené lokálně v `Java\nová_složka(kód)` a nejsou součástí tohoto veřejného repozitáře.

## Cvičení 21. 10. – základy algoritmizace

Soubor: `nová_složka(kód)\Nová složka\cv_21_10.java`

Soubor obsahuje ukázky:

- načítání čísel a počítání kladných, záporných a nul pomocí cyklu `for` a podmínek;
- počítání hodnot v uzavřeném intervalu pomocí `&&`;
- jednoduché kalkulačky s `switch` a znaky operací;
- ciferného součtu pomocí `% 10` a celočíselného dělení `/ 10`;
- nahrazování, obracení a úpravy textu pomocí metod `String`.

Metoda `sifra()` je nedokončená. Kalkulačka také neřeší dělení nulou a některé vstupní pomocné metody čtou `next()` (jedno slovo), nikoli celý řádek.

## Cvičení 11. 11. – objekty a kreslení

Projekt BlueJ je ve složce `nová_složka(kód)\cv_11_11\Objekty`.

### Třída `Strom`

Soubor: `nová_složka(kód)\cv_11_11\Objekty\Strom.java`

`Strom` skládá strom ze dvou objektů: kmene typu `Obdelnik` a koruny typu `Elipsa`. Ukazuje **kompozici** (objekt obsahuje jiné objekty), více konstruktorů, statický atribut `krok`, přístupové metody a delegování kreslení, mazání a posunu na části stromu.

V této verzi jsou chyby, na které dát pozor:

- `posunNahoru(...)` a `posunNahoru()` posouvají kmen dvakrát a korunu vůbec;
- `setRozmery(...)` předává souřadnice do `setRozmer(...)`, které nastavuje rozměry, a neupravuje korunu;
- pole `kmen` a `koruna` jsou `public`, takže je okolní kód může měnit bez kontroly.

### Pomocné třídy a grafické tvary

- `Obdelnik.java` – obdélník s konstruktory, gettery/settery, přetíženými metodami pro rozměry a posuny.
- `Elipsa.java` – obdobná práce s elipsou.
- `Trojuhelnik.java` – trojúhelník s nastavitelným směrem; používá `Smer8`.
- `Barva.java` – pojmenované barvy a převod na `java.awt.Color`.
- `Smer8.java` – výčtový typ osmi světových směrů a operace pro otočení či výpočet sousedních souřadnic.
- `Platno.java` – pomocné grafické plátno postavené na AWT/Swing.

Tvary ukazují zapouzdřené atributy, konstruktory a jejich přetěžování, gettery/settery, statické nastavení kroku pohybu, přetěžování metod, návratové hodnoty a práci s dalšími objekty. `Platno` používá AWT/Swing, takže tyto ukázky vyžadují grafické prostředí; nejde o samostatné konzolové programy.

> Některé podpůrné třídy obsahují autorské údaje Rudolfa Pecinovského; zachovej jejich atribuci i obsah.

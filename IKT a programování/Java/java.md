# Java - Základy a Syntaxe

## Obsah

- [[#1. Struktura programu|1. Struktura programu]]
- [[#2. Proměnné a datové typy|2. Proměnné a datové typy]]
- [[#3. Výpis do konzole (Terminál)|3. Výpis do konzole (Terminál)]]
- [[#4. Načítání vstupu (třída Scanner)|4. Načítání vstupu (třída Scanner)]]
- [[#5. Větvení (Podmínky a Switch)|5. Větvení (Podmínky a Switch)]]
- [[#6. Cykly (Loops)|6. Cykly (Loops)]]
- [[#7. Pole (Arrays)|7. Pole (Arrays)]]
- [[#8. Třída Math|8. Třída Math]]
- [[#9. Práce s textovými řetězci (String)|9. Práce s textovými řetězci (String)]]
  - [[#Porovnávání řetězců|Porovnávání řetězců]]
  - [[#Získání části řetězce|Získání části řetězce]]
  - [[#Získání znaku na indexu|Získání znaku na indexu]]
  - [[#Hledání znaku nebo podřetězce|Hledání znaku nebo podřetězce]]
  - [[#Náhrada znaků|Náhrada znaků]]
- [[#10. Objektově orientované programování (OOP)|10. Objektově orientované programování (OOP)]]
  - [[#10.1 Myšlenka OOP|10.1 Myšlenka OOP]]
  - [[#10.2 Základní pilíře OOP|10.2 Základní pilíře OOP]]
    - [[#1. Zapouzdření (Encapsulation)|1. Zapouzdření (Encapsulation)]]
    - [[#2. Dědičnost (Inheritance)|2. Dědičnost (Inheritance)]]
    - [[#3. Polymorfismus (Mnohotvárnost)|3. Polymorfismus (Mnohotvárnost)]]
  - [[#10.3 Základní pojmy|10.3 Základní pojmy]]
  - [[#10.4 Vytvoření nové třídy a její syntaxe|10.4 Vytvoření nové třídy a její syntaxe]]
  - [[#10.5 Atributy (Vlastnosti objektu)|10.5 Atributy (Vlastnosti objektu)]]
  - [[#10.6 Vytvoření instance a konstruktor|10.6 Vytvoření instance a konstruktor]]
  - [[#10.7 Instance vs. Odkaz (Paměťový model: Halda a Garbage Collector)|10.7 Instance vs. Odkaz (Paměťový model: Halda a Garbage Collector)]]
  - [[#10.8 Souhrnný příklad: Třída Kruh|10.8 Souhrnný příklad: Třída Kruh]]
- [[#11. Přetěžování metod a konstruktorů (Overloading)|11. Přetěžování metod a konstruktorů (Overloading)]]
  - [[#11.1 Co je přetěžování|11.1 Co je přetěžování]]
  - [[#11.2 Signatura metody (Method Signature)|11.2 Signatura metody (Method Signature)]]
    - [[#Co TVOŘÍ signaturu:|Co TVOŘÍ signaturu:]]
    - [[#Co NETVOŘÍ signaturu (Kritická pravidla):|Co NETVOŘÍ signaturu (Kritická pravidla):]]
  - [[#11.3 Přetěžování konstruktorů (Constructor Overloading)|11.3 Přetěžování konstruktorů (Constructor Overloading)]]
    - [[#Zřetězení konstruktorů (`this(...)`)|Zřetězení konstruktorů (`this(...)`)]]
    - [[#Příklad: Třída Obdelnik s přetíženými konstruktory|Příklad: Třída Obdelnik s přetíženými konstruktory]]
  - [[#11.4 Srovnání: Přetěžování (Overloading) vs. Překrývání (Overriding)|11.4 Srovnání: Přetěžování (Overloading) vs. Překrývání (Overriding)]]
  - [[#11.5 Automatická typová konverze při přetěžování|11.5 Automatická typová konverze při přetěžování]]

## 1. Struktura programu
Každý program v Javě se skládá z tříd (`class`). Vstupním bodem aplikace je metoda `main`.
Název třídy (zde `Main`) se musí shodovat s názvem souboru (`Main.java`). 
*Pozor: Java je striktně case-sensitive (rozlišuje velká a malá písmena).*

```java
public class Main {
    public static void main(String[] args) {
        // Zde začíná samotný kód
        System.out.println("Ahoj světe");
    }
}
```

## 2. Proměnné a datové typy
Java je silně typový jazyk – každá proměnná musí mít předem definovaný datový typ.

**Základní (primitivní) typy:**
- `int` - celé číslo (např. `5`, `-10`)
- `double` - desetinné číslo (např. `3.14`)
- `float` - menší desetinné číslo, na konci nutno psát `f` (např. `3.14f`)
- `char` - jeden znak, píše se do jednoduchých uvozovek (např. `'A'`, `'1'`)
- `boolean` - pravdivostní hodnota (`true` / `false`)

**Referenční typy (objekty):**
- `String` - textový řetězec, píše se do dvojitých uvozovek (např. `"Ahoj"`)

```java
int vek = 18;
double pi = 3.1415;
char pismeno = 'K';
boolean jePlnolety = true;
String jmeno = "Petr";
```

## 3. Výpis do konzole (Terminál)
- `System.out.print(...)` - Vypíše text a zůstane na stejném řádku.
- `System.out.println(...)` - Vypíše text a odřádkuje (další výpis začne pod ním).

**Konkatenace (spojování řetězců):**
Při použití `+` se výraz vyhodnocuje zleva doprava. Pokud neoddělíš matematiku závorkami, spojí se jako text.
- `"a + b = " + 5 + 9`  -> Výstup: `a + b = 59`
- `"a + b = " + (5 + 9)` -> Výstup: `a + b = 14`

## 4. Načítání vstupu (třída Scanner)
Pro čtení dat z terminálu používáme objekt `Scanner`. Volání jakékoliv metody vyžaduje závorky `()`.
Je nutné přidat import na úplný začátek souboru (`import java.util.Scanner;`).

```java
import java.util.Scanner;

Scanner sc = new Scanner(System.in);
```

**Přehled metod pro načítání:**
- `sc.nextLine()` -> Celý řádek textu včetně mezer. Vrací `String`.
- `sc.next()` -> Text po první bílý znak (zpravidla první slovo). Vrací `String`.
- `sc.nextInt()` -> Celočíselná hodnota. Vrací `int`.
- `sc.nextDouble()` -> Desetinné číslo. Vrací `double`. *(V českém prostředí systém může vyžadovat z terminálu zadat čárku místo tečky!)*
- `sc.next().charAt(0)` -> Jak načíst jeden znak. Vrací `char`.

## 5. Větvení (Podmínky a Switch)
Větvení slouží k řízení toku programu. Často se znázorňuje pomocí **vývojového diagramu** (kosočtverec pro podmínku).

**A. Podmínky (if - else)**
Ve vývojovém diagramu se tok dělí na větev `+` (pravda, provede se příkaz 1) a `-` (nepravda, provede se příkaz 2).

*Příklad z prezentace (Zjištění, zda jde o čtverec nebo obdélník):*
```java
public static void podminka1() {
    Scanner sc = new Scanner(System.in);
    
    System.out.print("Zadej velikost strany a: ");
    int a = sc.nextInt();
    
    System.out.print("Zadej velikost strany b: ");
    int b = sc.nextInt();
    
    // Samotné větvení
    if (a == b) {
        System.out.println("Byl zadan ctverec."); // Větev +
    } else {
        System.out.println("Byl zadan obdelnik."); // Větev -
    }
}
```
*Operátory porovnání: `==` (rovná se), `!=` (nerovná se), `<`, `>`, `<=`, `>=`.*
*Logické operátory: `&&` (logické A ZÁROVEŇ), `||` (logické NEBO).*

**B. Přepínač (Switch)**
Používá se, když testujeme jednu konkrétní proměnnou (označme ji `V`) vůči více různým hodnotám (`H1`, `H2`... atd.). Ve vývojovém diagramu to vypadá jako rozcestník do mnoha směrů.

*Obecný zápis v Javě (podle prezentace):*
```java
switch(V) {
    case H1: 
        // příkazy;
        break; // 'break' ukončí switch, jinak se propadne do dalšího bloku
    case H2: 
        // příkazy;
        break;
    case Hn: 
        // příkazy;
        break;
    default: 
        // příkazy; (spustí se, když nevyhovuje ani jeden 'case', v diagramu značeno jako '*')
}
```

## 6. Cykly (Loops)
Slouží k opakovanému provedení bloku kódu.

**For cyklus** (ideální, když víme předem, kolikrát se to má opakovat):
```java
// Nastavení i = 0; podmínka i < 5; krok i++ (inkrementace o 1)
// Vypíše: 0, 1, 2, 3, 4
for (int i = 0; i < 5; i++) {
    System.out.println(i);
}
```

**While cyklus** (opakuje se, dokud platí podmínka):
```java
int hodnota = 0;
while (hodnota < 5) {
    System.out.println(hodnota);
    hodnota++;
}
```

## 7. Pole (Arrays)
Pevně daná paměť pro uložení vícero prvků stejného datového typu. Indexování prvků začíná od `0`.

```java
// Vytvoření pole čísel o velikosti 5 prvků
int[] cisla = new int[5];
cisla[0] = 10;
cisla[1] = 20;

// Přímá inicializace s hodnotami
String[] dny = {"Pondělí", "Úterý", "Středa"};
System.out.println(dny[0]);         // Vypíše: Pondělí
System.out.println(dny.length);     // Vypíše: 3 (vlastnost vracející velikost pole)
```
## 8. Třída Math
Obsahuje základní matematické funkce a konstanty jako statické metody. Nemusí se importovat (součást balíčku `java.lang`).

- `Math.PI` – Ludolfovo číslo ($\pi \approx 3{,}14159$)
- `Math.E` – Eulerovo číslo ($e \approx 2{,}71828$)
- `Math.sqrt(double a)` – druhá odmocnina ($\sqrt{a}$)
- `Math.pow(double a, double b)` – mocnina ($a^b$)
- `Math.abs(x)` – absolutní hodnota ($|x|$)
- `Math.round(x)` – zaokrouhlení na nejbližší celé číslo
- `Math.floor(x)` – zaokrouhlení dolů
- `Math.ceil(x)` – zaokrouhlení nahoru
- `Math.min(a, b)` / `Math.max(a, b)` – minimum / maximum ze dvou hodnot
- `Math.random()` – pseudonáhodné číslo z intervalu $\langle 0{,}0; 1{,}0)$

## 9. Práce s textovými řetězci (String)

### Porovnávání řetězců
- `boolean equals(String s)` – kontroluje přesnou shodnost řetězců.
- `boolean equalsIgnoreCase(String s)` – porovnává shodu, ale nerozlišuje malá a velká písmena.
```java
String a = "hodinky";
String b = "holinky";
// a.equals(b) -> false
```

### Získání části řetězce
- `String substring(int pozice)` – získá podřetězec od dané pozice do konce řetězce.
- `String substring(int poziceZ, int poziceK)` – získá podřetězec od pozice Z (včetně) do pozice K (vyjma).
```java
String a = "Litoměřice";
String b = a.substring(4);    // b = "měřice"
String c = a.substring(4, 7); // c = "měř"
```

### Získání znaku na indexu
- `char charAt(int pozice)` – vrátí znak na dané pozici (indexováno od 0).
```java
String a = "ahoj";
char b = a.charAt(2); // b = 'o'
```

### Hledání znaku nebo podřetězce
- Pokud je prvek nalezen, výsledkem je jeho **index**.
- Pokud prvek nalezen není, metoda vrátí **-1**.
- `int indexOf(char nebo String znak)` – hledá zadaný znak (nebo řetězec) od začátku a vrátí index jeho prvního výskytu.
- `int indexOf(char nebo String znak, int pozice)` – hledá zadaný znak od dané pozice a vrátí index prvního výskytu.
- `int lastIndexOf(char nebo String znak)` – hledá poslední výskyt daného znaku (hledá od konce).
- `int lastIndexOf(char nebo String znak, int pozice)` – hledá poslední výskyt od zadané pozice.

### Náhrada znaků
- `String replace(char co, char čím)` – nahradí všechny výskyty zadaného znaku za nový znak.

---

## 10. Objektově orientované programování (OOP)

### 10.1 Myšlenka OOP
V objektově orientovaném programování vytváříme programy, které **simulují skutečný nebo námi vymyšlený svět**.
- Čím je simulace přesnější, tím je výsledný program dokonalejší.
- Všechny simulované světy jsou ve skutečnosti **světy objektů**, které mají různé **vlastnosti** (data / stav) a **schopnosti** (chování / funkce) a které spolu navzájem komunikují.

---

### 10.2 Základní pilíře OOP

#### 1. Zapouzdření (Encapsulation)
- Zaručuje, že objekt **nemůže přímo přistupovat dovnitř jiných objektů**, abychom ani omylem neovlivnili chod některé jeho vnitřní části.
- Umožňuje před okolím **skrývat vnitřní stav (atributy) a pomocné metody** objektu.
- Rozdělení na dvě roviny:
  - **Rozhraní (Interface):** Množina veřejných informací a metod, které o sobě třída zveřejní vnějšímu světu.
  - **Implementace:** Konkrétní způsob vnitřního naprogramování skrytý před vnějším zásahem.

#### 2. Dědičnost (Inheritance)
- Vytváříme nové třídy (**potomky**) tak, aby zdědily všechny vlastnosti a schopnosti předka (**rodiče**) a přidaly k nim své vlastní specifické chování nebo vlastnosti.
- V Javě se dědí pomocí klíčového slova `extends`.
- **Příklad:** `Hodiny` (rodič / předek) $\rightarrow$ `Budik` (potomek, který dědí měření času a přidává funkci buzení / zvonění).

#### 3. Polymorfismus (Mnohotvárnost)
- Různé objekty na **stejný podnět (volání stejné metody) reagují různě**.
- Objekty poskytují svému okolí stejnou službu (stejný název metody), ale každý objekt při jejím vyvolání provede specifickou akci odpovídající svému typu.
- **Příklad:** Metoda `vykresli()` – pro instanci `Kruh` vykreslí kružnici, pro instanci `Ctverec` vykreslí čtverec.

---

### 10.3 Základní pojmy

| Pojem | Definice / Význam |
| :--- | :--- |
| **Objekt** | Jednotlivý prvek modelované reality. Má v sobě definované vlastnosti (stav) a schopnosti (chování). |
| **Třída (`class`)** | Popis skupiny podobných objektů. Slouží jako **šablona (vzor)** pro vytváření objektů. |
| **Instance** | Konkrétní objekt vytvořený v paměti na základě dané třídy (např. třída je `Kruh`, instance je konkrétní kruh `k1`). |
| **Zpráva** | Prostředek, pomocí kterého spolu objekty komunikují (v praxi jde o volání metody na objektu, např. `objekt.akce()`). |
| **Metoda** | Část programu (funkce třídy), která se vykoná v reakci na obdrženou zprávu. |

---

### 10.4 Vytvoření nové třídy a její syntaxe

Definice třídy se skládá z modifikátoru přístupu, klíčového slova `class` a identifikátoru:

```java
public class NazevTridy {
    // 1. Atributy (stav)
    // 2. Konstruktory (inicializace)
    // 3. Metody (chování)
}
```

- **Modifikátor přístupu:** Určuje, kdo smí s třídou / prvkem pracovat:
  - `public` – veřejný přístup (odkudkoliv).
  - `private` – soukromý přístup (pouze zevnitř dané třídy – základ zapouzdření).
- **`class`:** Klíčové slovo deklarující třídu.
- **Identifikátor (Název třídy):**
  - Podléhá konvenci **PascalCase** (začíná velkým písmenem, např. `MojeTrida`, `Kruh`).
  - U veřejné třídy (`public class`) se název třídy **musí přesně shodovat s názvem souboru** (`NazevTridy.java`).

---

### 10.5 Atributy (Vlastnosti objektu)
Atributy jsou proměnné definované uvnitř třídy, které popisují stav objektu.

**Dělení atributů:**
1. **Atributy instance:**
   - Každá vytvořená instance má **svoji vlastní nezávislou hodnotu** tohoto atributu v paměti.
   - Příklad: Poloměr kruhu `r` – kruh `k1` má $r = 5$, kruh `k2` má $r = 12$.
2. **Atribut třídy (statický atribut – `static`):**
   - **Sdílený atribut** pro všechny instance dané třídy.
   - Existuje pouze v jedné kopii v paměti a všechny instance k němu mají přístup se stejnou hodnotou.
   - Příklad: Počítadlo celkového počtu vytvořených instancí `static int pocetKruhu;`.

---

### 10.6 Vytvoření instance a konstruktor

Instanci třídy vytváříme zavoláním speciální metody zvané **konstruktor** pomocí operátoru **`new`**:

$$\text{NázevTřídy} \quad \text{názevProměnné} = \mathbf{new} \quad \text{NázevTřídy}(\text{parametry});$$

```java
Kruh k = new Kruh(3);
```

- **Konstruktor:** Speciální metoda třídy, která se jmenuje stejně jako třída, nemá žádný návratový typ (ani `void`) a slouží k inicializaci nově vytvořeného objektu.
- **Co konstruktor udělá:** Vytvoří instanci v dynamické paměti a **vrátí odkaz (referenci)**, pomocí kterého s instancí dále v programu pracujeme.

---

### 10.7 Instance vs. Odkaz (Paměťový model: Halda a Garbage Collector)

V Javě se striktně rozlišuje mezi samotným objektem a odkazem na něj:

1. **Uložení v paměti (Halda vs. Zásobník):**
   - **Instance (Objekt):** Je fyzicky alokována v dynamické paměti zvané **halda (heap)**.
   - **Odkaz (Reference):** Proměnná (např. `k`), která je uložena na **zásobníku (stack)** a obsahuje pouze adresu / ukazatel na místo v haldě, kde se skutečný objekt nachází.

2. **Správa paměti a Garbage Collector (GC):**
   - O haldu se stará automatický správce paměti JVM – **Garbage Collector (GC)**. Nikdo jiný do přímé správy haldy nemá přístup.
   - **Funkce GC:**
     - **Přiděluje paměť** nově vznikajícím objektům při volání `new`.
     - **Automaticky ruší nepotřebné objekty** a uvolňuje paměť – jakmile na objekt v haldě již nevede žádný aktivní odkaz (např. proměnná zanikla nebo byla nastavena na `null`), GC tento objekt z haldy bezpečně odstraní.

---

### 10.8 Souhrnný příklad: Třída Kruh

Ukázka kompletní implementace třídy podle probraných slajdů:

```java
// Soubor: Kruh.java
public class Kruh {
    // 1. Atribut instance (zapouzdřený - private)
    private double polomer;

    // 2. Atribut třídy (sdílený pro všechny kruhy - static)
    private static int pocetKruhu = 0;

    // 3. Konstruktor pro vytvoření instance (volán přes 'new Kruh(r)')
    public Kruh(double polomer) {
        this.polomer = polomer;
        pocetKruhu++;
    }

    // 4. Metoda instance (veřejné rozhraní)
    public double spoctiObsah() {
        return Math.PI * polomer * polomer;
    }

    public double getPolomer() {
        return polomer;
    }

    // Statická metoda třídy
    public static int getPocetKruhu() {
        return pocetKruhu;
    }
}
```

Použití v hlavní třídě:
```java
public class Main {
    public static void main(String[] args) {
        // Vytvoření instance na haldě a uložení odkazu do 'k1'
        Kruh k1 = new Kruh(3.0);
        
        // Komunikace pomocí zprávy (volání metody)
        System.out.println("Poloměr: " + k1.getPolomer());
        System.out.println("Obsah: " + k1.spoctiObsah());
        System.out.println("Vytvořeno kruhů: " + Kruh.getPocetKruhu());
    }
}
```

---

## 11. Přetěžování metod a konstruktorů (Overloading)

### 11.1 Co je přetěžování
Přetěžování (**Overloading**) je schopnost třídy definovat více metod nebo konstruktorů se **stejným názvem**, ale s **rozdílným seznamem parametrů** (rozdílnou signaturou).

- **Typ polymorfismu:** Jedná se o **statický polymorfismus** (řešený v době překladu – *compile-time*).
- **Princip:** Překladač (kompilátor) v okamžiku volání sám vybere správnou metodu podle počtu, typu a pořadí předaných argumentů.

---

### 11.2 Signatura metody (Method Signature)
Kompilátor identifikuje metody výhradně podle jejich **signatury**.

$$\text{Signatura metody} = \text{Název metody} + \text{Seznam typů parametrů (počet, typy a jejich pořadí)}$$

#### Co TVOŘÍ signaturu:
1. **Název metody** (např. `vypocitej`)
2. **Počet parametrů** (např. 2 vs. 3)
3. **Datové typy parametrů** (např. `int` vs. `double`)
4. **Pořadí datových typů parametrů** (např. `(int, String)` vs. `(String, int)`)

#### Co NETVOŘÍ signaturu (Kritická pravidla):
- **Návratový typ metody:** Změna návratového typu **není** přetížením. Pokud mají dvě metody shodný název i parametry a liší se pouze návratovým typem (např. jedna vrací `void` a druhá `int`), kód **neprojde překladem** (*Compile Error: method already defined*).
- **Modifikátory přístupu:** Změna z `public` na `private` nebo přidání `static` signaturu nemění.
- **Názvy parametrů:** Názvy proměnných v hlavičce metody kompilátor ignoruje. `secti(int a, int b)` a `secti(int x, int y)` mají totožnou signaturu.

```java
// PLATNÉ PŘETÍŽENÍ:
public void tiskni(int cislo) { ... }
public void tiskni(String text) { ... }
public void tiskni(int x, int y) { ... }
public void tiskni(String text, int pocet) { ... }
public void tiskni(int pocet, String text) { ... }

// NEPLATNÉ PŘETÍŽENÍ (Chyba při kompilaci!):
public int tiskni(int cislo) { return cislo; } // Kolize s tiskni(int cislo) - návratový typ se nepočítá!
public void tiskni(int a) { ... }               // Kolize s tiskni(int cislo) - jiný název parametru nestačí!
```

---

### 11.3 Přetěžování konstruktorů (Constructor Overloading)
V OOP se přetěžování nejčastěji uplatňuje u **konstruktorů**. Umožňuje instanciovat objekt různými způsoby – například zadáním všech parametrů, pouze části z nich, nebo bez parametrů s dosazením výchozích (defaultních) hodnot.

#### Zřetězení konstruktorů (`this(...)`)
Aby nedocházelo k duplicitnímu kódu při inicializaci atributů (porušení principu DRY – *Don't Repeat Yourself*), používá se volání jednoho konstruktoru z druhého pomocí klíčového slova **`this(...)`**.

> [!IMPORTANT]
> **Pravidlo pro `this(...)`:** Volání jiného konstruktoru přes `this(...)` musí být **striktně prvním příkazem** v těle konstruktoru. Před ním nesmí být žádný jiný řádek kódu.

#### Příklad: Třída Obdelnik s přetíženými konstruktory
Levý horní roh je definován bodem $[x, y]$, rozměry tvoří šířka $a$ a výška $b$.

```java
public class Obdelnik {
    private int a, b, x, y;
    private String barva;
    private static final int DEFAULT_KROK = 10;

    // 1. Bezparametrický konstruktor: nastaví výchozí pozici, rozměry i barvu
    public Obdelnik() {
        this(0, 0, DEFAULT_KROK * 5, DEFAULT_KROK * 3, "cervena");
    }

    // 2. Částečný konstruktor: pozice a rozměry, barva se použije implicitní
    public Obdelnik(int x, int y, int a, int b) {
        this(x, y, a, b, "cervena");
    }

    // 3. Částečný konstruktor: pouze rozměry (počátek v [0, 0])
    public Obdelnik(int a, int b) {
        this(0, 0, a, b, "cervena");
    }

    // 4. Plný parametrický konstruktor (centrální inicializační bod)
    public Obdelnik(int x, int y, int a, int b, String barva) {
        if (a <= 0 || b <= 0) {
            throw new IllegalArgumentException("Rozměry stran a, b musí být kladné!");
        }
        this.x = x;
        this.y = y;
        this.a = a;
        this.b = b;
        this.barva = barva;
    }
}
```

Použití v kódu:
```java
// Volá konstruktor č. 1 (výchozí hodnoty)
Obdelnik o1 = new Obdelnik(); 

// Volá konstruktor č. 3 (šířka 40, výška 20, pozice [0, 0])
Obdelnik o2 = new Obdelnik(40, 20); 

// Volá konstruktor č. 4 (plná specifikace)
Obdelnik o3 = new Obdelnik(15, 25, 100, 50, "modra"); 
```

---

### 11.4 Srovnání: Přetěžování (Overloading) vs. Překrývání (Overriding)

Tento rozdíl je zásadní koncepční otázkou OOP:

| Kritérium | Přetěžování (**Overloading**) | Překrývání (**Overriding**) |
| :--- | :--- | :--- |
| **Kde k němu dochází** | V rámci **jedné třídy** (případně děděním dalších variant). | Mezi **rodičem a potomkem** (dědičnost). |
| **Signatura metody** | **Musí být odlišná** (jiné parametry). | **Musí být zcela shodná** (stejný název i parametry). |
| **Návratový typ** | Může být libovolný (nemá vliv). | Musí být shodný (nebo kovariantní podtyp). |
| **Druh polymorfismu** | **Statický** (překladový / compile-time). | **Dynamický** (běhový / runtime). |
| **Anotace v kódu** | Žádná. | `@Override` |
| **Účel** | Poskytnout více způsobů volání stejné logiky. | Předefinovat nebo upravit chování předka v potomkovi. |

---

### 11.5 Automatická typová konverze při přetěžování
Pokud kompilátor nenajde přesnou shodu v datových typech parametrů, zkusí provést **implicitní typovou konverzi (widening)** směrem k většímu typu:

$$\text{byte} \rightarrow \text{short} \rightarrow \text{int} \rightarrow \text{long} \rightarrow \text{float} \rightarrow \text{double}$$

**Příklad:**
```java
public class Test {
    public static void vypis(double d) {
        System.out.println("Double: " + d);
    }
    
    public static void vypis(int i) {
        System.out.println("Int: " + i);
    }

    public static void main(String[] args) {
        vypis(5);    // Zavolá přesnou shodu: vypis(int)
        vypis(5.5);  // Zavolá přesnou shodu: vypis(double)
        
        short s = 2;
        vypis(s);    // Neexistuje vypis(short) -> rozšíří se na nejbližší: vypis(int)
    }
}
```

> [!WARNING]
> **Nejednoznačné volání (Ambiguous Method Call):**
> Pokud kompilátor nedokáže jednoznačně určit, která přetížená metoda má přednost (např. kvůli kombinaci implicitních konverzí nebo varargs), zahlásí chybu:
> `reference to ... is ambiguous, both method ... match`. V takovém případě je nutné parametr explicitně přetypovat, např. `metoda((double) x)`.


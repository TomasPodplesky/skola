# Java - Základy a Syntaxe

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

	 # Otázka 03: Booleova algebra a logické funkce

- logické funkce
- pravidla Booleovy algebry a její využití
- karnaughovy mapy a minimalizace

---

## 1. Logické funkce a jejich vlastnosti

Základní prvky, neboli tzv. hradla mají na vstupu binární stavy, ze kterých generují binární stavy na výstupu.

Každá logická funkce o n-proměnných má tabulku pravdivostních hodnot s $2^n$ stavy.
- Např. pro 2 vstupy ($a$, $b$) bude mít tabulka 4 řádky: 00, 01, 10, 11
- Např. pro 3 vstupy ($a$, $b$, $c$) bude mít tabulka 8 řádků
- Např. pro 4 vstupy ($a$, $b$, $c$, $d$) bude mít tabulka 16 řádků, atd.

**Logická funkce** je určena tabulkou pravdivostních hodnot pro jednotlivé kombinace stavů.

**Logické funkce 1 proměnné**
- Logická nula (výstup je vždy 0)
- Identita (výstup kopíruje vstup)
- Negace (invertuje vstup)
- Logická jednička (výstup je vždy 1)

Definování výstupů pro logické funkce více proměnných je poněkud složitější, ale vždy platí, že **logická funkce je taková funkce, která má pro každou možnou kombinaci vstupních stavů definován jeden a pouze jeden výstupní stav**. Pokud není na některou možnou kombinaci vstupních stavů definován výstupní stav, nejedná se o logickou funkci, ale o neúplně definovanou logickou funkci.

V tabulce níže jsou uvedeny základní logické funkce o dvou proměnných, se kterými budeme dále počítat a pro které budeme provádět např. minimalizaci v Karnaughových mapách.

### Základní logické funkce

| Pojmenování | Značka | Rovnice | Pravdivostní tabulka | Realizace |
| :---: | :---: | :---: | :---: | :--- |
| AND | `&` | $Y = a \cdot b$ | 0 0 $\rightarrow$ 0 | Sériové zapojení (vypínače za sebou) |
| OR | `≥1` | $Y = a + b$ | 0 0 $\rightarrow$ 0 | Paralelní zapojení (vypínače vedle sebe) |
| NOT | `1` s kroužkem | $Y = \bar{a}$ | 0 $\rightarrow$ 1 | |
| NAND | `&` s kroužkem | $Y = \overline{a \cdot b}$ | 0 0 $\rightarrow$ 1 | |
| NOR | `≥1` s kroužkem | $Y = \overline{a + b}$ | 0 0 $\rightarrow$ 1 | |
| XOR | `=1` | $Y = a \oplus b$ | 0 0 $\rightarrow$ 0 | Exkluzivní OR (jeden z vypínačů sepnut, pokud ne oba) - nerovnost |
| XNOR | `=1` s kroužkem | $Y = \overline{a \oplus b}$ | 0 0 $\rightarrow$ 1 | Exkluzivní NOR (žádný nebo oba vypínače sepnuty) - rovnost |

---

## 2. Vyjádření logické funkce
Logickou funkci lze vyjádřit několika způsoby:
1. Pravdivostní tabulka
2. V úplném disjunktním tvaru (ÚDT)
3. V úplném konjunktním tvaru (ÚKT)
4. Grayův kód
5. Karnaughovy mapy

### Pravdivostní tabulkou
Příklad logické funkce $Y$, která má hodnotu logické 1 pro řádky 3, 4 a 7:

| Řádek | $A$ | $B$ | $C$ | $Y$ |
| :---: | :---: | :---: | :---: | :---: |
| 0 | 0 | 0 | 0 | 0 |
| 1 | 0 | 0 | 1 | 0 |
| 2 | 0 | 1 | 0 | 0 |
| 3 | 0 | 1 | 1 | 1 |
| 4 | 1 | 0 | 0 | 1 |
| 5 | 1 | 0 | 1 | 0 |
| 6 | 1 | 1 | 0 | 0 |
| 7 | 1 | 1 | 1 | 1 |

### V úplném disjunktním tvaru (ÚDT)
Funkce se zapisuje ve formě součtu součinů. 
Pro výše uvedenou tabulku je zápis funkce následující:
$$Y = \bar{A} \cdot B \cdot C + A \cdot \bar{B} \cdot \bar{C} + A \cdot B \cdot C$$

#### Milanův tahák (příklady zápisu výrazů pro logickou 1)
| ř.  | $A$ | $B$ | $C$ | $Y$ | Výraz |
| :-: | :-: | :-: | :-: | :-: | :---: |
| 0.  |  0  |  0  |  0  |  1  | $\bar{A} \cdot \bar{B} \cdot \bar{C}$ |
| 1.  |  1  |  1  |  1  |  1  | $A \cdot B \cdot C$ |
| 2.  |  1  |  0  |  1  |  1  | $A \cdot \bar{B} \cdot C$ |
| 3.  |  0  |  1  |  0  |  1  | $\bar{A} \cdot B \cdot \bar{C}$ |

---

## 3. Booleova algebra
Základem analýzy i syntézy logických obvodů je Booleova algebra. Je to vlastně matematický aparát, se kterým se dá dělat plno věcí, pro nás to bude pro zjednodušení (minimalizace).

Booleova algebra pracuje se dvěma stavy: **0 a 1**, logický **součet (+)** a logický **součin ($\cdot$)**.

### Základní zákony
**Komutativnost**
Při logickém sčítání (OR) a logickém násobení (AND) nezáleží na pořadí proměnných.
$$A + B = B + A$$
$$A \cdot B = B \cdot A$$

**Asociativnost**
Při sčítání a násobení lze libovolně sdružovat proměnné do závorek.
$$(A + B) + C = A + (B + C)$$
$$(A \cdot B) \cdot C = A \cdot (B \cdot C)$$

**Distributivnost**
Roznásobení závorky (platí pro obě operace navzájem).
$$A \cdot (B + C) = (A \cdot B) + (A \cdot C)$$
$$A + (B \cdot C) = (A + B) \cdot (A + C)$$

### Základní axiomy a kompletní pravidla
**Axiomy** (platí ve vztahu pro AND, tak i pro OR):
- $0 \cdot x = 0$
- $1 \cdot x = x$
- $x \cdot x = x$
- $x \cdot \bar{x} = 0$
- $\overline{\bar{x}} = x$

**Základní pravidla (zákony Booleovy algebry v tabulce):**

| Pravidlo                   | Vztah                                         | Pravidlo               | Vztah                                       |
| :------------------------- | :-------------------------------------------- | :--------------------- | :------------------------------------------ |
| **1. komutativní**         | $x + y = y + x$                               | **komutativní**        | $x \cdot y = y \cdot x$                     |
| **2. asociativní**         | $x + (y + z) = (x + y) + z$                   | **asociativní**        | $x \cdot (y \cdot z) = (x \cdot y) \cdot z$ |
| **3. distributivní**       | $x \cdot (y + z) = (x \cdot y) + (x \cdot z)$ | **distributivní**      | $x + (y \cdot z) = (x + y) \cdot (x + z)$   |
| **4. neutrálnost**         | $x + 0 = x$                                   | **neutrálnost**        | $x \cdot 1 = x$                             |
| **5. agresivnost**         | $x + 1 = 1$                                   | **agresivnost**        | $x \cdot 0 = 0$                             |
| **6. komplementarita**     | $x + \bar{x} = 1$                             | **komplementarita**    | $x \cdot \bar{x} = 0$                       |
| **7. idempotence**         | $x + x = x$                                   | **idempotence**        | $x \cdot x = x$                             |
| **8. absorpce**            | $x + x \cdot y = x$                           | **absorpce**           | $x \cdot (x + y) = x$                       |
| **9. absorpce negace**     | $x + \bar{x} \cdot y = x + y$                 | **absorpce negace**    | $x \cdot (\bar{x} + y) = x \cdot y$         |
| **10. De Morganovo prav.** | $\overline{x + y} = \bar{x} \cdot \bar{y}$    | **De Morganovo prav.** | $\overline{x \cdot y} = \bar{x} + \bar{y}$  |

### Příklad algebraické minimalizace
Zjednodušení logického výrazu pomocí zákonů Booleovy algebry (vytýkání a pravidlo $x + \bar{x} = 1$):
$$a b \bar{c} + \bar{a} \bar{b} \bar{c} + \bar{a} b \bar{c} + a b c = a b (\bar{c} + c) + \bar{a} \bar{c} (\bar{b} + b) = a b \cdot 1 + \bar{a} \bar{c} \cdot 1 = a b + \bar{a} \bar{c}$$

---

## 4. Karnaughova mapa (K-mapa)
Je grafická pomůcka, která slouží pro minimalizaci logických funkcí z pravdivostní tabulky. Tím, že to je grafický nástroj minimalizace a ne algebraický, můžeme zjistit, kolik budeme potřebovat minimálně hradel na zrealizování dané funkce. Do mapy se zapisují primárně výstupní data (hodnoty funkce $Y$).

### Struktura Karnaughovy mapy
Karnaughova mapa je tabulka, kde každý prvek (buňka) odpovídá jednomu řádku pravdivostní tabulky pro danou funkci, a je poskládána tak, aby se sousední buňky lišily pouze o změnu jedné vstupní proměnné.

**Pro 1 vstupní proměnnou**

| Ř | $x_0$ | $Y$ |
| :---: | :---: | :---: |
| 0 | 0 | 0 |
| 1 | 1 | 1 |

**Pro 2 vstupní proměnné**

| $x_1$ | $x_0$ | $Y$ | Ř |
| :---: | :---: | :---: | :---: |
| 0 | 0 | 0 | 0 |
| 0 | 1 | 1 | 1 |
| 1 | 0 | 1 | 2 |
| 1 | 1 | 0 | 3 |

**Rozložení buněk pro 3 proměnné (Indexy řádků podle pravdivostní tabulky):**

| 0 | 1 | 3 | 2 |
| :---: | :---: | :---: | :---: |
| 4 | 5 | 7 | 6 |
*(Poznámka: Sloupce jsou kódovány v Grayově kódu: 00, 01, 11, 10)*

### Postup minimalizace pomocí Karnaughovy mapy
- Sestavení a vyplnění K-mapy jedničkami z pravdivostní tabulky.
- Sdružování (Vytváření smyček) (sdružují se 1) nejlépe do co největších smyček. Smyčky se mohou překrývat a musí splňovat pravidla:
  - Mohou se sdružovat pouze sousední 1 (i horizontálně).
  - Mohou se sdružovat pouze sudý počet 1 (1, 2, 4, 8, 16).
  - Smyčka má vždy tvar obdélníku nebo čtverce (ve 3 a 4 proměnných mohou přecházet přes okraje).
  - Velikost smyčky musí být vždy mocninou dvou ($2^n$).
  - Cílem je mít co největší smyčku s co nejméně vytvořenými smyčkami.
  - Každá 1 musí být alespoň v jedné smyčce (aby nevybledla). Jednotlivá 1 se bere jako smyčka o 1 prvku.
- Vypsání výsledné zjednodušené logické funkce sečtením (ORováním).

> [!NOTE]
> Pamatujte si, že u Booleovy algebry pro 1. logickou hodnotu (to, kde smyčky děláte a vnímáte jedničku) se rovněž hledá, aby nebyla změněná od své původní a v tom případě se "neškrtne" a proměnnou si zapíšete.

### Příklad

**Pravdivostní tabulka**

| $a$ | $b$ | $c$ | $Y$ |
| :-: | :-: | :-: | :-: |
| 0 | 0 | 0 | 0 |
| 0 | 0 | 1 | 1 |
| 0 | 1 | 0 | 1 |
| 0 | 1 | 1 | 0 |
| 1 | 0 | 0 | 1 |
| 1 | 0 | 1 | 1 |
| 1 | 1 | 0 | 1 |
| 1 | 1 | 1 | 0 |

**Karnaughova mapa**

| $a$ \ $bc$ | 00 | 01 | 11 | 10 |
| :---: | :---: | :---: | :---: | :---: |
| **0** | 0 | 1 | 0 | 1 |
| **1** | 1 | 1 | 0 | 1 |

- **Smyčka 1 (červená):** $a = 1$; $b = 0$; $c$ se mění $\rightarrow a \cdot \bar{b}$
- **Smyčka 2 (zelená):** $a$ se mění; $b = 0$; $c = 1 \rightarrow \bar{b} \cdot c$
- **Smyčka 3 (modrá):** $a$ se mění; $b = 1$; $c = 0 \rightarrow b \cdot \bar{c}$

Výsledná zjednodušená logická funkce pro danou $Y$:
$$Y = a \cdot \bar{b} + \bar{b} \cdot c + b \cdot \bar{c}$$

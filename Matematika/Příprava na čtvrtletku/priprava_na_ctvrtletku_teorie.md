# Příprava na čtvrtletní písemnou práci z matematiky - Teorie

Tento dokument slouží jako teoretická příprava na čtvrtletní písemnou práci. Témata pokrývají **limity posloupností**, **Kochovu vločku (nekonečné řady v geometrii)**, **aritmetické a geometrické posloupnosti (včetně parametrů)** a **slovní úlohy na finanční matematiku / exponenciální pokles**.

Příklady k procvičení najdeš v samostatném souboru `priprava_na_ctvrtletku_priklady.md`.

---

## 1. Limity posloupností

Při výpočtu limit posloupností ($\lim_{n \to \infty} a_n$) používáme několik základních strategií podle typu zadání:

1. **Racionální lomená funkce (podíl polynomů):** Vytkneme nejvyšší mocninu $n$ z čitatele i jmenovatele (nebo jednoduše podělíme každý člen nejvyšší mocninou jmenovatele).
   * Pokud je nejvyšší mocnina v čitateli **menší** než ve jmenovateli, limita je $0$.
   * Pokud jsou nejvyšší mocniny **stejné**, limita je podíl koeficientů u těchto mocnin.
   * Pokud je nejvyšší mocnina v čitateli **větší**, limita je $\pm\infty$ (posloupnost diverguje).
2. **Exponenciální členy ($q^n$):** Vytkneme nejrychleji rostoucí exponenciálu (člen s největším základem). Pamatuj, že pro $|q| < 1$ platí $\lim_{n \to \infty} q^n = 0$.
3. **Rozdíl odmocnin ($\sqrt{A} - \sqrt{B}$):** Usměrníme výraz vynásobením jedničkou ve tvaru $\frac{\sqrt{A} + \sqrt{B}}{\sqrt{A} + \sqrt{B}}$ s využitím vzorce $(x-y)(x+y) = x^2 - y^2$.

---

## 2. Kochova vločka (Nekonečné řady v geometrii)

Kochova vločka je klasický fraktál. Konstrukce začíná rovnostranným trojúhelníkem o straně $a$. V každém kroku se prostřední třetina každé úsečky nahradí novým rovnostranným trojúhelníkem (směrem ven) a jeho základna se odstraní.

> [!NOTE]
> **Základní paradox:** Kochova vločka má **konečný obsah**, ale **nekonečný obvod**!

### Odvození vzorců v nekonečnu ($n \to \infty$)

Mějme výchozí rovnostranný trojúhelník o straně $a$.
* **Obsah výchozího trojúhelníku ($S_0$):** $S_0 = \frac{a^2\sqrt{3}}{4}$
* **Obvod výchozího trojúhelníku ($O_0$):** $O_0 = 3a$

#### A) Obvod v nekonečnu ($O_\infty$)
* V kroku 0 máme $3$ úsečky délky $a$.
* V kroku 1 se každá úsečka nahradí $4$ úsečkami o délce $\frac{a}{3}$. Celkový počet úseček je $3 \cdot 4 = 12$, délka každé je $\frac{a}{3}$. Obvod $O_1 = 12 \cdot \frac{a}{3} = 4a$.
* V kroku $n$ máme $3 \cdot 4^n$ úseček o délce $\frac{a}{3^n}$.
* **Vzorec pro obvod v $n$-tém kroku:**
  $$O_n = 3a \cdot \left(\frac{4}{3}\right)^n$$
* Protože kvocient $q = \frac{4}{3} > 1$, limita pro $n \to \infty$ roste do nekonečna:
  $$\mathbf{O_\infty = \lim_{n\to\infty} O_n = \infty}$$

#### B) Obsah v nekonečnu ($S_\infty$)
* V 1. kroku přidáme $3$ malé trojúhelníky o straně $\frac{a}{3}$. Obsah každého z nich je $\frac{S_0}{9}$. Přidaný obsah je $3 \cdot \frac{S_0}{9} = \frac{1}{3} S_0$.
* Ve 2. kroku přidáme $3 \cdot 4 = 12$ trojúhelníků o straně $\frac{a}{9}$. Obsah každého je $\frac{S_0}{81}$. Přidaný obsah je $12 \cdot \frac{S_0}{81} = \frac{4}{27} S_0$.
* V $n$-tém kroku přidáme $3 \cdot 4^{n-1}$ trojúhelníků o straně $\frac{a}{3^n}$. Obsah každého je $\frac{S_0}{9^n}$.
* Celkový obsah $S_\infty$ je součtem výchozího obsahu a nekonečné geometrické řady přidaných obsahů:
  $$S_\infty = S_0 + \sum_{n=1}^{\infty} 3 \cdot 4^{n-1} \frac{S_0}{9^n} = S_0 \left(1 + \frac{3}{9} \sum_{n=1}^{\infty} \left(\frac{4}{9}\right)^{n-1}\right)$$
  Geometrická řada uvnitř sumy má první člen $a_1 = 1$ a kvocient $q = \frac{4}{9} < 1$. Její součet je:
  $$s = \frac{a_1}{1-q} = \frac{1}{1 - \frac{4}{9}} = \frac{9}{5}$$
  Dosadíme zpět:
  $$S_\infty = S_0 \left(1 + \frac{1}{3} \cdot \frac{9}{5}\right) = S_0 \left(1 + \frac{3}{5}\right) = \frac{8}{5} S_0$$
* Dosazením $S_0 = \frac{a^2\sqrt{3}}{4}$ získáme výsledný vzorec pro limitní obsah:
  $$\mathbf{S_\infty = \frac{8}{5} \cdot \frac{a^2\sqrt{3}}{4} = \frac{2a^2\sqrt{3}}{5}}$$

---

## 3. Posloupnosti a vlastnosti

> [!WARNING]
> **Pozor na chyták u aritmetické posloupnosti!** U soustav rovnic si dávej pozor na typ posloupnosti. Pokud je zadána soustava, která pro aritmetickou posloupnost vede na nesmysl (např. $60 = 252$), pak soustava nemá řešení. Učitelé někdy dělají chybu při přepisu zadání z geometrické na aritmetickou.

### Klíčová vlastnost geometrické posloupnosti
Pro tři po sobě jdoucí členy geometrické posloupnosti $a_1, a_2, a_3$ platí klíčová vlastnost (plynoucí z rovnosti kvocientů $\frac{a_2}{a_1} = \frac{a_3}{a_2}$):
$$a_2^2 = a_1 \cdot a_3$$

Tohoto vztahu se hojně využívá pro určení neznámého parametru v zadání typu "Určete $x$ tak, aby daná čísla tvořila GP".

### Vlastnost aritmetické posloupnosti
Pro tři po sobě jdoucí členy aritmetické posloupnosti zase platí:
$$2a_2 = a_1 + a_3$$

### Nekonečné geometrické řady
Geometrická řada konverguje (má konečný součet) právě tehdy, když platí podmínka $|q| < 1$. 
Pokud je tato podmínka splněna, pak součet řady je:
$$s = \frac{a_1}{1 - q}$$

Součet prvních $n$ členů aritmetické posloupnosti je dán vzorcem:
$$s_n = \frac{n}{2} (a_1 + a_n)$$

---

## 4. Slovní úlohy & Finanční matematika

U slovních úloh na úročení nebo úbytek hodnoty používáme vzorec pro složené úročení / geometrický růst (úbytek):
$$K_n = K_0 \cdot (1 \pm i)^n$$
* $K_0$ je počáteční hodnota (jistina, intenzita, atd.).
* $i$ je úroková sazba nebo procento změny vyjádřené jako desetinné číslo (např. $5\% = 0{,}05$).
* Znaménko $+$ platí pro růst (úročení), $-$ pro pokles (absorpce světla, inflace).
* $n$ je počet období (počet desek, let, měsíců).

---

## 5. Přehled vzorců (Tahák)

### Aritmetická posloupnost
* $a_n = a_1 + (n - 1) \cdot d$
* $a_r = a_s + (r - s) \cdot d$
* $s_n = \frac{n}{2} \cdot (a_1 + a_n)$
* $a_n = \frac{a_{n-1} + a_{n+1}}{2}$
* $a_{n+1} - a_n = d$

### Geometrická posloupnost
* $a_n = a_1 \cdot q^{n-1}$
* $a_r = a_s \cdot q^{r-s}$
* $s_n = a_1 \cdot \frac{q^n - 1}{q - 1}$
* $a_n^2 = a_{n-1} \cdot a_{n+1}$
* $\frac{a_{n+1}}{a_n} = q$
* $a_n = a_1 \cdot \left(1 \pm \frac{P}{100}\right)^n$

### Limity
* $\lim_{n \to \infty} \left(\frac{1}{n}\right) = 0$
* $\lim_{n \to \infty} \left(\frac{n}{1}\right) = \infty$
* $\ln x < x^k < a^x < x! < x^x$
* $\lim_{n \to \infty} \left(1 + \frac{1}{n}\right)^n = e$
* $\lim_{n \to \infty} \left(1 - \frac{1}{n}\right)^n = \frac{1}{e}$
* $\lim_{n \to \infty} \left(1 + \frac{1}{n}\right)^{n \cdot x} = e^x$
* $\lim_{n \to \infty} \left(1 + \frac{1}{x \cdot n}\right)^n = \sqrt[x]{e}$

### Logaritmy
* $\log_a(x) = y \implies a^y = x$
* $\log_a(1) = 0$
* $\log_a(a) = 1$
* $\log_a(x \cdot y) = \log_a(x) + \log_a(y)$
* $\log_a\left(\frac{x}{y}\right) = \log_a(x) - \log_a(y)$
* $\log_a(x^r) = r \cdot \log_a(x)$
* $\log_a(x) = \frac{\log_b(x)}{\log_b(a)}$

### Mocniny
* $a^0 = 1$
* $a^r \cdot a^s = a^{r+s}$
* $\frac{a^r}{a^s} = a^{r-s}$
* $(a^r)^s = a^{r \cdot s}$
* $(a \cdot b)^r = a^r \cdot b^r$
* $\left(\frac{a}{b}\right)^r = \frac{a^r}{b^r}$
* $a^{-r} = \frac{1}{a^r}$

### Odmocniny
* $\sqrt[n]{a^m} = a^{\frac{m}{n}}$
* $\sqrt[n]{a \cdot b} = \sqrt[n]{a} \cdot \sqrt[n]{b}$
* $\sqrt[n]{\frac{a}{b}} = \frac{\sqrt[n]{a}}{\sqrt[n]{b}}$
* $\sqrt[m]{\sqrt[n]{a}} = \sqrt[m \cdot n]{a}$
* $\sqrt[n]{a^m} = \sqrt[n \cdot k]{a^{m \cdot k}}$

---

## Rychlý checklist před písemkou:
- [ ] Umím spočítat limitu podílu polynomů (porovnáním stupňů a vytknutím).
- [ ] Umím usměrnit limitu typu $\infty - \infty$ obsahující odmocniny.
- [ ] Pamatuji si, že obvod Kochovy vločky jde k $\infty$ a obsah k $\frac{8}{5} S_0$.
- [ ] Vím, že pro tři po sobě jdoucí členy GP platí $a_2^2 = a_1 \cdot a_3$ a umím použít substituci.
- [ ] Nezapomenu otočit znaménko nerovnice, pokud dělím záporným logaritmem (např. $\ln(0{,}95)$).
- [ ] Chápu rozdíl mezi jednoduchým úročením ($K_n = K_0(1+n \cdot i)$) a složeným úročením ($K_n = K_0(1+i)^n$).

Hodně štěstí u čtvrtletky! 🍀

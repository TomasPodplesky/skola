# Příprava na čtvrtletní písemnou práci z matematiky

Tento dokument slouží jako komplexní příprava na čtvrtletní písemnou práci. Témata pokrývají **limity posloupností**, **Kochovu vločku (nekonečné řady v geometrii)**, **aritmetické a geometrické posloupnosti (včetně parametrů)** a **slovní úlohy na finanční matematiku / exponenciální pokles**.

Příklady obsahují skryté řešení. Nejdříve si příklad spočítej sám/sama a poté si zkontroluj výsledek kliknutím na **Zobrazit řešení**.

---

## 1. Limity posloupností

Při výpočtu limit posloupností ($\lim_{n \to \infty} a_n$) používáme několik základních strategií podle typu zadání:

1. **Racionální lomená funkce (podíl polynomů):** Vytkneme nejvyšší mocninu $n$ z čitatele i jmenovatele (nebo jednoduše podělíme každý člen nejvyšší mocninou jmenovatele).
   * Pokud je nejvyšší mocnina v čitateli **menší** než ve jmenovateli, limita je $0$.
   * Pokud jsou nejvyšší mocniny **stejné**, limita je podíl koeficientů u těchto mocnin.
   * Pokud je nejvyšší mocnina v čitateli **větší**, limita je $\pm\infty$ (posloupnost diverguje).
2. **Exponenciální členy ($q^n$):** Vytkneme nejrychleji rostoucí exponenciálu (člen s největším základem). Pamatuj, že pro $|q| < 1$ platí $\lim_{n \to \infty} q^n = 0$.
3. **Rozdíl odmocnin ($\sqrt{A} - \sqrt{B}$):** Usměrníme výraz vynásobením jedničkou ve tvaru $\frac{\sqrt{A} + \sqrt{B}}{\sqrt{A} + \sqrt{B}}$ s využitím vzorce $(x-y)(x+y) = x^2 - y^2$.

### Cvičné příklady

#### Příklaď 1.1: Racionální lomená funkce (podobná té z testu)
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{3n^2 - 5n + 2}{2n^2 + 7n - 1}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Nejvyšší mocnina ve jmenovateli je $n^2$. Rozšíříme (podělíme) čitatel i jmenovatel výrazem $n^2$:
$$\lim_{n \to \infty} \frac{\frac{3n^2}{n^2} - \frac{5n}{n^2} + \frac{2}{n^2}}{\frac{2n^2}{n^2} + \frac{7n}{n^2} - \frac{1}{n^2}} = \lim_{n \to \infty} \frac{3 - \frac{5}{n} + \frac{2}{n^2}}{2 + \frac{7}{n} - \frac{1}{n^2}}$$

Víme, že pro $n \to \infty$ platí $\frac{5}{n} \to 0$, $\frac{2}{n^2} \to 0$, $\frac{7}{n} \to 0$ a $\frac{1}{n^2} \to 0$.

Dostáváme:
$$\frac{3 - 0 + 0}{2 + 0 - 0} = \mathbf{\frac{3}{2}}$$

**Závěr:** Limita je $\frac{3}{2}$. Posloupnost je konvergentní.
</details>

#### Příklad 1.2: Limita s exponenciálními členy
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{5^{n+1} - 3^n}{2 \cdot 5^n + 4^{n-1}}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Nejrychleji rostoucím členem je $5^n$. Upravíme si nejprve výrazy s mocninami:
* $5^{n+1} = 5 \cdot 5^n$
* $4^{n-1} = \frac{1}{4} \cdot 4^n$

Podělíme čitatel i jmenovatel výrazem $5^n$:
$$\lim_{n \to \infty} \frac{5 \cdot 5^n - 3^n}{2 \cdot 5^n + \frac{1}{4} \cdot 4^n} = \lim_{n \to \infty} \frac{5 - \left(\frac{3}{5}\right)^n}{2 + \frac{1}{4} \left(\frac{4}{5}\right)^n}$$

Protože $\frac{3}{5} < 1$ a $\frac{4}{5} < 1$, platí $\lim_{n\to\infty} \left(\frac{3}{5}\right)^n = 0$ a $\lim_{n\to\infty} \left(\frac{4}{5}\right)^n = 0$.

Dostáváme:
$$\frac{5 - 0}{2 + \frac{1}{4} \cdot 0} = \mathbf{\frac{5}{2}}$$

**Závěr:** Limita posloupnosti je $\frac{5}{2}$.
</details>

#### Příklad 1.3: Limita s rozdílem odmocnin
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \left(\sqrt{n^2 + 4n} - n\right)$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Tento výraz je typu $\infty - \infty$. Usměrníme ho vynásobením vhodným zlomkem:
$$\lim_{n \to \infty} \frac{\left(\sqrt{n^2 + 4n} - n\right) \cdot \left(\sqrt{n^2 + 4n} + n\right)}{\sqrt{n^2 + 4n} + n}$$

Použijeme vzorec $(a-b)(a+b) = a^2 - b^2$ v čitateli:
$$\lim_{n \to \infty} \frac{(n^2 + 4n) - n^2}{\sqrt{n^2 + 4n} + n} = \lim_{n \to \infty} \frac{4n}{\sqrt{n^2(1 + \frac{4}{n})} + n} = \lim_{n \to \infty} \frac{4n}{n\sqrt{1 + \frac{4}{n}} + n}$$

Vytkneme $n$ ve jmenovateli a zkrátíme s čitatelem:
$$\lim_{n \to \infty} \frac{4n}{n \left(\sqrt{1 + \frac{4}{n}} + 1\right)} = \lim_{n \to \infty} \frac{4}{\sqrt{1 + \frac{4}{n}} + 1}$$

Protože $\frac{4}{n} \to 0$ pro $n \to \infty$:
$$\frac{4}{\sqrt{1 + 0} + 1} = \frac{4}{2} = \mathbf{2}$$

**Závěr:** Limita posloupnosti je $2$.
</details>

#### Příklad 1.4: Limita s odmocninami pod podílem
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{\sqrt{n^2 + 1} + n}{3n - 2}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Nejvyšší mocnina ve jmenovateli je $n$. Podělíme čitatel i jmenovatel výrazem $n$:
$$\lim_{n \to \infty} \frac{\frac{\sqrt{n^2 + 1}}{n} + \frac{n}{n}}{\frac{3n}{n} - \frac{2}{n}}$$

Protože $n > 0$, platí $\frac{\sqrt{n^2+1}}{n} = \sqrt{\frac{n^2+1}{n^2}} = \sqrt{1 + \frac{1}{n^2}}$. Dostáváme:
$$\lim_{n \to \infty} \frac{\sqrt{1 + \frac{1}{n^2}} + 1}{3 - \frac{2}{n}}$$

Pro $n \to \infty$ víme, že $\frac{1}{n^2} \to 0$ a $\frac{2}{n} \to 0$:
$$\frac{\sqrt{1 + 0} + 1}{3 - 0} = \frac{1 + 1}{3} = \mathbf{\frac{2}{3}}$$

**Závěr:** Limita posloupnosti je $\frac{2}{3}$.
</details>

#### Příklad 1.5: Limita s faktoriály
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{(n+1)! - n!}{(n+1)! + n!}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Rozepíšeme faktoriál $(n+1)! = (n+1) \cdot n!$. Poté vytkneme $n!$ v čitateli i ve jmenovateli:
$$\lim_{n \to \infty} \frac{(n+1) \cdot n! - n!}{(n+1) \cdot n! + n!} = \lim_{n \to \infty} \frac{n! \cdot \left((n+1) - 1\right)}{n! \cdot \left((n+1) + 1\right)}$$

Zkrátíme $n!$ a zjednodušíme závorky:
$$\lim_{n \to \infty} \frac{n}{n + 2}$$

Nyní podělíme čitatel i jmenovatel výrazem $n$:
$$\lim_{n \to \infty} \frac{1}{1 + \frac{2}{n}} = \frac{1}{1 + 0} = \mathbf{1}$$

**Závěr:** Limita posloupnosti je $1$.
</details>

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

### Cvičný příklad na Kochovu vločku

#### Příklad 2.1: Výpočet pro konkrétní stranu
Rovnostranný trojúhelník má délku strany $a = 6 \text{ cm}$. Vypočítejte:
1. Obvod Kochovy vločky po 3. kroku ($O_3$).
2. Limitní obsah Kochovy vločky ($S_\infty$).

<details>
<summary>Zobrazit řešení</summary>

**1. Výpočet obvodu $O_3$:**
Použijeme odvozený vzorec $O_n = 3a \cdot \left(\frac{4}{3}\right)^n$ pro $n = 3$ a $a = 6$:
$$O_3 = 3 \cdot 6 \cdot \left(\frac{4}{3}\right)^3 = 18 \cdot \frac{64}{27}$$
Zkrátíme 18 a 27 číslem 9:
$$O_3 = 2 \cdot \frac{64}{3} = \frac{128}{3} \approx \mathbf{42{,}67 \text{ cm}}$$

**2. Výpočet limitního obsahu $S_\infty$:**
Nejprve spočítáme obsah původního trojúhelníku $S_0$ pro $a = 6$:
$$S_0 = \frac{6^2 \sqrt{3}}{4} = \frac{36\sqrt{3}}{4} = 9\sqrt{3} \text{ cm}^2$$
Nyní dosadíme do vztahu $S_\infty = \frac{8}{5} S_0$:
$$S_\infty = \frac{8}{5} \cdot 9\sqrt{3} = \frac{72\sqrt{3}}{5} \approx \mathbf{24{,}94 \text{ cm}^2}$$
*(Nebo rovnou ze vzorce: $S_\infty = \frac{2 \cdot 6^2 \cdot \sqrt{3}}{5} = \frac{72\sqrt{3}}{5}$)*

**Závěr:** Obvod po třetím kroku je $\frac{128}{3} \text{ cm}$ a celkový obsah v nekonečnu je $\frac{72\sqrt{3}}{5} \text{ cm}^2$.
</details>

---

## 3. Posloupnosti z testu (a jejich varianty)

### Úloha typu 2: Soustavy rovnic u aritmetické a geometrické posloupnosti
Včerejší test obsahoval soustavu:
$$a_2 + a_3 = 60$$
$$a_1 + a_4 = 252$$

> [!WARNING]
> **Pozor na chyták u aritmetické posloupnosti!** Pokud by tato soustava byla zadána pro **aritmetickou posloupnost**, platilo by:
> * $a_2 + a_3 = (a_1 + d) + (a_1 + 2d) = 2a_1 + 3d = 60$
> * $a_1 + a_4 = a_1 + (a_1 + 3d) = 2a_1 + 3d = 252$
>
> Z toho plyne $60 = 252$, což je nesmysl. Pro aritmetickou posloupnost tato soustava **nemá řešení**. Učitelé často dělají chybu při přepisu zadání, tak buď ve střehu!

#### Příklad 3.1: Vyřešení geometrické verze z fotky
Určete první člen $a_1$ a kvocient $q$ geometrické posloupnosti, kde platí:
$$a_2 + a_3 = 60$$
$$a_1 + a_4 = 252$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Vyjádříme jednotlivé členy pomocí $a_1$ a $q$:
1. $a_1 q + a_1 q^2 = 60 \implies a_1 q(1 + q) = 60$
2. $a_1 + a_1 q^3 = 252 \implies a_1 (1 + q^3) = 252$

Použijeme rozklad pro součet třetích mocnin: $1 + q^3 = (1 + q)(1 - q + q^2)$. Druhou rovnici přepíšeme jako:
$$a_1 (1 + q)(1 - q + q^2) = 252$$

Podělíme druhou rovnici první rovnicí (za předpokladu $a_1 \neq 0$, $q \neq 0$ a $q \neq -1$):
$$\frac{a_1 (1+q)(1-q+q^2)}{a_1 q(1+q)} = \frac{252}{60}$$
$$\frac{1 - q + q^2}{q} = \frac{21}{5}$$

Vynásobíme křížem:
$$5(1 - q + q^2) = 21q$$
$$5q^2 - 5q + 5 = 21q$$
$$5q^2 - 26q + 5 = 0$$

Vyřešíme kvadratickou rovnici pro $q$:
$$D = (-26)^2 - 4 \cdot 5 \cdot 5 = 676 - 100 = 576 = 24^2$$
$$q_{1,2} = \frac{26 \pm 24}{10}$$
* **Možnost A:** $q_1 = 5$
* **Možnost B:** $q_2 = \frac{2}{10} = \frac{1}{5}$

Nyní dopočítáme $a_1$ pro obě možnosti dosazením do rovnice $a_1 q(1+q) = 60$:
* **Pro $q_1 = 5$:**
  $$a_1 \cdot 5 \cdot (1 + 5) = 60 \implies 30 a_1 = 60 \implies \mathbf{a_1 = 2}$$
* **Pro $q_2 = \frac{1}{5}$:**
  $$a_1 \cdot \frac{1}{5} \cdot \left(1 + \frac{1}{5}\right) = 60 \implies a_1 \cdot \frac{6}{25} = 60 \implies a_1 = 60 \cdot \frac{25}{6} \implies \mathbf{a_1 = 250}$$

**Závěr:** Zadání vyhovují dvě posloupnosti:
1. $a_1 = 2, q = 5$
2. $a_1 = 250, q = \frac{1}{5}$
</details>

#### Příklad 3.2: Vyřešení korektní aritmetické verze
Určete první člen $a_1$ a diferenci $d$ aritmetické posloupnosti, kde platí:
$$a_2 + a_5 = 22$$
$$a_3 + a_7 = 34$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Vyjádříme členy pomocí $a_1$ a $d$:
1. $(a_1 + d) + (a_1 + 4d) = 22 \implies 2a_1 + 5d = 22$
2. $(a_1 + 2d) + (a_1 + 6d) = 34 \implies 2a_1 + 8d = 34$

Odečteme první rovnici od druhé:
$$(2a_1 + 8d) - (2a_1 + 5d) = 34 - 22$$
$$3d = 12 \implies \mathbf{d = 4}$$

Dosadíme $d = 4$ do první rovnice:
$$2a_1 + 5(4) = 22$$
$$2a_1 + 20 = 22$$
$$2a_1 = 2 \implies \mathbf{a_1 = 1}$$

**Závěr:** Aritmetická posloupnost má první člen $a_1 = 1$ a diferenci $d = 4$.
</details>

---

### Úloha typu 3: Tři po sobě jdoucí členy geometrické posloupnosti
Pro tři po sobě jdoucí členy geometrické posloupnosti $a_1, a_2, a_3$ platí klíčová vlastnost (plynoucí z rovnosti kvocientů $\frac{a_2}{a_1} = \frac{a_3}{a_2}$):
$$a_2^2 = a_1 \cdot a_3$$

#### Příklad 3.3: Vyřešení úlohy 3 z fotky
Určete reálné číslo $x$ tak, aby čísla $a_1, a_2, a_3$ tvořila tři po sobě jdoucí členy geometrické posloupnosti:
$$a_1 = 1$$
$$a_2 = 2^x$$
$$a_3 = 2^{x+2} + 12$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Dosadíme do vztahu $a_2^2 = a_1 \cdot a_3$:
$$(2^x)^2 = 1 \cdot (2^{x+2} + 12)$$
$$2^{2x} = 2^{x} \cdot 2^2 + 12$$
$$2^{2x} = 4 \cdot 2^x + 12$$

Zavedeme substituci $y = 2^x$ (kde musí platit $y > 0$):
$$y^2 = 4y + 12$$
$$y^2 - 4y - 12 = 0$$
$$(y - 6)(y + 2) = 0$$

Kořeny kvadratické rovnice jsou $y_1 = 6$ a $y_2 = -2$.
Vzhledem k podmínce $y > 0$ vyhovuje pouze $y = 6$.

Vrátíme se k substituci:
$$2^x = 6$$

Zlogaritmujeme rovnici (např. o základu 2):
$$x = \log_2(6)$$

Výraz můžeme ještě upravit:
$$x = \log_2(2 \cdot 3) = \log_2(2) + \log_2(3) = \mathbf{1 + \log_2(3)} \approx 2{,}58$$

**Závěr:** Reálné číslo $x = \log_2(6)$ (neboli $1 + \log_2(3)$).
</details>

#### Příklad 3.4: Alternativní variace této úlohy
Určete reálné číslo $x$ tak, aby čísla $a_1 = 2$, $a_2 = 3^x$, $a_3 = 3^{x+1} - 4$ tvořila geometrickou posloupnost.

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Dosadíme do vzorce $a_2^2 = a_1 \cdot a_3$:
$$(3^x)^2 = 2 \cdot (3^{x+1} - 4)$$
$$3^{2x} = 2 \cdot (3 \cdot 3^x - 4)$$
$$3^{2x} = 6 \cdot 3^x - 8$$

Substituce $y = 3^x$ (podmínka $y > 0$):
$$y^2 - 6y + 8 = 0$$
$$(y - 2)(y - 4) = 0$$

Oba kořeny $y_1 = 2$ a $y_2 = 4$ jsou kladné, takže máme dvě řešení:
1. $3^x = 2 \implies \mathbf{x_1 = \log_3(2)}$
2. $3^x = 4 \implies \mathbf{x_2 = \log_3(4)}$

**Závěr:** Úloha má dvě řešení: $x \in \{\log_3(2); \log_3(4)\}$.
</details>

---

### Úloha typu 5: Nekonečný součin převedený na geometrickou řadu
Včerejší test obsahoval nekonečný součin:
$$5 \cdot \sqrt{5} \cdot \sqrt[4]{5} \cdot \sqrt[8]{5} \cdot \dots$$

#### Příklad 3.5: Vyřešení úlohy 5 z fotky
Vypočítejte nekonečný součin:
$$5 \cdot \sqrt{5} \cdot \sqrt[4]{5} \cdot \sqrt[8]{5} \cdot \dots =$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Přepíšeme odmocniny jako mocniny s racionálním exponentem:
$$\sqrt{5} = 5^{\frac{1}{2}}, \quad \sqrt[4]{5} = 5^{\frac{1}{4}}, \quad \sqrt[8]{5} = 5^{\frac{1}{8}}, \quad \dots$$

Celý součin pak můžeme napsat jako:
$$P = 5^1 \cdot 5^{\frac{1}{2}} \cdot 5^{\frac{1}{4}} \cdot 5^{\frac{1}{8}} \cdot \dots$$

Při násobení mocnin se stejným základem sčítáme exponenty:
$$P = 5^{\left(1 + \frac{1}{2} + \frac{1}{4} + \frac{1}{8} + \dots\right)}$$

Exponent tvoří nekonečnou geometrickou řadu:
$$s = 1 + \frac{1}{2} + \frac{1}{4} + \frac{1}{8} + \dots$$
Kde $a_1 = 1$ a kvocient $q = \frac{1}{2}$. Jelikož $|q| < 1$, řada konverguje a její součet je:
$$s = \frac{a_1}{1 - q} = \frac{1}{1 - \frac{1}{2}} = \frac{1}{\frac{1}{2}} = 2$$

Dosadíme součet zpět do exponentu:
$$P = 5^2 = \mathbf{25}$$

*(Využití logaritmu z nápovědy v testu: Pokud zlogaritmujeme součin $P$ o základu 5, dostaneme $\log_5(P) = \log_5(5) + \log_5(5^{1/2}) + \log_5(5^{1/4}) + \dots = 1 + \frac{1}{2} + \frac{1}{4} + \dots = 2$. Odtud rovnou plyne $P = 5^2 = 25$.)*

**Závěr:** Nekonečný součin je roven $25$.
</details>

#### Příklad 3.6: Součet členů aritmetické posloupnosti
V aritmetické posloupnosti je dán první člen $a_1 = 5$ a diference $d = 3$. Kolik prvních členů musíme sečíst, aby byl jejich součet $s_n$ roven $185$?

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Použijeme vzorec pro součet prvních $n$ členů aritmetické posloupnosti:
$$s_n = \frac{n}{2} (a_1 + a_n)$$

Víme, že $a_n = a_1 + (n-1)d$. Dosadíme tento vzorec do rovnice součtu:
$$s_n = \frac{n}{2} \left(2a_1 + (n-1)d\right)$$

Dosadíme známé hodnoty ($s_n = 185$, $a_1 = 5$, $d = 3$):
$$185 = \frac{n}{2} \left(2 \cdot 5 + (n-1) \cdot 3\right)$$
$$185 = \frac{n}{2} \left(10 + 3n - 3\right)$$
$$185 = \frac{n}{2} \left(3n + 7\right)$$

Vynásobíme rovnici dvojkou:
$$370 = n(3n + 7)$$
$$370 = 3n^2 + 7n$$
$$3n^2 + 7n - 370 = 0$$

Vyřešíme kvadratickou rovnici pro $n$:
$$D = b^2 - 4ac = 7^2 - 4 \cdot 3 \cdot (-370) = 49 + 4440 = 4489$$
$$\sqrt{D} = \sqrt{4489} = 67$$
$$n_{1,2} = \frac{-7 \pm 67}{6}$$

* **Kořen 1:** $n_1 = \frac{-7 + 67}{6} = \frac{60}{6} = \mathbf{10}$
* **Kořen 2:** $n_2 = \frac{-7 - 67}{6} = -\frac{74}{6}$ (nevyhovuje, protože počet členů $n$ musí být přirozené číslo).

**Závěr:** Musíme sečíst prvních **10 členů**.
</details>

#### Příklad 3.7: Rovnice s nekonečnou geometrickou řadou
Řešte v oboru reálných čísel $\mathbb{R}$ rovnici:
$$1 + x + x^2 + x^3 + \dots = 3$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Levá strana rovnice představuje nekonečnou geometrickou řadu, kde:
* první člen je $a_1 = 1$,
* kvocient je $q = x$.

Řada konverguje (má konečný součet) právě tehdy, když platí podmínka $|q| < 1$, tedy:
$$x \in (-1; 1)$$

Pokud je tato podmínka splněna, pak součet řady je:
$$s = \frac{a_1}{1 - q} = \frac{1}{1 - x}$$

Dosadíme tento součet do původní rovnice:
$$\frac{1}{1 - x} = 3$$

Vynásobíme jmenovatelem $(1-x)$, kde $x \neq 1$:
$$1 = 3(1 - x)$$
$$1 = 3 - 3x$$
$$3x = 2 \implies \mathbf{x = \frac{2}{3}}$$

Jelikož hodnota $\frac{2}{3}$ spadá do intervalu konvergence $(-1; 1)$, je toto číslo platným řešením.

**Závěr:** Řešením rovnice je $x = \frac{2}{3}$.
</details>

#### Příklad 3.8: Geometrická posloupnost v praxi (množení bakterií)
Bakteriální kultura se zdvojnásobí každých 20 minut. Na začátku pokusu je v kultuře přítomno $1\ 000$ bakterií. Kolik bakterií bude v kultuře po 3 hodinách?

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
* Celkový čas: $3 \text{ hodiny} = 180 \text{ minut}$.
* Interval zdvojení: $20 \text{ minut}$.
* Počet cyklů zdvojení: $n = \frac{180}{20} = 9$ cyklů.

Jedná se o geometrickou posloupnost, kde:
* Počáteční stav (čas 0): $N_0 = 1\ 000$
* Kvocient: $q = 2$ (množství se zdvojnásobuje)
* Po $n$ cyklech je počet bakterií dán vztahem:
  $$N_n = N_0 \cdot q^n$$

Dosadíme $N_0 = 1\ 000$, $q = 2$ a $n = 9$:
$$N_9 = 1\ 000 \cdot 2^9 = 1\ 000 \cdot 512 = \mathbf{512\ 000}$$

**Závěr:** Po 3 hodinách bude v kultuře $512\ 000$ bakterií.
</details>

---

## 4. Slovní úlohy & Finanční matematika

U slovních úloh na úročení nebo úbytek hodnoty používáme vzorec pro složené úročení / geometrický růst (úbytek):
$$K_n = K_0 \cdot (1 \pm i)^n$$
* $K_0$ je počáteční hodnota (jistina, intenzita, atd.).
* $i$ je úroková sazba nebo procento změny vyjádřené jako desetinné číslo (např. $5\% = 0{,}05$).
* Znaménko $+$ platí pro růst (úročení), $-$ pro pokles (absorpce světla, inflace).
* $n$ je počet období (počet desek, let, měsíců).

### Cvičné příklady

#### Příklad 4.1: Absorpce světla (úloha 4 z fotky)
Při průchodu světla jednou skleněnou deskou ztratí světlo $5\%$ své intenzity. Jaký nejmenší počet desek je potřeba za sebe postavit, aby se intenzita procházejícího světla snížila alespoň na polovinu původní hodnoty?

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
* Počáteční intenzita je $I_0$.
* Po průchodu $n$ deskami je intenzita $I_n = I_0 \cdot (1 - 0{,}05)^n = I_0 \cdot (0{,}95)^n$.
* Chceme, aby se intenzita snížila alespoň na polovinu, tj. $I_n \le 0{,}5 \cdot I_0$.

Sestavíme nerovnici:
$$I_0 \cdot (0{,}95)^n \le 0{,}5 \cdot I_0$$
Dividujeme $I_0$ (intenzita je kladná, směr nerovnosti se nemění):
$$(0{,}95)^n \le 0{,}5$$

Zlogaritmujeme obě strany rovnice (např. přirozeným logaritmem $\ln$):
$$\ln\left((0{,}95)^n\right) \le \ln(0{,}5)$$
$$n \cdot \ln(0{,}95) \le \ln(0{,}5)$$

Protože $\ln(0{,}95) \approx -0{,}0513$ je **záporné číslo**, při dělení tímto číslem se **otočí znaménko nerovnosti**:
$$n \ge \frac{\ln(0{,}5)}{\ln(0{,}95)}$$
$$n \ge \frac{-0{,}6931}{-0{,}0513} \approx 13{,}51$$

Jelikož počet desek musí být celé číslo, zaokrouhlujeme nahoru.

**Závěr:** Je potřeba za sebe postavit nejméně **14 desek**.
</details>

#### Příklad 4.2: Kamarád lichvář (složené úročení)
Tvůj kamarád lichvář ti nabízí rychlou půjčku s úrokem $8\%$ měsíčně s tím, že se úroky každý měsíc připisují k dlužné částce (složené úročení). Pokud si od něj půjčíš $10\ 000 \text{ Kč}$ a nic v průběhu nesplácíš, za kolik celých měsíců budeš dlužit více než dvojnásobek půjčené částky?

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
* Počáteční dlužná částka: $K_0 = 10\ 000 \text{ Kč}$
* Cílová částka: $K_n > 20\ 000 \text{ Kč}$ (dvojnásobek)
* Úroková sazba za měsíc: $i = 8\% = 0{,}08$

Použijeme vzorec $K_n = K_0 \cdot (1 + i)^n$:
$$10\ 000 \cdot (1{,}08)^n > 20\ 000$$
$$(1{,}08)^n > 2$$

Zlogaritmujeme:
$$n \cdot \ln(1{,}08) > \ln(2)$$

Protože $\ln(1{,}08) \approx 0{,}0770$ je kladné číslo, směr nerovnosti zůstává:
$$n > \frac{\ln(2)}{\ln(1{,}08)}$$
$$n > \frac{0{,}6931}{0{,}0770} \approx 9{,}01$$

Jelikož se ptáme na celé měsíce a dluh musí být **větší** než dvojnásobek, musíme vzít nejbližší větší celé číslo. Po 9 měsících bude dluh těsně pod dvojnásobkem ($10000 \cdot 1.08^9 \approx 19990 \text{ Kč}$). Až v 10. měsíci překročí dvojnásobek.

**Závěr:** Více než dvojnásobek budeš dlužit za **10 měsíců**.
</details>

#### Příklad 4.3: Nehtové studio (pravidelné spoření)
Pro otevření nehtového studia potřebuješ počáteční kapitál $150\ 000 \text{ Kč}$. Rozhodneš se pravidelně na začátku každého měsíce ukládat na spořicí účet částku $4\ 000 \text{ Kč}$. Účet je úročen roční úrokovou sazbou $6\%$ s měsíčním připisováním úroků. Daň z úroků zanedbej. Za jak dlouho naspoříš potřebnou částku?

*Nápověda k úrokové sazbě:* Měsíční úroková sazba je $i_{m} = \frac{0{,}06}{12} = 0{,}005$ (tj. $0{,}5\%$ měsíčně).
*Nápověda ke spoření na začátku období:* Celková naspořená částka po $n$ měsících je dána součtem geometrické řady:
$$S_n = X \cdot (1 + i_m) \cdot \frac{(1 + i_m)^n - 1}{i_m}$$
kde $X$ je pravidelný měsíční vklad.

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
* $S_n \ge 150\ 000 \text{ Kč}$
* $X = 4\ 000 \text{ Kč}$
* $i_m = 0{,}005$
* $1 + i_m = 1{,}005$

Dosadíme do vzorce:
$$150\ 000 \le 4\ 000 \cdot 1{,}005 \cdot \frac{1{,}005^n - 1}{0{,}005}$$
$$150\ 000 \le 4\ 020 \cdot \frac{1{,}005^n - 1}{0{,}005}$$

Podělíme obě strany $4\ 020$:
$$37{,}313 \le \frac{1{,}005^n - 1}{0{,}005}$$

Vynásobíme $0{,}005$:
$$0{,}1866 \le 1{,}005^n - 1$$
$$1{,}1866 \le 1{,}005^n$$

Zlogaritmujeme obě strany:
$$\ln(1{,}1866) \le n \cdot \ln(1{,}005)$$
$$n \ge \frac{\ln(1{,}1866)}{\ln(1{,}005)} \approx \frac{0{,}1711}{0{,}004988} \approx 34{,}3$$

Zaokrouhlíme nahoru na celé měsíce.

**Závěr:** Potřebný kapitál naspoříš za **35 měsíců** (necelé 3 roky).
</details>

---

## Rychlý checklist před písemkou:
- [ ] Umím spočítat limitu podílu polynomů (porovnáním stupňů a vytknutím).
- [ ] Umím usměrnit limitu typu $\infty - \infty$ obsahující odmocniny.
- [ ] Pamatuji si, že obvod Kochovy vločky jde k $\infty$ a obsah k $\frac{8}{5} S_0$.
- [ ] Vím, že pro tři po sobě jdoucí členy GP platí $a_2^2 = a_1 \cdot a_3$ a umím použít substituci.
- [ ] Nezapomenu otočit znaménko nerovnice, pokud dělím záporným logaritmem (např. $\ln(0{,}95)$).
- [ ] Chápu rozdíl mezi jednoduchým úročením ($K_n = K_0(1+n \cdot i)$) a složeným úročením ($K_n = K_0(1+i)^n$).

Hodně štěstí u čtvrtletky! 🍀

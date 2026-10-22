# Příprava na čtvrtletní písemnou práci z matematiky - Příklady

Příklady obsahují skryté řešení. Nejdříve si příklad spočítej sám/sama a poté si zkontroluj výsledek kliknutím na **Zobrazit řešení**. 
Teoretický základ k těmto příkladům nalezneš v souboru `priprava_na_ctvrtletku_teorie.md`.

---

## 1. Limity posloupností

#### Příklad 1.1: Racionální lomená funkce
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

#### Příklad 1.6: Limita s rozdílem kubických polynomů
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{(2n - 1)^3}{(4n - 1)^2 (1 - 5n)}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
V čitateli i jmenovateli je nejvyšší mocninou $n^3$. Místo roznásobování celých závorek stačí zjistit koeficienty u $n^3$.
Čitatel: $(2n)^3 = 8n^3 \dots$
Jmenovatel: $(4n)^2 \cdot (-5n) = 16n^2 \cdot (-5n) = -80n^3 \dots$

Podělíme čitatel i jmenovatel $n^3$:
$$\lim_{n \to \infty} \frac{\frac{(2n - 1)^3}{n^3}}{\frac{(4n - 1)^2}{n^2} \cdot \frac{1 - 5n}{n}} = \lim_{n \to \infty} \frac{\left(2 - \frac{1}{n}\right)^3}{\left(4 - \frac{1}{n}\right)^2 \left(\frac{1}{n} - 5\right)}$$

Po dosazení $n \to \infty$:
$$\frac{2^3}{4^2 \cdot (-5)} = \frac{8}{16 \cdot (-5)} = \frac{8}{-80} = \mathbf{-\frac{1}{10}}$$

**Závěr:** Limita je $-\frac{1}{10}$.
</details>

#### Příklad 1.7: Složitější rozdíl odmocnin
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \left(\sqrt{n^2 + 3n - 1} - \sqrt{n^2 - n + 2}\right)$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Výraz typu $\infty - \infty$. Usměrníme zlomkem:
$$\lim_{n \to \infty} \frac{(n^2 + 3n - 1) - (n^2 - n + 2)}{\sqrt{n^2 + 3n - 1} + \sqrt{n^2 - n + 2}}$$
$$\lim_{n \to \infty} \frac{4n - 3}{\sqrt{n^2(1 + \frac{3}{n} - \frac{1}{n^2})} + \sqrt{n^2(1 - \frac{1}{n} + \frac{2}{n^2})}}$$

Vytkneme $n$ z odmocnin a pokrátíme:
$$\lim_{n \to \infty} \frac{n(4 - \frac{3}{n})}{n \left( \sqrt{1 + \dots} + \sqrt{1 - \dots} \right)} = \frac{4}{1 + 1} = \mathbf{2}$$

**Závěr:** Limita je $2$.
</details>

#### Příklad 1.8: Limita složená ze sumy aritmetické posloupnosti
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{1 + 2 + 3 + \dots + n}{n^2 + 3}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Čitatel je součet prvních $n$ členů aritmetické posloupnosti. Víme, že $1 + 2 + \dots + n = \frac{n(n+1)}{2}$.
Dosadíme do limity:
$$\lim_{n \to \infty} \frac{\frac{n(n+1)}{2}}{n^2 + 3} = \lim_{n \to \infty} \frac{n^2 + n}{2(n^2 + 3)} = \lim_{n \to \infty} \frac{n^2 + n}{2n^2 + 6}$$

Podělíme $n^2$:
$$\lim_{n \to \infty} \frac{1 + \frac{1}{n}}{2 + \frac{6}{n^2}} = \mathbf{\frac{1}{2}}$$

**Závěr:** Limita je $\frac{1}{2}$.
</details>

#### Příklad 1.9: Limita s exponenciálními členy (jiný poměr)
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{3 \cdot 7^n - 2 \cdot 5^{n+1}}{4 \cdot 7^{n-1} + 6^n}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Nejrychleji rostoucím členem je zde $7^n$. Upravíme výrazy, abychom lépe viděli koeficienty u $7^n$:
* $5^{n+1} = 5 \cdot 5^n$
* $7^{n-1} = \frac{1}{7} \cdot 7^n$

Dosadíme do zadání:
$$\lim_{n \to \infty} \frac{3 \cdot 7^n - 10 \cdot 5^n}{\frac{4}{7} \cdot 7^n + 6^n}$$

Podělíme čitatel i jmenovatel nejrychleji rostoucím členem, tedy $7^n$:
$$\lim_{n \to \infty} \frac{3 - 10 \cdot \left(\frac{5}{7}\right)^n}{\frac{4}{7} + \left(\frac{6}{7}\right)^n}$$

Protože $\frac{5}{7} < 1$ a $\frac{6}{7} < 1$, platí $\lim_{n\to\infty} \left(\frac{5}{7}\right)^n = 0$ a $\lim_{n\to\infty} \left(\frac{6}{7}\right)^n = 0$.

Dostáváme:
$$\frac{3 - 10 \cdot 0}{\frac{4}{7} + 0} = \frac{3}{\frac{4}{7}} = \frac{21}{4}$$

**Závěr:** Limita je $\frac{21}{4}$.
</details>

#### Příklad 1.10: Limita s exponenciálními členy a různými základy
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{2^{2n+1} - 3^{n+2}}{4^n + 5 \cdot 3^{n-1}}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Nejprve upravíme mocniny tak, abychom měli všude pouze mocniny na $n$:
* $2^{2n+1} = 2^1 \cdot (2^2)^n = 2 \cdot 4^n$
* $3^{n+2} = 3^2 \cdot 3^n = 9 \cdot 3^n$
* $3^{n-1} = \frac{1}{3} \cdot 3^n$

Dosadíme do limity:
$$\lim_{n \to \infty} \frac{2 \cdot 4^n - 9 \cdot 3^n}{4^n + \frac{5}{3} \cdot 3^n}$$

Nyní vidíme, že nejrychleji rostoucí člen je $4^n$. Podělíme jím čitatel i jmenovatel:
$$\lim_{n \to \infty} \frac{2 - 9 \cdot \left(\frac{3}{4}\right)^n}{1 + \frac{5}{3} \cdot \left(\frac{3}{4}\right)^n}$$

Jelikož $\frac{3}{4} < 1$, členy s $\left(\frac{3}{4}\right)^n$ jdou k nule:
$$\frac{2 - 9 \cdot 0}{1 + \frac{5}{3} \cdot 0} = \mathbf{2}$$

**Závěr:** Limita je $2$.
</details>

#### Příklad 1.11: Limita zlomku s odmocninami
Určete limitu posloupnosti:
$$\lim_{n \to \infty} \frac{\sqrt{4n^2 - n} + 3n}{2n + \sqrt{n^2 + 1}}$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Nejvyšší mocnina ve jmenovateli se chová jako $n$ (protože $\sqrt{n^2} = n$). Podělíme čitatel i jmenovatel výrazem $n$:
$$\lim_{n \to \infty} \frac{\frac{\sqrt{4n^2 - n}}{n} + \frac{3n}{n}}{\frac{2n}{n} + \frac{\sqrt{n^2 + 1}}{n}}$$

Vtáhneme $n$ pod odmocniny jako $n^2$:
$$\lim_{n \to \infty} \frac{\sqrt{\frac{4n^2 - n}{n^2}} + 3}{2 + \sqrt{\frac{n^2 + 1}{n^2}}} = \lim_{n \to \infty} \frac{\sqrt{4 - \frac{1}{n}} + 3}{2 + \sqrt{1 + \frac{1}{n^2}}}$$

Pro $n \to \infty$ platí $\frac{1}{n} \to 0$ a $\frac{1}{n^2} \to 0$:
$$\frac{\sqrt{4 - 0} + 3}{2 + \sqrt{1 + 0}} = \frac{2 + 3}{2 + 1} = \mathbf{\frac{5}{3}}$$

**Závěr:** Limita je $\frac{5}{3}$.
</details>

---

## 2. Kochova vločka

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

## 3. Posloupnosti

#### Příklad 3.1: Vyřešení geometrické posloupnosti
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

#### Příklad 3.2: Vyřešení korektní aritmetické posloupnosti
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

#### Příklad 3.3: Tři po sobě jdoucí členy geometrické posloupnosti
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

#### Příklad 3.4: Alternativní variace na parametr v GP
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

#### Příklad 3.5: Nekonečný součin převedený na geometrickou řadu
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

#### Příklad 3.9: Parametr pro aritmetickou posloupnost
Určete reálné číslo $x$ tak, aby čísla $a_1 = x^2 - 1$, $a_2 = x^2 + x$, $a_3 = 2x^2 + x - 2$ tvořila tři po sobě jdoucí členy aritmetické posloupnosti.

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Pro tři po sobě jdoucí členy aritmetické posloupnosti platí, že rozdíl mezi nimi je konstantní (diference $d$):
$$a_2 - a_1 = a_3 - a_2 \implies 2a_2 = a_1 + a_3$$

Dosadíme:
$$2(x^2 + x) = (x^2 - 1) + (2x^2 + x - 2)$$
$$2x^2 + 2x = 3x^2 + x - 3$$
$$x^2 - x - 3 = 0$$

Spočítáme diskriminant a kořeny:
$$D = (-1)^2 - 4(1)(-3) = 1 + 12 = 13$$
$$x_{1,2} = \frac{1 \pm \sqrt{13}}{2}$$

**Závěr:** Úloha má dvě řešení: $x = \frac{1 \pm \sqrt{13}}{2}$.
</details>

#### Příklad 3.10: Součet nekonečné geometrické řady
Vypočtěte součet nekonečné řady:
$$\frac{1}{3} - \frac{1}{6} + \frac{1}{12} - \frac{1}{24} + \dots$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Jedná se o nekonečnou geometrickou řadu.
První člen: $a_1 = \frac{1}{3}$.
Kvocient zjistíme podílem druhého a prvního členu: $q = \frac{-\frac{1}{6}}{\frac{1}{3}} = -\frac{1}{6} \cdot 3 = -\frac{1}{2}$.

Protože $|q| = \left|-\frac{1}{2}\right| = \frac{1}{2} < 1$, řada konverguje a můžeme použít vzorec pro součet:
$$s = \frac{a_1}{1 - q}$$

Dosadíme:
$$s = \frac{\frac{1}{3}}{1 - \left(-\frac{1}{2}\right)} = \frac{\frac{1}{3}}{1 + \frac{1}{2}} = \frac{\frac{1}{3}}{\frac{3}{2}} = \frac{1}{3} \cdot \frac{2}{3} = \mathbf{\frac{2}{9}}$$

**Závěr:** Součet řady je $\frac{2}{9}$.
</details>


#### Příklad 3.11: Soustava rovnic pro geometrickou posloupnost (vytýkání)
Určete první člen $a_1$ a kvocient $q$ geometrické posloupnosti, pro kterou platí:
$$a_1 - a_2 + a_3 = 9$$
$$a_4 - a_5 + a_6 = 72$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Vyjádříme všechny členy pomocí $a_1$ a $q$:
1. $a_1 - a_1 q + a_1 q^2 = 9 \implies a_1 (1 - q + q^2) = 9$
2. $a_1 q^3 - a_1 q^4 + a_1 q^5 = 72 \implies a_1 q^3 (1 - q + q^2) = 72$

Podělíme druhou rovnici první rovnicí:
$$\frac{a_1 q^3 (1 - q + q^2)}{a_1 (1 - q + q^2)} = \frac{72}{9}$$

Po zkrácení $a_1$ a závorky dostaneme přímo $q$:
$$q^3 = 8 \implies \mathbf{q = 2}$$

Nyní dosadíme $q = 2$ do upravené první rovnice:
$$a_1 (1 - 2 + 2^2) = 9$$
$$a_1 (1 - 2 + 4) = 9$$
$$3a_1 = 9 \implies \mathbf{a_1 = 3}$$

**Závěr:** Posloupnost má první člen $a_1 = 3$ a kvocient $q = 2$.
</details>

#### Příklad 3.12: Soustava rovnic pro aritmetickou posloupnost
Určete první člen $a_1$ a diferenci $d$ aritmetické posloupnosti, kde platí:
$$a_2 + a_4 = 22$$
$$a_6 - a_4 = 6$$

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Převedeme vše na $a_1$ a $d$:
1. $(a_1 + d) + (a_1 + 3d) = 22 \implies 2a_1 + 4d = 22$ (neboli $a_1 + 2d = 11$)
2. $(a_1 + 5d) - (a_1 + 3d) = 6 \implies 2d = 6$

Z druhé rovnice okamžitě vidíme:
$$2d = 6 \implies \mathbf{d = 3}$$

Dosadíme $d = 3$ do zjednodušené první rovnice:
$$a_1 + 2(3) = 11$$
$$a_1 + 6 = 11 \implies \mathbf{a_1 = 5}$$

*(Poznámka: Mohli jsme si také uvědomit, že z vlastnosti aritmetického průměru $a_2 + a_4 = 2a_3$, takže $2a_3 = 22 \implies a_3 = 11$. Stejně tak $a_6 - a_4$ jsou přesně $2d$.)*

**Závěr:** Aritmetická posloupnost má první člen $a_1 = 5$ a diferenci $d = 3$.
</details>

#### Příklad 3.13: Parametr $x$ v geometrické posloupnosti se substitucí
Určete reálné číslo $x$ tak, aby čísla $a_1 = 3$, $a_2 = 3^x - 2$, $a_3 = 3^{x+1} + 6$ tvořila tři po sobě jdoucí členy geometrické posloupnosti.

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Dosadíme do vztahu $a_2^2 = a_1 \cdot a_3$:
$$(3^x - 2)^2 = 3 \cdot (3^{x+1} + 6)$$

Pravou stranu upravíme:
$3 \cdot (3 \cdot 3^x + 6) = 9 \cdot 3^x + 18$

Nyní zavedeme substituci $y = 3^x$ (kde $y > 0$) do rovnice:
$$(y - 2)^2 = 9y + 18$$
$$y^2 - 4y + 4 = 9y + 18$$
$$y^2 - 13y - 14 = 0$$

Rozložíme na součin:
$$(y - 14)(y + 1) = 0$$

Máme dva kořeny: $y_1 = 14$ a $y_2 = -1$.
Protože exponenciální funkce musí být kladná ($3^x > 0$), vyhovuje pouze $y = 14$.

Vrátíme se k substituci:
$$3^x = 14 \implies \mathbf{x = \log_3(14)}$$

**Závěr:** Reálné číslo $x$ je $\log_3(14)$.
</details>

#### Příklad 3.14: Parametr $x$ v aritmetické posloupnosti s logaritmy
Určete reálné číslo $x$ tak, aby čísla $a_1 = \log(x-1)$, $a_2 = \log(x+1)$, $a_3 = \log(2x-1)$ tvořila tři po sobě jdoucí členy aritmetické posloupnosti. Dekadický logaritmus značíme jako $\log$.

<details>
<summary>Zobrazit řešení</summary>

**Postup:**
Pro tři po sobě jdoucí členy aritmetické posloupnosti platí $2a_2 = a_1 + a_3$. Dosadíme:
$$2\log(x+1) = \log(x-1) + \log(2x-1)$$

Použijeme věty o logaritmech ($2\log(A) = \log(A^2)$ a $\log(A) + \log(B) = \log(A \cdot B)$):
$$\log\left((x+1)^2\right) = \log\left((x-1)(2x-1)\right)$$

Protože logaritmus je prostá funkce, můžeme odlogaritmovat:
$$(x+1)^2 = (x-1)(2x-1)$$
$$x^2 + 2x + 1 = 2x^2 - 3x + 1$$

Převedeme vše na jednu stranu:
$$0 = x^2 - 5x$$
$$0 = x(x - 5)$$

Možná řešení jsou $x_1 = 0$ a $x_2 = 5$.
Musíme ale ověřit podmínky logaritmu (argument musí být kladný, tj. $x-1 > 0 \implies x > 1$). 
Pro $x = 0$ vychází $\log(-1)$, což není definované. Vyhovuje tedy pouze $x = 5$.

**Závěr:** Jediné platné řešení je $x = 5$.
</details>

---

## 4. Slovní úlohy & Finanční matematika

#### Příklad 4.1: Absorpce světla
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

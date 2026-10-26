# Statistika a testování hypotéz

## Obsah

- [[#1. Základní charakteristiky jednorozměrného souboru|1. Základní charakteristiky jednorozměrného souboru]]
  - [[#1.1 Míry polohy (střední hodnoty)|1.1 Míry polohy (střední hodnoty)]]
  - [[#1.2 Míry variability (rozptýlenosti)|1.2 Míry variability (rozptýlenosti)]]
  - [[#1.3 Kvartily a detekce odlehlých hodnot (Boxplot)|1.3 Kvartily a detekce odlehlých hodnot (Boxplot)]]
  - [[#1.4 Míry tvaru rozdělení|1.4 Míry tvaru rozdělení]]
    - [[#Šikmost (Skewness) $a$|Šikmost (Skewness) $a$]]
    - [[#Špičatost (Kurtosis / Koeficient excesu) $b$|Špičatost (Kurtosis / Koeficient excesu) $b$]]
  - [[#1.5 Třídění spojitých dat do intervalů|1.5 Třídění spojitých dat do intervalů]]
    - [[#Počet intervalů (tříd) $k$|Počet intervalů (tříd) $k$]]
    - [[#Šířka intervalu $h$|Šířka intervalu $h$]]
- [[#2. Dvourozměrný statistický soubor (Korelace a regrese)|2. Dvourozměrný statistický soubor (Korelace a regrese)]]
  - [[#2.1 Pearsonův korelační koeficient ($r$)|2.1 Pearsonův korelační koeficient ($r$)]]
  - [[#2.2 Lineární regrese|2.2 Lineární regrese]]
  - [[#2.3 Spearmanův koeficient pořadové korelace ($r_s$)|2.3 Spearmanův koeficient pořadové korelace ($r_s$)]]
    - [[#Postup výpočtu:|Postup výpočtu:]]
- [[#3. Testování hypotéz – Párové pokusy|3. Testování hypotéz – Párové pokusy]]
  - [[#3.1 Wilcoxonův test pro párové pokusy (Wilcoxon Signed-Rank Test)|3.1 Wilcoxonův test pro párové pokusy (Wilcoxon Signed-Rank Test)]]
    - [[#Algoritmus výpočtu:|Algoritmus výpočtu:]]
    - [[#Příklad z předlohy ($n = 8$ pacientů, antibiotikum A vs B):|Příklad z předlohy ($n = 8$ pacientů, antibiotikum A vs B):]]
  - [[#3.2 Znaménkový test (Sign Test)|3.2 Znaménkový test (Sign Test)]]
- [[#4. Testy dobré shody a analýza závislostí ($\chi^2$ testy)|4. Testy dobré shody a analýza závislostí ($\chi^2$ testy)]]
  - [[#4.1 Kontingenční tabulky (Test nezávislosti dvou kvalitativních znaků)|4.1 Kontingenční tabulky (Test nezávislosti dvou kvalitativních znaků)]]
    - [[#Míry síly závislosti (asociace) v kontingenční tabulce:|Míry síly závislosti (asociace) v kontingenční tabulce:]]
  - [[#4.2 Pearsonův test dobré shody (Goodness-of-Fit / Test normality a rozdělení)|4.2 Pearsonův test dobré shody (Goodness-of-Fit / Test normality a rozdělení)]]
    - [[#Teoretická distribuční funkce $F(x)$:|Teoretická distribuční funkce $F(x)$:]]
    - [[#Postup výpočtu:|Postup výpočtu:]]
    - [[#Příklad z předlohy (Počet kliků náhodně vybraných žáků, $n = 70$):|Příklad z předlohy (Počet kliků náhodně vybraných žáků, $n = 70$):]]
- [[#5. Rychlý tahák funkcí v LibreOffice Calc / MS Excel|5. Rychlý tahák funkcí v LibreOffice Calc / MS Excel]]

## 1. Základní charakteristiky jednorozměrného souboru

### 1.1 Míry polohy (střední hodnoty)

* **Modus ($\hat{x}$):** Hodnota s nejvyšší četností výskytu v souboru.
* **Medián ($\tilde{x}$ neboli $x_{0{,}50}$):** Prostřední hodnota uspořádaného souboru (50. percentil). Rozděluje soubor na dvě stejně početné poloviny. Neovlivňují ho extrémní hodnoty.
* **Aritmetický průměr ($\bar{x}$):**
  $$\bar{x} = \frac{1}{n}\sum_{i=1}^{n} x_i$$
* **Geometrický průměr ($\bar{x}_G$):**
  $$\bar{x}_G = \sqrt[n]{\prod_{i=1}^{n} x_i} = \sqrt[n]{x_1 \cdot x_2 \cdots x_n}$$
  *Využití:* Růstové koeficienty, indexy, relativní změny v čase, veličiny násobného charakteru. Všechna $x_i$ musí být kladná.
* **Harmonický průměr ($\bar{x}_H$):**
  $$\bar{x}_H = \frac{n}{\sum_{i=1}^{n} \frac{1}{x_i}}$$
  *Využití:* Průměr veličin vyjádřených poměrem při stejné bázi čitatele (např. průměrná rychlost na stejně dlouhých úsecích, průměrná produktivita práce při stejném objemu práce).

---

### 1.2 Míry variability (rozptýlenosti)

* **Rozptyl ($s_x^2$):**
  $$s_x^2 = \frac{1}{n}\sum_{i=1}^{n} (x_i - \bar{x})^2 = \overline{x^2} - (\bar{x})^2$$
  kde $\overline{x^2} = \frac{1}{n}\sum_{i=1}^n x_i^2$.
  *(Poznámka: Pro výběrový nestranný odhad rozptylu základního souboru se dělí $n - 1$).*
* **Směrodatná odchylka ($s_x$):**
  $$s_x = \sqrt{s_x^2} = \sqrt{\frac{1}{n}\sum_{i=1}^{n} (x_i - \bar{x})^2}$$
* **Kovariance ($s_{xy}$):**
  Míra lineární vazby mezi dvěma proměnnými $x$ a $y$:
  $$s_{xy} = \frac{1}{n}\sum_{i=1}^{n} (x_i - \bar{x})(y_i - \bar{y}) = \overline{xy} - \bar{x} \cdot \bar{y}$$
  kde $\overline{xy} = \frac{1}{n}\sum_{i=1}^n x_i y_i$.

---

### 1.3 Kvartily a detekce odlehlých hodnot (Boxplot)

* **Kvartily:**
  * Dolní kvartil: $Q_1 = x_{0{,}25}$ (25 % hodnot leží pod $Q_1$)
  * Medián: $Q_2 = x_{0{,}50}$ (50 % hodnot)
  * Horní kvartil: $Q_3 = x_{0{,}75}$ (75 % hodnot leží pod $Q_3$)
* **Mezikvartilové rozpětí ($\text{IQR}$):**
  $$\text{IQR} = Q_3 - Q_1 = x_{0{,}75} - x_{0{,}25}$$
* **Odlehlé hodnoty (vnitřní hradby / vousy grafu):**
  * Dolní odlehlá hodnota:
    $$\text{doh} = x_{0{,}25} - 1{,}5 \cdot \text{IQR}$$
  * Horní odlehlá hodnota:
    $$\text{hoh} = x_{0{,}75} + 1{,}5 \cdot \text{IQR}$$
  * Mezi těmito mezemi leží přibližně $99\,\%$ dat ($99{,}3\,\%$ pro normální rozdělení).
* **Extrémní hodnoty (vnější hradby):**
  * Dolní extrémní hodnota:
    $$\text{Deh} = x_{0{,}25} - 3 \cdot \text{IQR}$$
  * Horní extrémní hodnota:
    $$\text{Heh} = x_{0{,}75} + 3 \cdot \text{IQR}$$
  * Mezi těmito mezemi leží přibližně $99{,}9\,\%$ dat. Vše vně je hrubá chyba či anomálie.

---

### 1.4 Míry tvaru rozdělení

#### Šikmost (Skewness) $a$
Měří asymetrii rozdělení četností kolem střední hodnoty:
$$a = \frac{\sum_{i=1}^{n} (x_i - \bar{x})^3}{n \cdot s^3} = \frac{\overline{x^3} - 3 \cdot \bar{x} \cdot \overline{x^2} + 2 \cdot (\bar{x})^3}{s^3}$$

* **$a > 0$ (Kladná šikmost / zešikmení doprava):** Delší pravý chvost. Většina hodnot je soustředěna vlevo (nižší hodnoty). Platí: $\hat{x} < \tilde{x} < \bar{x}$.
* **$a = 0$ (Symetrické rozdělení):** Hodnoty jsou rovnoměrně rozděleny kolem středu. Platí: $\hat{x} \approx \tilde{x} \approx \bar{x}$.
* **$a < 0$ (Záporná šikmost / zešikmení doleva):** Delší levý chvost. Většina hodnot je vpravo (vyšší hodnoty). Platí: $\bar{x} < \tilde{x} < \hat{x}$.

#### Špičatost (Kurtosis / Koeficient excesu) $b$
Měří koncentraci dat kolem středu v porovnání s normálním rozdělením:
$$b = \frac{\sum_{i=1}^{n} (x_i - \bar{x})^4}{n \cdot s^4} - 3$$
*(Konstanta $-3$ normalizuje míru tak, aby Gaussovo normální rozdělení mělo hodnotu $0$)*.

* **$b > 0$ (Leptokurtické / špičaté):** Výrazný vrchol, data jsou silně koncentrovaná kolem středu, těžší chvosty.
* **$b = 0$ (Mezokurtické / normální):** Odpovídá normálnímu rozdělení.
* **$b < 0$ (Platykurtické / ploché):** Plochý vrchol, hodnoty jsou více rozptýlené do šířky, lehké chvosty.

---

### 1.5 Třídění spojitých dat do intervalů

#### Počet intervalů (tříd) $k$
* **Sturgesovo pravidlo:**
  $$k = 1 + \log_2(n) \approx 1 + 3{,}322 \cdot \log_{10}(n)$$
* **Doaneovo pravidlo** (bere v úvahu asymetrii dat):
  $$k = 1 + \ln(n) + \ln\left(1 + |a| \cdot \sqrt{\frac{n}{6}}\right)$$
  *(Pozn.: Na předloze je ve vzorci parametr označen jako $b$, jedná se o korekci na šikmost).*

#### Šířka intervalu $h$
* **Scottovo pravidlo** (vhodné pro $n < 200$):
  $$h = \frac{3{,}5 \cdot s}{\sqrt[3]{n}}$$
* **Freedmanovo a Diaconisovo pravidlo** (robustní vůči odlehlým hodnotám, vhodné pro $n > 200$):
  $$h = \frac{2 \cdot \text{IQR}}{\sqrt[3]{n}}$$

---

## 2. Dvourozměrný statistický soubor (Korelace a regrese)

> [!WARNING]
> **Pozor na zdánlivou (falešnou) korelaci!**
> Korelace neimplikuje kauzalitu (příčinnou souvislost). Vysoká statistická závislost bývá často způsobena skrytou třetí proměnnou (confounding factor) nebo náhodnou shodou trendů v čase:
> * *„Čím větší dovoz pomerančů, tím větší počet úmrtí na rakovinu.“* (Společný faktor: růst populace a délky dožití).
> * *„Čím více kostelů ve městě, tím větší počet vražd.“* (Společný faktor: velikost města / počet obyvatel).
> * *„Více lidí umírá v nemocnici než na ulici.“* (Nemocnice koncentrují těžce nemocné lidi, nevytvářejí primárně úmrtí).

---

### 2.1 Pearsonův korelační koeficient ($r$)
Vyjadřuje sílu a směr **vzájemné lineární závislosti** dvou spojitých veličin:

$$r = \frac{\sum_{i=1}^{n} (x_i - \bar{x})(y_i - \bar{y})}{n \cdot s_x \cdot s_y} = \frac{s_{xy}}{s_x \cdot s_y} = \frac{\overline{xy} - \bar{x} \cdot \bar{y}}{s_x \cdot s_y}$$

> [!CAUTION]
> **Oprava chyby v původním taháku:**
> V tištěné předloze je uveden překlep $r = \frac{s_{xy}^2}{s_x \cdot s_y}$. To je matematický nesmysl, rozměrově i fakticky. Druhá mocnina v čitateli neexistuje – čitatel je přímo roven kovarianci $s_{xy} = \overline{xy} - \bar{x}\cdot\bar{y}$. Druhá mocnina $r^2$ představuje koeficient determinace!

* **Vlastnosti:**
  * $r \in \langle -1; 1 \rangle$
  * $r = 1$: Dokonalá přímá lineární závislost (s rostoucím $x$ roste $y$).
  * $r = -1$: Dokonalá nepřímá lineární závislost (s rostoucím $x$ klesá $y$).
  * $r \to 0$: Lineární korelace neexistuje (může však existovat silná nelineární závislost, např. kvadratická!).

---

### 2.2 Lineární regrese
Hledání optimální přímky metodou nejmenších čtverců.

* **Regresní přímka $y$ na $x$ ($y = a_x \cdot x + b_x$):**
  Minimalizuje vertikální odchylky:
  $$a_x = \frac{s_{xy}}{s_x^2}, \qquad b_x = \bar{y} - a_x \cdot \bar{x}$$
* **Regresní přímka $x$ na $y$ ($x = a_y \cdot y + b_y$ neboli $y = \frac{1}{a_y}x - \frac{b_y}{a_y}$):**
  Minimalizuje horizontální odchylky:
  $$a_y = \frac{s_{xy}}{s_y^2}, \qquad b_y = \bar{x} - a_y \cdot \bar{y}$$
* **Vztah mezi regresí a korelací:**
  $$a_x \cdot a_y = r^2$$
* Obě regresní přímky se protínají přesně v **těžišti dat** $[\bar{x}; \bar{y}]$. Pokud $r = \pm 1$, obě přímky splynou v jednu.

---

### 2.3 Spearmanův koeficient pořadové korelace ($r_s$)
Neparametrická metoda, která nevyžaduje normální rozdělení ani lineární vztah (měří monotónní závislost). Pracuje s diferencemi pořadí jednotlivých prvků:

$$r_s = 1 - \frac{6 \sum_{i=1}^{n} d_i^2}{n(n^2 - 1)}$$

* $d_i = R(x_i) - R(y_i)$ je rozdíl mezi pořadím hodnoty $x_i$ a pořadím hodnoty $y_i$ v seřazených posloupnostech.
* $r_s \in \langle -1; 1 \rangle$.
* $r_s \to 0 \implies$ pořadová nezávislost.

#### Postup výpočtu:
1. Hodnoty $x$ i $y$ nezávisle seřadíme a přiřadíme jim pořadí $1, 2, \dots, n$ (při shodě průměrné pořadí).
2. Pro každý řádek spočítáme $d_i = \text{pořadí}_x - \text{pořadí}_y$.
3. Umocníme na druhou $d_i^2$, sečteme $\sum d_i^2$ a dosadíme do vzorce.

---

## 3. Testování hypotéz – Párové pokusy

Používá se pro porovnání dvou závislých výběrů (např. měření stejného pacienta před a po léčbě, polovina vzorku ošetřena látkou A, druhá látkou B).

---

### 3.1 Wilcoxonův test pro párové pokusy (Wilcoxon Signed-Rank Test)

Neparametrický test, který bere v potaz nejen směr rozdílů, ale i jejich relativní velikost.

* **Nulová hypotéza $H_0$:** Rozdíly jsou rozloženy symetricky kolem 0 (tzn. zásah A a B se neliší, medián rozdílů je 0).
* **Alternativní hypotéza $H_1$:** Rozdíly nejsou rozloženy symetricky kolem 0 (zásah má prokazatelný statistický vliv).

#### Algoritmus výpočtu:
1. Spočteme rozdíly jednotlivých párů: $D_i = A_i - B_i$.
2. **Nulové rozdíly ($D_i = 0$) vynecháme** a o jejich počet zmenšíme celkové $n$.
3. Seřadíme absolutní hodnoty $|D_i|$ vzestupně a přiřadíme jim pořadová čísla $1, 2, \dots, n$. Shodným hodnotám přiřadíme průměrné pořadí.
4. K pořadím přiřadíme původní znaménka rozdílů ($+$ nebo $-$).
5. Sečteme pořadí zvlášť pro kladné a záporné rozdíly:
   $$W_+ = \sum_{D_i > 0} W_i, \qquad W_- = \sum_{D_i < 0} W_i$$
   *(Kontrolní součet: $W_+ + W_- = \frac{n(n+1)}{2}$)*.
6. Testovací statistika:
   $$W = \min(W_+; W_-)$$
7. **Rozhodovací pravidlo:**
   * Pokud $\min(W_+; W_-) \le W_{\text{krit}}(n; \alpha)$ $\implies$ **zamítáme $H_0$**. Rozdíly nejsou symetrické, pokus má statisticky významný vliv na výsledek.

#### Příklad z předlohy ($n = 8$ pacientů, antibiotikum A vs B):
| Pacient | A | B | $A - B$ | $|A - B|$ seřazené | Průměr pořadí $W_i$ | Znaménko |
| :---: | :---: | :---: | :---: | :---: | :---: | :---: |
| 1 | 14 | 1 | 13 | 1 | 2 | + |
| 2 | 4 | 5 | -1 | 1 | 2 | - |
| 3 | 10 | 5 | 5 | 1 | 2 | + |
| 4 | 6 | 2 | 4 | 3 | 4 | + |
| 5 | 4 | 1 | 3 | 4 | 5 | + |
| 6 | 4 | 3 | 1 | 5 | 6 | + |
| 7 | 3 | 2 | 1 | 6 | 7 | + |
| 8 | 9 | 3 | 6 | 13 | 8 | + |

*(Pozn.: V řádku 7 tištěného taháku je překlep „13“ namísto „6“, seřazení a výpočet pořadí však zůstávají správně).*

* Shodné hodnoty $|D| = 1$ obsadily 1., 2. a 3. pozici $\implies$ průměrné pořadí $\frac{1+2+3}{3} = 2$.
* Záporný rozdíl je pouze jeden ($-1$ s pořadím $2$) $\implies W_- = 2$.
* Kladné rozdíly: $W_+ = 2 + 2 + 4 + 5 + 6 + 7 + 8 = 34$.
* Kontrola: $W_+ + W_- = 34 + 2 = 36 = \frac{8 \cdot 9}{2}$.
* Testovací statistika: $\min(34; 2) = 2$.
* Kritická hodnota pro $n = 7$ (nebo $n = 8$): $W_{\text{krit}} = 2$. Je-li $\min \le W_{\text{krit}}$, zamítáme $H_0$.

---

### 3.2 Znaménkový test (Sign Test)

Zjednodušená alternativa Wilcoxonova testu. Zcela ignoruje velikost rozdílů, sleduje **pouze znaménka** ($+$ a $-$).

* **Nulová hypotéza $H_0$:** Zásahy A a B jsou rovnocenné $\implies$ pravděpodobnost kladného i záporného rozdílu je $50\,\%$ ($P(+) = P(-) = 0{,}5$). V ideální shodě jsou rozdíly nulové.
* **Testovací statistika:**
  $$m = \min(m_+; m_-)$$
  kde $m_+$ je počet kladných rozdílů a $m_-$ je počet záporných rozdílů (nulové rozdíly se ignorují).
* **Rozhodovací pravidlo:**
  * Je-li $\min(m_+; m_-) \le m_{\text{krit}}(n; \alpha)$ $\implies$ **zamítáme $H_0$**. Rozdíly nejsou náhodně symetrické, testovaný faktor má vliv.
  * V ukázce: $m_- = 1$, $m_+ = 7 \implies \min(1; 7) = 1$.
  * Pro $n = 8, \alpha = 0{,}1$ je $m_{\text{krit}} = 1$. Jelikož $1 \le 1$, zamítáme $H_0$.

---

## 4. Testy dobré shody a analýza závislostí ($\chi^2$ testy)

---

### 4.1 Kontingenční tabulky (Test nezávislosti dvou kvalitativních znaků)

Slouží k posouzení, zda existuje statistická závislost mezi dvěma nominálními nebo ordinálními veličinami.

1. **Tabulka reálných (pozorovaných) četností $x_{ij}$:**
   * $r$ = počet řádků (kategorií prvního znaku)
   * $s$ = počet sloupců (kategorií druhého znaku)
   * Řádkové součty: $x_{i\cdot} = \sum_{j=1}^s x_{ij}$
   * Sloupcové součty: $x_{\cdot j} = \sum_{i=1}^r x_{ij}$
   * Celkový počet pozorování: $x_{\cdot\cdot} = n = \sum_{i=1}^r \sum_{j=1}^s x_{ij}$
2. **Tabulka teoretických (očekávaných) četností $t_{ij}$ při platnosti nezávislosti:**
   $$t_{ij} = \frac{x_{i\cdot} \cdot x_{\cdot j}}{x_{\cdot\cdot}}$$
3. **Testová statistika $\chi^2$ (chí-kvadrát):**
   $$\chi^2 = \sum_{i=1}^{r} \sum_{j=1}^{s} \frac{(x_{ij} - t_{ij})^2}{t_{ij}}$$
4. **Stupně volnosti ($df$):**
   $$df = (r - 1)(s - 1)$$
5. **Předpoklady použitelnosti testu (Cochranova pravidla):**
   * $100\,\%$ teoretických četností musí splňovat $t_{ij} \ge 1$ (v taháku uvedeno $t_{ij} > 2$).
   * Nejméně $80\,\%$ teoretických četností musí splňovat $t_{ij} \ge 5$.
6. **Rozhodnutí:**
   * Kritická hodnota: $\chi^2_{\text{krit}} = \text{CHIINV}(\alpha; df)$.
   * Pokud $\chi^2 > \chi^2_{\text{krit}}$ (nebo $p\text{-hodnota} < \alpha$) $\implies$ **zamítáme nezávislost** (veličiny jsou na sobě závislé).
   * Výpočet $p$-hodnoty: $p = \text{CHIDIST}(\chi^2; df)$.

#### Míry síly závislosti (asociace) v kontingenční tabulce:
* **Pearsonův koeficient kontingence ($C$):**
  $$C = \sqrt{\frac{\chi^2}{n + \chi^2}}, \qquad C \in \langle 0; 1)$$
* **Čuprovův koeficient ($K$):**
  $$K = \sqrt{\frac{\chi^2}{n \cdot \sqrt{(r-1)(s-1)}}}$$
* **Cramérovo $V$** (standard pro obecné tabulky $r \times s$):
  $$V = \sqrt{\frac{\chi^2}{n \cdot \min(r-1; s-1)}}$$

---

### 4.2 Pearsonův test dobré shody (Goodness-of-Fit / Test normality a rozdělení)

Slouží k ověření, zda naměřená výběrová data pocházejí z teoretického rozdělení (např. normálního, exponenciálního, Poissonova).

* **Nulová hypotéza $H_0$:** Data se řídí teoretickým rozdělením s distribuční funkcí $F(x)$.
* **Alternativní hypotéza $H_1$:** Data se neřídí tímto rozdělením.

#### Teoretická distribuční funkce $F(x)$:
* **Normální rozdělení:**
  $$F(x) = \int_{-\infty}^{x} \frac{1}{\sigma \sqrt{2\pi}} e^{-\frac{(t-\mu)^2}{2\sigma^2}} \, dt$$
  V tabulkovém procesoru: `NORMDIST(h_i; mu; sigma; 1)`
* **Exponenciální rozdělení:**
  $$F(x) = 1 - e^{-\lambda x}$$
  V tabulkovém procesoru: `EXPONDIST(h_i; lambda; 1)`

#### Postup výpočtu:
1. Data rozdělíme do $k$ třídních intervalů $(h_{i-1}; h_i\rangle$. Pro každý interval určíme střed (třídní znak) $z_i$ a horní hranici $h_i$.
2. Zjistíme reálnou četnost $x_i$ v každé třídě ($\sum x_i = n$).
3. Pro každou horní mez $h_i$ spočteme distribuční funkci $F(h_i)$.
4. Pravděpodobnost spadnutí do $i$-tého intervalu je $p_i = F(h_i) - F(h_{i-1})$.
5. **Teoretická četnost $t_i$:**
   $$t_i = n \cdot p_i = n \cdot \left[ F(h_i) - F(h_{i-1}) \right]$$
6. **Výpočet dílčích $\chi_i^2$ a celkové sumy:**
   $$\chi^2 = \sum_{i=1}^{k} \frac{(x_i - t_i)^2}{t_i}$$
7. **Stupně volnosti ($df$):**
   $$df = k - 1 - p$$
   kde $k$ je počet tříd a $p$ je počet parametrů odhadnutých z výběru:
   * Pro normální rozdělení odhadujeme $\mu = \bar{z}$ a $\sigma = s_z \implies p = 2 \implies df = k - 3$.
   * Pro Poissonovo rozdělení odhadujeme $\lambda \implies p = 1 \implies df = k - 2$.
   *(Poznámka ke zjednodušení v předloze: v textu je uveden školní tvar $df = k - p$, kde při $k=8, p=2$ vyšlo $df=6$, což dalo $\chi^2_{\text{krit}} = 14{,}07$).*
8. **Vyhodnocení:**
   * Pokud $\chi^2 < \chi^2_{\text{krit}} = \text{CHIINV}(\alpha; df)$ $\implies$ **nezamítáme $H_0$** (data odpovídají testovanému rozdělení).
   * Pokud $\chi^2 \ge \chi^2_{\text{krit}}$ $\implies$ **zamítáme $H_0$** (rozdělení neodpovídá).

#### Příklad z předlohy (Počet kliků náhodně vybraných žáků, $n = 70$):
* $k = 8$ intervalů: $(0;3\rangle, (3;6\rangle, \dots, (21;\infty)$
* Odhady parametrů: $\mu = 12$, $\sigma = 7$, případně $\lambda = 0{,}112$.
* Výsledná testová statistika pro normální rozdělení:
  $$\chi^2_{\text{norm}} = 26{,}46$$
  Protože $26{,}46 > \chi^2_{\text{krit}}(0{,}05; 6) = 14{,}07$, hypotézu o normalitě **zamítáme**.
* Výsledná testová statistika pro jiné rozdělení:
  $$\chi^2 = 4{,}79$$
  Protože $4{,}79 < 14{,}07$, hypotézu o shodě **nezamítáme**.

---

## 5. Rychlý tahák funkcí v LibreOffice Calc / MS Excel

| Úkon | Funkce (Calc / starší Excel) | Moderní Excel (CZ / EN) | Parametry |
| :--- | :--- | :--- | :--- |
| **Kritická hodnota $\chi^2$** | `CHIINV(alpha; df)` | `CHISQ.INV.RT(alpha; df)` | $\alpha$ = hladina významnosti, $df$ = stupně volnosti |
| **$p$-hodnota z $\chi^2$** | `CHIDIST(chi2; df)` | `CHISQ.DIST.RT(chi2; df)` | $\chi^2$ = hodnota kritéria, $df$ = stupně volnosti |
| **Test nezávislosti tabulky** | `CHITEST(skutecne; teoreticke)` | `CHISQ.TEST(...)` | Oblasti buněk matice reálných a teoretických četností |
| **Distribuční fce Normální** | `NORMDIST(x; prumer; odchylka; 1)` | `NORM.DIST(x; mean; stdev; TRUE)` | $1$ / `TRUE` = kumulativní distribuční funkce $F(x)$ |
| **Distribuční fce Exponenciální** | `EXPONDIST(x; lambda; 1)` | `EXPON.DIST(x; lambda; TRUE)` | $\lambda$ = parametr rozdělení |
| **Aritmetický průměr** | `PRŮMĚR(oblast)` | `AVERAGE(oblast)` | Výběr dat |
| **Medián** | `MEDIAN(oblast)` | `MEDIAN(oblast)` | Výběr dat |
| **Modus** | `MODE(oblast)` | `MODE.SNGL(oblast)` | Výběr dat |
| **Kvartily** | `QUARTIL(oblast; typ)` | `QUARTILE.INC(oblast; 1/2/3)` | Typ 1 = $Q_1$, 2 = medián, 3 = $Q_3$ |
| **Směrodatná odchylka** | `SMODCH.VÝBĚR(oblast)` | `STDEV.S(oblast)` | Dělí $n-1$ (výběrová) |
| **Kovariance** | `COVARIANCE.P` / `.S` | `COVARIANCE.S(pole1; pole2)` | Populační nebo výběrová |
| **Pearsonův koeficient** | `PEARSON(pole1; pole2)` | `CORREL(pole1; pole2)` | Vrací přímo hodnotu $r$ |

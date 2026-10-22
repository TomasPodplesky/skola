	# Optika: Geometrická optika – Zrcadla a čočky

## I. Přehled vzorců a rovnic

### 1. Vztah mezi ohniskovou vzdáleností a poloměrem křivosti (kulová zrcadla)
$$f = \frac{r}{2}$$

*   **$f$** ... ohnisková vzdálenost [m]
*   **$r$** ... poloměr křivosti zrcadla (poloměr kulové plochy) [m]

---

### 2. Zobrazovací rovnice (pro zrcadla i tenké čočky)
$$\frac{1}{f} = \frac{1}{a} + \frac{1}{a'}$$

*   **$f$** ... ohnisková vzdálenost [m]
*   **$a$** ... vzdálenost předmětu od vrcholu zrcadla nebo středu čočky [m]
*   **$a'$** ... vzdálenost obrazu od vrcholu zrcadla nebo středu čočky [m]

---

### 3. Příčné zvětšení ($Z$)
$$Z = \frac{y'}{y} = -\frac{a'}{a}$$

Alternativní vyjádření s využitím ohniskové vzdálenosti $f$ (vhodné, pokud neznáme buď $a$, nebo $a'$):
$$Z = \frac{f}{f - a} = \frac{f - a'}{f}$$

*   **$Z$** ... příčné zvětšení [bezrozměrná veličina]
*   **$y$** ... výška předmětu [m] (kladná pro předmět nad optickou osou)
*   **$y'$** ... výška obrazu [m] (kladná pro přímý obraz, záporná pro převrácený)
*   **$a$** ... vzdálenost předmětu [m]
*   **$a'$** ... vzdálenost obrazu [m]
*   **$f$** ... ohnisková vzdálenost [m]

---

### 4. Optická mohutnost čočky ($\phi$)
$$\phi = \frac{1}{f}$$

*   **$\phi$** (někdy značeno jako **$D$**) ... optická mohutnost [dioptrie, neboli $\text{m}^{-1}$]
*   **$f$** ... ohnisková vzdálenost čočky [m] (ve vzorci musí být striktně v metrech!)

---

### 5. Rovnice pro ohniskovou vzdálenost tenké čočky (výrobní rovnice)
$$\frac{1}{f} = \left(\frac{n_2}{n_1} - 1\right) \left(\frac{1}{R_1} + \frac{1}{R_2}\right)$$

*   **$f$** ... ohnisková vzdálenost [m]
*   **$n_2$** ... index lomu materiálu (skla) čočky [bezrozměrná veličina]
*   **$n_1$** ... index lomu okolního prostředí (pro vzduch se bere $n_1 \approx 1$) [bezrozměrná veličina]
*   **$R_1, R_2$** ... poloměry křivosti optických ploch čočky [m] (kladné pro vypuklé plochy, záporné pro duté plochy, pro rovinnou plochu je $R \to \infty$ a příspěvek $\frac{1}{R} = 0$)

---

> [!IMPORTANT] Znaménková konvence (Klíč ke správným výpočtům!)
> Při dosazování číselných hodnot do vzorců je nutné dodržovat tato pravidla:
> 
> **1. Poloha předmětu ($a$):**
> *   $a > 0$ pro skutečný předmět (téměř vždy ve školních úlohách).
> 
> **2. Poloha obrazu ($a'$):**
> *   $a' > 0$ ... **skutečný obraz** (lze jej zachytit na stínítko).
>     *   *Zrcadla:* obraz vzniká před zrcadlem (na straně předmětu).
>     *   *Čočky:* obraz vzniká za čočkou (na opačné straně než předmět).
> *   $a' < 0$ ... **zdánlivý (neskutečný) obraz** (nelze zachytit na stínítko, vidíme ho okem).
>     *   *Zrcadla:* obraz vzniká za zrcadlem.
>     *   *Čočky:* obraz vzniká před čočkou (na stejné straně jako předmět).
> 
> **3. Ohnisková vzdálenost ($f$) a poloměr křivosti ($r$):**
> *   **Duté zrcadlo / Spojná čočka (spojka):** $f > 0, r > 0$ (optický systém sbíhá paprsky).
> *   **Vypuklé zrcadlo / Rozptylná čočka (rozptylka):** $f < 0, r < 0$ (optický systém rozptyluje paprsky).
> 
> **4. Vlastnosti obrazu podle zvětšení ($Z$):**
> *   $|Z| > 1$ ... obraz je **zvětšený**.
> *   $|Z| < 1$ ... obraz je **zmenšený**.
> *   $|Z| = 1$ ... obraz je **stejně velký**.
> *   $Z > 0$ ... obraz je **přímý** (orientovaný stejně jako předmět, $a'$ je záporné, obraz je zdánlivý).
> *   $Z < 0$ ... obraz je **převrácený** (orientovaný dolů, $a'$ je kladné, obraz je skutečný).

---

## II. Teoretické poznámky

### 1. Základní pojmy
*   **Optická osa ($o$):** Hlavní osa symetrie procházející středy optických ploch.
*   **Střed křivosti ($S$):** Geometrický střed kulové plochy, ze které je zrcadlo/čočka vytvořeno.
*   **Vrchol zrcadla ($V$):** Průsečík optické osy s povrchem zrcadla.
*   **Optický střed čočky ($O$):** Bod na optické ose uvnitř čočky. Paprsek procházející tímto bodem se neláme a pokračuje ve svém původním směru.
*   **Ohnisko ($F$):**
    *   **Předmětové ohnisko ($F$):** Bod, z něhož vycházející paprsky se po průchodu čočkou/zrcadlem šíří rovnoběžně s optickou osou.
    *   **Obrazové ohnisko ($F'$):** Bod na optické ose, do kterého se sbíhají paprsky, které před průchodem systémem běžely rovnoběžně s optickou osou.

---

### 2. Kulová zrcadla (Odraz světla)
Chování paprsků se řídí **zákonem odrazu** ($\alpha = \alpha'$).

#### A) Duté zrcadlo (sbíhavé)
*   Soustřeďuje rovnoběžné paprsky do svého skutečného ohniska $F$.
*   **Tři význačné paprsky pro konstrukci obrazu:**
    1.  Paprsek letící **rovnoběžně** s optickou osou se odrazí do **ohniska $F$**.
    2.  Paprsek procházející **ohniskem $F$** se odrazí **rovnoběžně** s optickou osou.
    3.  Paprsek procházející **středem křivosti $S$** dopadá na zrcadlo kolmo a odráží se **zpět stejnou cestou** (přes $S$).

##### Vlastnosti obrazu u dutého zrcadla podle polohy předmětu ($a$):

| Poloha předmětu | Poloha obrazu | Vlastnosti obrazu | Typický příklad / Využití |
| :--- | :--- | :--- | :--- |
| **$a > 2f$** (za středem $S$) | $f < a' < 2f$ (mezi $F$ a $S$) | Skutečný, převrácený, zmenšený | Hvězdářský dalekohled |
| **$a = 2f$** (ve středu $S$) | $a' = 2f$ (ve středu $S$) | Skutečný, převrácený, stejně velký | – |
| **$f < a < 2f$** (mezi $F$ a $S$) | $a' > 2f$ (za středem $S$) | Skutečný, převrácený, zvětšený | Promítací zařízení |
| **$a = f$** (v ohnisku $F$) | $a' \to \infty$ | Obraz nevzniká (paprsky odcházejí rovnoběžně) | Světlomety auto/hledačky |
| **$a < f$** (před ohniskem $F$) | $a' < 0$ (za zrcadlem) | Zdánlivý, přímý, zvětšený | Kosmetické/holicí zrcadlo |

---

#### B) Vypuklé zrcadlo (rozptylné)
*   Rozptyluje rovnoběžné paprsky. Jejich pomyslné zpětné prodloužení se protíná v neskutečném ohnisku $F$ za zrcadlem.
*   **Vlastnosti obrazu:** Pro jakoukoliv polohu předmětu před zrcadlem ($a > 0$) je obraz vždy **zdánlivý (neskutečný), přímý a zmenšený** ($a' < 0$, $0 < Z < 1$).
*   **Vlastnosti a využití:** Široký úhel záběru (zorné pole), ale zkresluje vzdálenost (objekty se zdají být dál, než ve skutečnosti jsou). Využívá se jako zpětná zrcátka aut, zrcadla v nepřehledných křižovatkách, nebo bezpečnostní zrcadla v prodejnách.

---

### 3. Čočky (Lom světla)
Chování paprsků se řídí **zákonem lomu** (Snellův zákon).

#### A) Spojná čočka – Spojka (konvexní)
*   Uprostřed je silnější, na okrajích tenčí. Sbíhá dopadající rovnoběžný svazek paprsků do skutečného obrazového ohniska $F'$ za čočkou.
*   **Tři význačné paprsky pro konstrukci obrazu:**
    1.  Paprsek letící **rovnoběžně** s optickou osou se láme do **obrazového ohniska $F'$** (za čočkou).
    2.  Paprsek procházející **optickým středem $O$** prochází čočkou **přímo**, bez lomu.
    3.  Paprsek procházející **předmětovým ohniskem $F$** (před čočkou) se láme **rovnoběžně** s optickou osou.

##### Vlastnosti obrazu u spojné čočky podle polohy předmětu ($a$):

| Poloha předmětu | Poloha obrazu | Vlastnosti obrazu | Typický příklad / Využití |
| :--- | :--- | :--- | :--- |
| **$a > 2f$** (za dvojnásobným ohniskem) | $f < a' < 2f$ | Skutečný, převrácený, zmenšený | Lidské oko, fotoaparát |
| **$a = 2f$** (ve vzdálenosti $2f$) | $a' = 2f$ | Skutečný, převrácený, stejně velký | Kopírky |
| **$f < a < 2f$** (mezi $F$ a $2f$) | $a' > 2f$ | Skutečný, převrácený, zvětšený | Projektor, mikroskop, dalekohled |
| **$a = f$** (v ohnisku $F$) | $a' \to \infty$ | Obraz nevzniká (paprsky pokračují rovnoběžně) | Kolimátor |
| **$a < f$** (před ohniskem $F$) | $a' < 0$ (před čočkou) | Zdánlivý, přímý, zvětšený | Lupa, brýle na dalekozrakost |

---

#### B) Rozptylná čočka – Rozptylka (konkávní)
*   Uprostřed je tenčí, na okrajích silnější. Rozptyluje dopadající rovnoběžné paprsky tak, že jejich pomyslné prodloužení prochází zdánlivým obrazovým ohniskem $F'$ před čočkou.
*   **Vlastnosti obrazu:** Pro jakoukoliv polohu předmětu před čočkou ($a > 0$) je obraz vždy **zdánlivý (neskutečný), přímý a zmenšený** ($a' < 0$, $0 < Z < 1$).
*   **Význačné paprsky pro konstrukci:**
    1.  Paprsek letící **rovnoběžně** s optickou osou se láme tak, že jeho prodloužení směřuje do **obrazového ohniska $F'$** (které leží před čočkou).
    2.  Paprsek procházející **optickým středem $O$** prochází **přímo** (neláme se).
    3.  Paprsek směřující do předmětového ohniska $F$ (leží za čočkou) se láme **rovnoběžně** s optickou osou.
*   **Využití:** Korekce krátkozrakosti (brýle s mínusovými dioptriemi rozptylují světlo tak, aby se obraz tvořil přesně na sítnici), rozptylná skla v okulárech.

---

### 4. Rychlé srovnání (Tahák)

| Optický prvek | Chování paprsků | Ohnisko ($f$) | Typy obrazů |
| :--- | :--- | :--- | :--- |
| **Duté zrcadlo** | Sbíhavé (spojuje) | Skutečné ($f > 0$) | Skutečný i zdánlivý (dle polohy) |
| **Spojná čočka** | Sbíhavé (spojuje) | Skutečné ($f > 0$) | Skutečný i zdánlivý (dle polohy) |
| **Vypuklé zrcadlo** | Rozbíhavé (rozptyluje) | Zdánlivé ($f < 0$) | Pouze zdánlivý, zmenšený, přímý |
| **Rozptylná čočka** | Rozbíhavé (rozptyluje) | Zdánlivé ($f < 0$) | Pouze zdánlivý, zmenšený, přímý |



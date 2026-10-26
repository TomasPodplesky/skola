# Speciální teorie relativity (STR)

## Tahák vzorců

| Vzorec | Název | Vypočítáme |
|---|---|---|
| $\gamma=\frac{1}{\sqrt{1-v^2/c^2}}$ | Lorentzův faktor | Lorentzův faktor při rychlosti $v$ |
| $\Delta t=\gamma\Delta t_0$ | Dilatace času | relativistický časový interval |
| $L=\frac{L_0}{\gamma}$ | Kontrakce délek | délku pohybujícího se tělesa |
| $p=\gamma m_0v$ | Relativistická hybnost | hybnost tělesa |
| $E=\gamma m_0c^2$ | Celková energie | celkovou energii tělesa |
| $E_0=m_0c^2$ | Klidová energie | energii tělesa v klidu |
| $E_k=m_0c^2(\gamma-1)$ | Relativistická kinetická energie | kinetickou energii tělesa |
| $x'=\gamma(x-vt),\quad t'=\gamma(t-vx/c^2)$ | Lorentzovy transformace | souřadnici a čas v pohybující se soustavě |


## Obsah

- [[#Tahák vzorců|Tahák vzorců]]
- [[#Souhrn konstant a vzorců (Tahák)|Souhrn konstant a vzorců (Tahák)]]
  - [[#🔴 Základní konstanty|🔴 Základní konstanty]]
  - [[#🔵 Klíčové vzorce a jejich význam|🔵 Klíčové vzorce a jejich význam]]
- [[#Základní informace|Základní informace]]
- [[#Postuláty STR|Postuláty STR]]
- [[#Kinematika STR|Kinematika STR]]
  - [[#1. Relativnost současnosti|1. Relativnost současnosti]]
  - [[#2. Dilatace času|2. Dilatace času]]
  - [[#3. Kontrakce délek (Lorentzova-FitzGeraldova kontrakce)|3. Kontrakce délek (Lorentzova-FitzGeraldova kontrakce)]]
- [[#Dynamika STR|Dynamika STR]]
  - [[#1. Relativistická hybnost|1. Relativistická hybnost]]
  - [[#2. Ekvivalence hmotnosti a energie|2. Ekvivalence hmotnosti a energie]]
- [[#Lorentzovy transformace|Lorentzovy transformace]]

## Souhrn konstant a vzorců (Tahák)

### 🔴 Základní konstanty

| Veličina | Značka | Hodnota | Popis |
| :--- | :---: | :--- | :--- |
| **Rychlost světla ve vakuu** | $c$ | $299\,792\,458 \text{ m/s} \approx 3 \cdot 10^8 \text{ m/s}$ | Absolutní rychlostní limit vesmíru |
| **Klidová hmotnost elektronu** | $m_e$ | $\sim 9{,}109 \cdot 10^{-31} \text{ kg}$ | Zbytková hmotnost nejlehčí běžné částice |
| **Klidová hmotnost protonu** | $m_p$ | $\sim 1{,}672 \cdot 10^{-27} \text{ kg}$ | |
| **Klidová hmotnost neutronu** | $m_n$ | $\sim 1{,}675 \cdot 10^{-27} \text{ kg}$ | |
| **Klidová energie elektronu** | $E_{0e}$ | $\sim 0{,}511 \text{ MeV} \approx 8{,}187 \cdot 10^{-14} \text{ J}$ | Energie samotné hmoty elektronu |
| **Klidová energie protonu** | $E_{0p}$ | $\sim 938 \text{ MeV} \approx 1{,}503 \cdot 10^{-10} \text{ J}$ | Energie samotné hmoty protonu |
| **Elementární náboj** | $e$ | $\sim 1{,}602 \cdot 10^{-19} \text{ C}$ | Pro převod z J na eV ($1 \text{ eV} = 1{,}602 \cdot 10^{-19} \text{ J}$) |

### 🔵 Klíčové vzorce a jejich význam

- **Lorentzův faktor:** 
  $$ \gamma = \frac{1}{\sqrt{1 - \frac{v^2}{c^2}}} $$
  > Základní koeficient pro výpočet relativistických jevů. Určuje, "jak moc" se projeví relativita. Čím je rychlost $v$ blíž $c$, tím je $\gamma$ větší. Pro běžné pozemské rychlosti platí $\gamma \approx 1$.

- **Dilatace času:** 
  $$ \Delta t = \gamma \Delta t_0 $$
  > Výpočet zpomalení času. Ukazuje, že pohybující se hodiny tikají z pohledu klidového pozorovatele pomaleji. $\Delta t_0$ je vlastní čas (čas měřený přímo u pohybujícího se objektu).

- **Kontrakce délek:** 
  $$ L = \frac{L_0}{\gamma} $$
  > Výpočet zkrácení délek. Těleso pohybující se rychlostí $v$ se jeví pozorovateli zkrácené ve směru letu. $L_0$ je klidová / vlastní délka tělesa.

- **Relativistická hybnost:** 
  $$ p = \gamma m_0 v $$
  > Ukazuje, že pro urychlení tělesa blízko rychlosti světla potřebuješ nekonečnou sílu. Hybnost roste nelineárně do nekonečna. $m_0$ je klidová hmotnost.

- **Ekvivalence hmotnosti a energie:** 
  $$ E = mc^2 = \gamma m_0 c^2 $$
  > Nejslavnější rovnice. Udává celkovou energii hmotného tělesa. Spojuje hmotnost s energií jako dvě strany téže mince.

- **Klidová energie:** 
  $$ E_0 = m_0 c^2 $$
  > Energie tělesa, které se vůbec nepohybuje. Znamená, že i hmota v klidu v sobě ukrývá obrovské množství energie.

- **Kinetická energie:** 
  $$ E_k = E - E_0 = m_0 c^2 (\gamma - 1) $$
  > Skutečná energie pohybu při relativistických rychlostech. Klasický Newtonovský vzorec $E_k = \frac{1}{2}mv^2$ je při rychlostech blízko $c$ nepoužitelný.

---

## Základní informace
- **Autor:** Albert Einstein (1905)
- Nahrazuje klasickou (Newtonovskou) mechaniku pro rychlosti blížící se rychlosti světla ($v \to c$).
- Zcela vyvrací existenci absolutního času, absolutního prostoru a světelného éteru.

## Postuláty STR
1. **Princip relativity:** Ve všech inerciálních vztažných soustavách platí stejné fyzikální zákony. Žádná inerciální soustava (soustava v klidu nebo rovnoměrném přímočarém pohybu) není privilegovaná. Nelze žádným mechanickým, optickým ani elektromagnetickým pokusem uvnitř soustavy rozhodnout, zda je v klidu nebo se pohybuje.
2. **Princip konstantní rychlosti světla:** Rychlost světla ve vakuu ($c$) je ve všech inerciálních vztažných soustavách konstantní a nezávisí na pohybu zdroje ani pozorovatele. Je to nejvyšší možná rychlost šíření informace nebo hmoty.
   $$ c = 299\,792\,458 \text{ m/s} $$

## Kinematika STR

### 1. Relativnost současnosti
Dvě události, které jsou pro jednoho pozorovatele současné, nemusí být současné pro jiného pozorovatele, který se vůči prvnímu pohybuje. Časová následnost událostí závisí na volbě vztažné soustavy (pokud nejsou události kauzálně spojeny).

### 2. Dilatace času
Hodiny, které se vůči pozorovateli pohybují rychlostí $v$, jdou pomaleji než hodiny, které jsou s ním v klidu.
$$ \Delta t = \gamma \Delta t_0 = \frac{\Delta t_0}{\sqrt{1 - \frac{v^2}{c^2}}} $$
- $\Delta t$: Čas naměřený v soustavě, kde se hodiny pohybují (relativistický čas).
- $\Delta t_0$: Vlastní čas (čas naměřený v soustavě, kde jsou hodiny v klidu).
- $\gamma$: Lorentzův faktor (pro $v > 0$ je vždy $\gamma > 1$).

### 3. Kontrakce délek (Lorentzova-FitzGeraldova kontrakce)
Těleso pohybující se rychlostí $v$ se pro klidového pozorovatele jeví zkrácené ve směru svého pohybu. Rozměry kolmé na směr pohybu zůstávají beze změny.
$$ L = \frac{L_0}{\gamma} = L_0 \sqrt{1 - \frac{v^2}{c^2}} $$
- $L$: Naměřená délka pohybujícího se tělesa.
- $L_0$: Vlastní délka (naměřená v klidové soustavě tělesa).

## Dynamika STR

### 1. Relativistická hybnost
Zákon zachování hybnosti platí i v STR, ale vzorec se modifikuje. Hybnost roste s rychlostí nelineárně, při $v \to c$ jde k nekonečnu (hmotné těleso nelze urychlit na rychlost $c$).
$$ p = \gamma m_0 v = \frac{m_0 v}{\sqrt{1 - \frac{v^2}{c^2}}} $$
- $m_0$: Klidová hmotnost tělesa.

### 2. Ekvivalence hmotnosti a energie
Veškerá hmotnost reprezentuje energii a naopak. Celková energie tělesa je dána vztahem:
$$ E = \gamma m_0 c^2 = \frac{m_0 c^2}{\sqrt{1 - \frac{v^2}{c^2}}} $$
Klidová energie (energie tělesa o rychlosti $v = 0$):
$$ E_0 = m_0 c^2 $$
Kinetická energie (rozdíl celkové a klidové energie, nelze použít klasické $E_k = \frac{1}{2}m_0v^2$ pro vysoké rychlosti):
$$ E_k = E - E_0 = m_0 c^2 (\gamma - 1) = m_0 c^2 \left( \frac{1}{\sqrt{1 - \frac{v^2}{c^2}}} - 1 \right) $$

## Lorentzovy transformace
Rovnice pro přepočet souřadnic a času mezi dvěma inerciálními soustavami $S$ a $S'$. Soustava $S'$ se pohybuje vůči $S$ rychlostí $v$ ve směru osy $x$. (Osy $x$ a $x'$ splývají, $y \parallel y'$, $z \parallel z'$, počátky odpovídají v čase $t=t'=0$).
$$ x' = \gamma (x - vt) $$
$$ y' = y $$
$$ z' = z $$
$$ t' = \gamma \left(t - \frac{vx}{c^2}\right) $$
Pro přechod ze soustavy $S'$ zpět do $S$ platí stejné vzorce se záměnou čárkovaných a nečárkovaných veličin a obrácením znaménka rychlosti ($v \to -v$).

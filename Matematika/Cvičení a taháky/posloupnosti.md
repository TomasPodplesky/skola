# Posloupnosti a řady

## Obsah

- [[#1. Základní pojmy|1. Základní pojmy]]
- [[#2. Základní druhy posloupností|2. Základní druhy posloupností]]
  - [[#Aritmetická posloupnost|Aritmetická posloupnost]]
  - [[#Geometrická posloupnost|Geometrická posloupnost]]
- [[#3. Řady a finanční matematika|3. Řady a finanční matematika]]
  - [[#Úrokování|Úrokování]]
- [[#4. Vlastnosti posloupností|4. Vlastnosti posloupností]]
  - [[#Monotónnost (Růst a klesání)|Monotónnost (Růst a klesání)]]
  - [[#Omezenost|Omezenost]]
- [[#5. Způsoby zadání posloupnosti|5. Způsoby zadání posloupnosti]]
- [[#6. Limita, konvergence a divergence|6. Limita, konvergence a divergence]]
  - [[#Konvergentní posloupnost|Konvergentní posloupnost]]
  - [[#Divergentní posloupnost|Divergentní posloupnost]]
  - [[#Periodická posloupnost|Periodická posloupnost]]

## 1. Základní pojmy

Posloupnost je uspořádaný seznam čísel. Matematicky se jedná o funkci, jejímž definičním oborem jsou přirozená čísla. Každému přirozenému číslu $n$ (určujícímu pořadí) je přiřazeno reálné číslo $a_n$, které nazýváme $n$-tý člen posloupnosti.**

## 2. Základní druhy posloupností

### Aritmetická posloupnost

Rozdíl mezi dvěma po sobě jdoucími členy je konstantní. Tento rozdíl se nazývá diference ($d$).

* Vzorec pro $n$-tý člen:
$$a_n = a_1 + (n - 1)d$$
* Součet prvních $n$ členů (částečný součet):
$$s_n = \frac{n}{2} (a_1 + a_n)$$

### Geometrická posloupnost

Podíl dvou po sobě jdoucích členů je konstantní. Tento podíl se nazývá kvocient ($q$).

* Vzorec pro $n$-tý člen:
$$a_n = a_1 \cdot q^{n - 1}$$
* Součet prvních $n$ členů (pro $q \neq 1$):
$$s_n = a_1 \frac{q^n - 1}{q - 1}$$

## 3. Řady a finanční matematika

Zatímco posloupnost je seznam čísel, řada vznikne jejich sčítáním ($\Sigma$).

* Konvergentní nekonečná geometrická řada ($|q| < 1$) má konečný součet:
$$s = \frac{a_1}{1 - q}$$

### Úrokování

* Jednoduché úrokování (Aritmetická posloupnost): Úroky se počítají pouze z počáteční jistiny.
* Složené úrokování (Geometrická posloupnost): Úroky se připisují k jistině a v dalším období se úročí i ony (úroky z úroků).
* Vzorec pro budoucí hodnotu při složeném úrokování:
$$K_n = K_0 (1 + i)^n$$
*(Kde $K_n$ je částka po $n$ obdobích, $K_0$ je počáteční vklad a $i$ je úroková sazba jako desetinné číslo).*
* Pravidelné spoření a anuity se počítají jako součty geometrických řad.

## 4. Vlastnosti posloupností

### Monotónnost (Růst a klesání)

Určuje, jak se chovají následující členy vůči těm předchozím.

* Rostoucí: Každý následující člen je ostře větší.
$$a_{n+1} > a_n$$
* Klesající: Každý následující člen je ostře menší.
$$a_{n+1} < a_n$$
* Neklesající: Členy se zvětšují nebo zůstávají stejné.
$$a_{n+1} \ge a_n$$
* Nerostoucí: Členy se zmenšují nebo zůstávají stejné.
$$a_{n+1} \le a_n$$

### Omezenost

Určuje, zda hodnoty členů nepřekročí danou mez.

* Omezená shora: Existuje reálné číslo $H$ (horní mez) takové, že pro všechna $n$ platí:
$$a_n \le H$$
* Omezená zdola: Existuje reálné číslo $d$ (dolní mez) takové, že pro všechna $n$ platí:
$$a_n \ge d$$
* Omezená: Je omezená shora i zdola zároveň.

## 5. Způsoby zadání posloupnosti

* Explicitní: Vzorec pro přímý výpočet libovolného $n$-tého členu pouze dosazením $n$. Příklad: $a_n = 2n + 5$.
* Rekurentní: Následující člen se počítá z předchozího (nebo několika předchozích). Je nutné znát první člen(y). Příklad: $a_{n+1} = a_n + 3$, kde $a_1 = 2$.
* Implicitní: Zadáno rovnicí, kde zkoumaná veličina není přímo osamostatněna. Příklad: $3a_n - 6n = 15$. Z toho je nutné matematicky odvodit explicitní tvar. (U posloupností se používá minimálně).

## 6. Limita, konvergence a divergence

Limita řeší, co se stane s hodnotami posloupnosti, když se $n$ blíží k nekonečnu.

### Konvergentní posloupnost

Posloupnost se s rostoucím $n$ blíží k jedné konkrétní, konečné hodnotě (vlastní limitě $L$).

* Zápis:
$$\lim_{n \to \infty} a_n = L$$
* Každá konvergentní posloupnost musí být omezená.
* Weierstrassova věta: Pokud je posloupnost monotónní a omezená, je konvergentní.

### Divergentní posloupnost

Posloupnost není konvergentní, nemá jednu konečnou limitu.

* Útěk do nekonečna (nevlastní limita): Členy neustále rostou nebo klesají. Zápis:
$$\lim_{n \to \infty} a_n = \pm\infty$$
* Oscilace: Posloupnost nemá limitu, její hodnoty přeskakují (např. $a_n = (-1)^n$).
* Každá neomezená posloupnost je automaticky divergentní.

### Periodická posloupnost

Matematický termín pro "opakování". Hodnoty se po určitém úseku začnou znovu opakovat.

* Vzorec:
$$a_n = a_{n+k}$$
*(Kde $k$ je délka periody).*
* Vlastnosti: Každá periodická posloupnost je vždy omezená, není monotónní a (s výjimkou konstantní posloupnosti stejných čísel) je vždy divergentní, protože osciluje a nemá jednu limitu.

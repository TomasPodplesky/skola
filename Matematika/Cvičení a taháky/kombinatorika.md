# Kombinatorika

## Rychlé shrnutí
- **Variace** - uspořádávám $k$-tici, záleží na pořadí - např. 3cif. číslo vytvořím z číslic $\{1; 2; 3; 4; 5\} \Rightarrow$ když se můžou opakovat, tak $5^3$, protože 5 - počet (něčeho) k dispozici a 3 - počet (míst) kam můžeme (něco) dát. Když se opakovat nemůžou, tak je to rekurzivní, takže $5 \cdot 4 \cdot 3$, protože na první můžu dát 5 různých čísel, na druhý už jen čtyři (nemůžu opakovat) a pak tři $\rightarrow$ převedeno na $V(3; 5) = \frac{5!}{(5-3)!}$ a s opakováním je to $V'(3; 5) = 5^3$.
- **Permutace** - uspořádání všech prvků co mám, záleží na pořadí. $P(n) = n!$ ; $P'(k_1, k_2, \dots, k_n) = \frac{(k_1 + k_2 + \dots + k_n)!}{k_1! \cdot k_2! \cdots k_n!}$
- **Kombinace** - vyberu $k$-tici, nezajímá mě pořadí. $K(k,n) = \binom{n}{k}$ ; $\binom{n}{k} = \frac{n!}{(n-k)! \cdot k!}$ ; $K'(k,n) = \binom{n+k-1}{k} = \frac{(n+k-1)!}{(n-1)! \cdot k!}$

## Faktoriál
$n! = n \cdot (n-1) \cdot (n-2) \cdots 2 \cdot 1$
$n! = \prod_{i=1}^n i$
$n \in \mathbb{N}$

## Variace bez opakování
$k$-členná **variace** z $n$ prvků bez opakování, značí se $V_n^k$ nebo $V(k,n)$
$$V(k,n) = \frac{n!}{(n-k)!} = n \cdot (n-1) \cdot (n-2) \cdots (n-k+1)$$
u variací záleží na pořadí (tvoříme uspořádané $k$-tice)

**Př. Kolik všech možných trojic lze vytvořit z 5-ti různobarevných pastelek?**
$n = 5, k = 3$
$V(3,5) = 5 \cdot 4 \cdot 3 = 60$

## Permutace bez opakování
**permutace** je $n$-členná variace z $n$ prvků bez opakování, značí se $P(n)$
$$P(n) = n!$$
pomocí permutací se nejčastěji počítá pořadí, opět záleží na pořadí

**Př. Kolika způsoby lze uspořádat 5 různobarevných pastelek?**
$n = 5$
$P(5) = 5 \cdot 4 \cdot 3 \cdot 2 \cdot 1 = 120$

## Kombinace bez opakování
$k$-členná **kombinace** z $n$ prvků bez opakování, značí se $K_n^k$ nebo $K(k,n)$
$$K(k,n) = \frac{n!}{k!(n-k)!} = \frac{n \cdot (n-1) \cdot (n-2) \cdots (n-k+1)}{k \cdot (k-1) \cdots 2 \cdot 1}$$
u kombinací nezáleží na pořadí (tvoříme neuspořádané $k$-tice)
platí, že kombinací je méně než variací $V(k,n) = k! \cdot K(k,n)$
číslu $\binom{n}{k} = \frac{n!}{(n-k)! \cdot k!}$ říkáme kombinační číslo

**Př. Kolika způsoby je možné z 5-ti různobarevných pastelek vytvořit trojice?**
$n = 5, k = 3$
$K(k,n) = 10$

## Kombinační čísla
$$\binom{n}{k} = \frac{n!}{(n-k)! \cdot k!}$$
$$\binom{n}{1} = n \qquad \binom{n}{0} = \binom{n}{n} = 1$$
$$\binom{n}{k} = \binom{n}{n-k}$$
$$\binom{n}{k+1} = \binom{n}{k}\frac{n-k}{k+1}$$
$$\binom{n+1}{k} = \binom{n}{k} + \binom{n}{k-1}$$

---

## Variace s opakováním
$k$-členná **variace** z $n$ prvků s opakováním, značí se $V'^k_n$ nebo $V'(k,n)$
$$V'(k,n) = n^k$$
zde opět záleží na pořadí (tvoříme uspořádané $k$-tice)

**Př. Kolik všech možných trojciferných čísel lze vytvořit z 5-ti cifer {1,2,3,4,5}?**
$n = 5, k = 3$
$V'(3,5) = 5^3 = 125$
(V těchto případech pozor na nulu, ta nesmí stát na začátku.)

## Permutace s opakováním
**permutace** s opakováním se značí $P'(k_1, k_2, \dots, k_n)$
$$P'(k_1, k_2, \dots, k_n) = \frac{(k_1 + k_2 + \dots + k_n)!}{k_1! \cdot k_2! \cdots k_n!}$$
u permutací s opakováním opět záleží na pořadí

**Př. Kolika způsoby lze uspořádat 5 různobarevných pastelek, přičemž k dispozici máme 3 modré, 2 červené, 4 žluté, 1 černou a 5 zelených pastelek?**
$k_1 = 3, k_2 = 2, k_3 = 4, k_4 = 1, k_5 = 5$
$P'(3,2,4,1,5) = 37\,837\,800$

## Kombinace s opakováním
$k$-členná **kombinace** z $n$ prvků s opakováním se značí $K'^k_n$ nebo $K'(k,n)$
$$K'(k,n) = \binom{n+k-1}{k} = \frac{(n+k-1)!}{(n-1)! \cdot k!}$$
u kombinací nezáleží na pořadí (tvoříme neuspořádané $k$-tice)
nejčastěji se jedná o zjištění kolika způsoby lze rozmístit $k$ identických předmětů do $n$ přihrádek

**Př. Mějme peněženku a v ní koruny, dvoukoruny, pětikoruny a desetikoruny, od každého druhu „hodně“ mincí. Kolik různých částek lze zaplatit třemi mincemi z peněženky?**
$n = 4, k = 3$
$K'(3,4) = 120$

## Binomická věta a Pascalův trojúhelník

$$(a+b)^n = \sum_{k=0}^{n} \binom{n}{k} \cdot a^{n-k} \cdot b^k$$
$$\sum_{k=0}^{n} \binom{n}{k} = 2^n$$
$$\sum_{k=0}^{n} k \cdot \binom{n}{k} = n \cdot 2^{n-1}$$
$$\sum_{k=0}^{n} r^k \cdot \binom{n}{k} = (1+r)^n$$

**Pascalův trojúhelník:**
$$
\begin{matrix}
&&&&&& 1 &&&&&& \\
&&&&& 1 && 1 &&&&& \\
&&&& 1 && 2 && 1 &&&& \\
&&& 1 && 3 && 3 && 1 &&& \\
&& 1 && 4 && 6 && 4 && 1 && \\
& 1 && 5 && 10 && 10 && 5 && 1 & \\
1 && 6 && 15 && 20 && 15 && 6 && 1 \\
\vdots && \vdots && \vdots && \vdots && \vdots && \vdots && \vdots
\end{matrix}
$$

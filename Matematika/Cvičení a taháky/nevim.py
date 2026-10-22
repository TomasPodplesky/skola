import math
import matplotlib.pyplot as plt


def koch_segment(p1, p2):
    """
    Z jednoho úseku (p1 -> p2) vytvoří 4 nové úseky podle pravidla Kochovy křivky.
    p1, p2 jsou dvojice (x, y).
    Vrací seznam 4 nových úseků [(a,b), (b,c), (c,d), (d,e)].
    """
    (x1, y1), (x2, y2) = p1, p2

    # body dělení na třetiny
    dx = (x2 - x1) / 3.0
    dy = (y2 - y1) / 3.0

    a = (x1, y1)
    b = (x1 + dx, y1 + dy)
    d = (x1 + 2 * dx, y1 + 2 * dy)
    e = (x2, y2)

    # bod c – vrchol rovnostranného trojúhelníka
    # otočení vektoru (dx, dy) o -60°
    angle = -math.pi / 3.0
    cx = b[0] + dx * math.cos(angle) - dy * math.sin(angle)
    cy = b[1] + dx * math.sin(angle) + dy * math.cos(angle)
    c = (cx, cy)

    return [(a, b), (b, c), (c, d), (d, e)]


def koch_iteration(segments, n_processes):
    """
    Provede jednu iteraci Kochovy křivky nad seznamem úseků.
    segments: list[(p1, p2)]
    """
    results = [koch_segment(p1, p2) for p1, p2 in segments]
    new_segments = [seg for sub in results for seg in sub]
    print(f"Iterace: {len(new_segments)} segmentů")
    return new_segments


def koch_snowflake(depth, n_processes):
    """
    Vytvoří seznam úseků Kochovy vločky pro danou hloubku (depth)
    a počet procesů (n_processes).
    Začínáme rovnostranným trojúhelníkem.
    """
    # počáteční rovnostranný trojúhelník
    # zvolíme stranu délky 1, spodní hrana na ose x
    p1 = (0.0, 0.0)
    p2 = (1.0, 0.0)
    # třetí vrchol
    h = math.sqrt(3) / 2.0
    p3 = (0.5, h)

    segments = [(p1, p2), (p2, p3), (p3, p1)]

    for _ in range(depth):
        segments = koch_iteration(segments, n_processes)

    return segments


def plot_segments(segments):
    """
    Vykreslí seznam úseků pomocí matplotlib.
    """
    for (x1, y1), (x2, y2) in segments:
        plt.plot([x1, x2], [y1, y2], color="blue", linewidth=0.5)

    plt.axis("equal")
    plt.axis("off")
    plt.tight_layout()
    plt.show()


if __name__ == "__main__":
    # ---- nastavení uživatele ----
    depth = 10        # hloubka rekurze (0 = jen trojúhelník)
    n_processes = 4    # počet procesů

    print(f"Spouštím Kochovu vločku: depth={depth}, n_processes={n_processes}")
    segments = koch_snowflake(depth, n_processes)
    print(f"Kreslím {len(segments)} segmentů...")
    plot_segments(segments)
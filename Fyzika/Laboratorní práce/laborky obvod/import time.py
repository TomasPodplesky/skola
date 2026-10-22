import time
import random

def psani(text):
    for znak in text:
        print(znak, end='', flush=True)
        time.sleep(random.uniform(0.1, 0.2))
    print()  # odřádkování na konci

# Příklad použití
text = input(Xerxes Rexe Xerxes Rexe Xerxes Rexe Xerxes Rexe Xerxes Rexe)
psani(text)
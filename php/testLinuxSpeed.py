import time


for i in range (1000001):
    print(i)
    if i == 0:
        debut = time.time()
    if i == 1000000:
        fin = time.time()

print(fin - debut)
import time


for i in range (10000001):
    print(i)
    if i == 0:
        debut = time.time()
    if i == 10000000:
        fin = time.time()

print(fin - debut)
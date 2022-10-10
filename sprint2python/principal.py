from factorial import func_factorial as factorial
from factorial2 import func_factorial2 as factorial2
import time

op = ''
while (op!='a' and op!='b'):
    print("A) func_factorial")
    print("B) func_factorial2")
    op = input()
    if (op!='a' and op!='b'):
        print("RESPUESTAS VÁLIDAS A / B")

print()

if (op=='a'):
    print("Introduce un número:  ")
    start_time = time.time()
    print( factorial(int(input())) )
    end_time = time.time()
    elapsed_time = end_time - start_time
else:
    print("Introduce un número:  ")
    start_time = time.time()
    print( factorial2(int(input())) )
    end_time = time.time()
    elapsed_time = end_time - start_time

print("El tiempo de ejecución ha sido: ", elapsed_time, " s")
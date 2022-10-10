from factorial import func_factorial as factorial
from factorial2 import func_factorial2 as factorial2


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
    print( factorial(int(input())) )
else:
    print("Introduce un número:  ")
    print( factorial2(int(input())) )


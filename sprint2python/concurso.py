def limpiarPantalla():
    for i in range(0, 10):
        print()

op = ''

limpiarPantalla()

while (op!='a' and op!='b' and op!='c'):
    print("Cúantos corazones tiene un pulpo?")
    print("A) 1")
    print("B) 2")
    print("C) 3")
    op = input().lower()
    if (op!='a' and op!='b' and op!='c'):
        limpiarPantalla()
        print("RESPUESTAS VÁLIDAS A, B o C")

if (op == 'c'):
    print("CORRECTO!")
else:
    print("FALSO...")
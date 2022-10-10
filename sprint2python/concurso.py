op = ''
punt = 0

def preguntar(pregunta, res1, res2, res3, respuestaCorrecta):
    global punt, op
    while (op!='a' and op!='b' and op!='c'):
        #  pregunta con opciones
        print(pregunta)
        print("A) "+res1)
        print("B) "+res2)
        print("C) "+res3)
        op = input().lower()

        # modificar respuesta para comprobar resultado
        if (op=='a'):
            op = res1
        elif (op=='b'):
            op = res2
        elif (op=='c'):
            op = res3
        else:
            print("RESPUESTAS VÁLIDAS A, B o C")
        
        # correcto o incorrecto
        if (op==res1 or op==res2 or op==res3):
            if (op == respuestaCorrecta):
                print("CORRECTO!    /   +10 puntos")
                punt += 10
                return
            else:
                print("FALSO... /   -5 puntos")
                punt -= 5
                return

# PREGUNTAS
preguntar("Cuántos corazones tiene un pulpo?", "1", "2", "3", "3")
preguntar("Dónde se encuentra la Sagrada Familia?", "Barcelona", "Madrid", "Logroño", "Barcelona")
preguntar("Cuál es el océano más grande del mundo?", "Pacífico", "Mediterráneo", "Atlántico", "Pacífico")
print()
print()
print("Tu puntuación total es de: ",punt)
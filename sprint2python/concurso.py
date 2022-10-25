# IMPORTS NECESARIOS
import random

# VARIABLES GLOBALES
op = ''
punt = 0

# FUNCION REALIZAR PREGUNTA
def preguntar(pregunta, res1, res2, res3, respuestaCorrecta):
    # MANEJAR VARIABLES GLOBALES YA CREADAS
    global punt, op
    
    # CONTROLAR OPCIONES ÚNICAS / CORRECTO-INCORRECTO
    while (op!='a' and op!='b' and op!='c'):
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
        if (op==res1 or op==res2 or op==res3): # controlar que es una de las respuestas válidas, si no daría siempre falso cuando no se insertan A, B o C
            if (op == respuestaCorrecta):
                print("CORRECTO!    /   +10 puntos")
                punt += 10
                return
            else:
                print("FALSO... /   -5 puntos")
                punt -= 5
                return

# REALIZAR PREGUNTAS
preguntaHecha = 0
pregunta = 0

    # un FOR para hacer un total de 2 preguntas
for i in range(1,3):

    # no repetir una pregunta ya hecha
    while (preguntaHecha == pregunta):
        pregunta = random.randint(1, 3)

    # pregunta según número aleatorio
    if (pregunta == 1 and preguntaHecha != 1):
        preguntar("Cuántos corazones tiene un pulpo?", "1", "2", "3", "3")
        preguntaHecha = 1
    elif (pregunta == 2 and preguntaHecha != 2):
        preguntar("Dónde se encuentra la Sagrada Familia?", "Barcelona", "Madrid", "Logroño", "Barcelona")
        preguntaHecha = 2
    elif (pregunta == 3 and preguntaHecha != 3):
        preguntar("Cuál es el océano más grande del mundo?", "Pacífico", "Mediterráneo", "Atlántico", "Pacífico")
        preguntaHecha = 3
        
print()
print()
print("Tu puntuación total es de: ",punt)
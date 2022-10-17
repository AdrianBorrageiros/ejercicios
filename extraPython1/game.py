import random

op = 0
playPersona = ""
playPc = ""
puntuacion = 0


def limpiarPantalla():
    for i in range(0,50):
        print()


def comprobarJugada(op):
    if op == 1:
        return "Piedra"
    elif op == 2:
        return "Papel"
    elif op == 3:
        return "Tijera"

# 1 = gana la persona, 0 = gana la maquina
def ganada_O_perdida(resultado):
    global puntuacion, bucleInt
    if (resultado == 1):
        print("GANAS TÚ")
        puntuacion += 1
        bucleInt += 1
    elif (resultado == 0):
        print("GANA LA MÁQUINA")
        bucleInt += 1
    else:
        print("EMPATE - ESTA JUGADA NO CUENTA")
    



bucleInt = 0
while bucleInt<5:

    # PERSONA
    while (op!=1 and op!=2 and op!=3):
        limpiarPantalla()
        print("Rock paper scissors")
        print()
        print("1- Piedra")
        print("2- Papel")
        print("3- Tijera")
        op = int(input("(1,2,3): "))
        if (op!=1 and op!=2 and op!=3):
            print("OPCION NO VÁLIDA - PULSA CUALQUIER TECLA PARA VOLVER A PROBAR")
            input()
    playPersona = comprobarJugada(op)

    # PC
    playPc = comprobarJugada(random.randint(1,3))
    
    # MOSTRAR JUGADA
    print("JUGADOR:",playPersona)
    print("MÁQUINA:",playPc)



    # CALCULAR JUGADA

        # piedra
    if (playPersona == "Piedra" and playPc == "Papel"):
        ganada_O_perdida(0)
    elif (playPersona == "Piedra" and playPc == "Tijera"):
        ganada_O_perdida(1)
        
        # papel
    elif (playPersona == "Papel" and playPc == "Piedra"):
        ganada_O_perdida(1)
        puntuacion += 1
    elif (playPersona == "Papel" and playPc == "Tijera"):
        ganada_O_perdida(0)

        # tijera
    elif (playPersona == "Tijera" and playPc == "Piedra"):
        ganada_O_perdida(0)
    elif (playPersona == "Tijera" and playPc == "Papel"):
        ganada_O_perdida(1)
    
        #empate
    else:
        ganada_O_perdida(2)


    input()
    op = 0
    print()
    print("PULSA CUALQUIER TECLA PARA CONTINUAR")


limpiarPantalla()
print("PUNTUACIÓN FINAL:",str(puntuacion)+"/5")
if (puntuacion>2):
    print("GANASTE!")
else:
    print("PERDISTE...")
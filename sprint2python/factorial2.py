def func_factorial2(num):
    factorial = 1
    # repetir bucle hasta el mismo número
    for i in range(1,num + 1):
       factorial = factorial*i
    return factorial
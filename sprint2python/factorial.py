def func_factorial(n): 
    return 1 if (n==1 or n==0) else n * func_factorial(n - 1)
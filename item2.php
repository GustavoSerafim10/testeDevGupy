def is_fibonacci(number):
    a, b = 0, 1
    while a <= number:
        if a == number:
            return True
        a, b = b, a + b
    return False

# Entrada
num = int(input("Digite um número: "))

# Verificação
if is_fibonacci(num):
    print(f"O número {num} pertence à sequência de Fibonacci.")
else:
    print(f"O número {num} NÃO pertence à sequência de Fibonacci.")

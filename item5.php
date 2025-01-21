def reverse_string(s):
    inverted = ""
    for char in s:
        inverted = char + inverted
    return inverted

# Entrada
string = input("Digite uma string: ")

# Inversão
print("String invertida:", reverse_string(string))

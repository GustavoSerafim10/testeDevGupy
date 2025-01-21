{
  "faturamento_diario": [200, 0, 250, 300, 0, 100, 400, 0, 0, 500]
}


import json

# Dados de exemplo
dados = '''
{
  "faturamento_diario": [200, 0, 250, 300, 0, 100, 400, 0, 0, 500]
}
'''
faturamento = json.loads(dados)["faturamento_diario"]

# Remover dias sem faturamento
faturamento_filtrado = [valor for valor in faturamento if valor > 0]

# Cálculos
menor = min(faturamento_filtrado)
maior = max(faturamento_filtrado)
media = sum(faturamento_filtrado) / len(faturamento_filtrado)

# Dias acima da média
dias_acima_media = sum(1 for valor in faturamento_filtrado if valor > media)

# Resultados
print(f"Menor faturamento: R${menor:.2f}")
print(f"Maior faturamento: R${maior:.2f}")
print(f"Dias acima da média mensal: {dias_acima_media}")

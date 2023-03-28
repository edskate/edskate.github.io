nome = str(input('Digite seu nome completo:')).strip()
print('Analizando seu nome...')
print('seu nome em maiúsculas é {}'.format(nome.upper()))
print('Seu nome em minùsculas é {}'.format(nome.lower()))
print('Seu nome tem ao todo {} letras'.format(len(nome) - nome.count(' ')))
print('Seu primeiro nome tem {} letras'.format(nome.find(' ')))


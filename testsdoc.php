<?php

    # Seja um programa para aceitar idade de uma pessoa 
    # com no mínimo 16 anos.
    

    # Entrada
    Um número inteiro

    # Classificação
    -> Pode digitar um número inteiro maior ou igual a 16
       --> Número Válido
    
    -> Pode digitar um caracter
       -->Número Inválido
    
    -> pode digitar um número inteiro menor que 16
       --> Idade mínima 16 anos

    -> Número decimal
      --> Não é um número Válido    

    # Casos de Teste
    20 -> Número válido 
    "senac" -> Número Inválido
    15 -> Idade mínima 16 anos 
    16.5 -> Não é um número válido 

    # Um programa que realize o login com e-mail e senha.

    # Entrada 
    1. Email: caracteres no formato de e-mail 
    2. Senha: Caracteres com mínimo 6

    # Classificação
    -> caracteres no formato correto de e-mail 
      --> E-mail Válido

    -> Caracteres fora do formato de e-mail
      --> E-mail inválido
    
    -> Senha maior que 6 caracteres 
      --> Senha é válida 
      
    -> Senha menor que 6 caracteres 
      --> Senha inválida 

    -> Email e senha correspondem ao usuário
      --> Usuário Autenticado 
    
    -> Email e senha não corresponder ao usuário
      --> Usuário inválido 
   
    # Casos de teste
    "caio@rj.senac.com" -> E-mail válido 
    "caiorj.com" -> E-mail inválido 
    "1234567" -> Senha inválida 
    "caio@rj.senac.com" , "123456" -> Usuário Autenticado
    "caio@rj.senac.com" , "1234569" -> Usuário Inválido

?>
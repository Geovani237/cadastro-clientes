<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes</h1>
    <?php
    $nome = "Geovani";
    $idade = 19;
    $fumante = false;
    
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante </p>";
    /*
    OPERADORES ARITMÉTICOS:
   - Adição: (+)
   - Subtração: (-)
   - Multiplicação: (*)
   - Divisão: (/)
   - Módulo - resto da divisão: (%)
    */

    /*
   OPERADORES RELACIONAIS:
    - (==) Igual a
    - (===) Idêntico, e do mesmo tipo de dados
    - (!=),(<>) Diferente de
    - (!==) Não idêntico
    - (<) Menor que
    - (>) Maior que
    - (<=) Menor ou igual a
    - (>=) Maior ou igual a
    - (<=>) Define um inteiro(-1,0,1) caso o resultado da comparação for menor que, igual ou maior que, respectivamente
    */

    /*
    OPERADORES LÓGICOS:
    */
    echo "operadores lógicos<br>";
    $fumante = true;
    echo !$fumante;
    
    if($idade >= 18) {
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa!</p>";
    }
    ?>
</body>
</html>
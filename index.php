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

    $idade = 75;
    if($idade>=18 && $fumante == false){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }else if($idade >= 70){
        echo "<p>Pessoas acima de 70 anos não podem entrar na festa</p>";
    }else{
        echo "Você não pode entrar";
    }

    $nota = 3;
    if($nota >= 8){
        echo "<p>Aprovado</p>";
    }else if($nota >= 5){
        echo "<p>Recuperação</p>";
    }else{
        echo "<p>Reprovado</p>";
    }

    $idade = 15;
    echo ($idade>=18)? "pode entrar": "rejeitado";

    $cor = "verde";
    switch ($cor) {
        case 'azul':
            echo "<p>Sua cor favorita é <strong>AZUL</strong></p>";
            break;
        case 'verde':
            echo "<p>Sua cor favorita é <strong>VERDE</strong></p>";
            break;
        case 'vermelho':
            echo "<p>Sua cor favorita é <strong>VERMELHO</strong></p>";
            break;
        default:
            echo "<p>Sua cor favorita não é verde, nem azul e nem vermelho</p>";
            break;
    }

    $dia = 8;
    switch ($dia){
        case '1':
            echo "Domingo";
            break;
        case '2':
            echo "Segunda";
            break;
        case '3':
            echo "Terça";
            break;
        case '4':
            echo "Quarta";
            break;
        case '5':
            echo "Quinta";
            break;
        case '6':
            echo "Sexta";
            break;
        case '7':
            echo "Sábado";
            break;
        default:
            echo "Dia inválido";
            break;
    }
    
    ?>
</body>
</html>
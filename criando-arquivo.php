<?php
$arquivo = fopen("clientes.txt","w");

//----array associativo----
$listaClientes = [
    [
        "nome" => "Geovani",
        "idade" => 19
    ],
    [
        "nome" => "Renata",
        "idade" => 30
    ],
    [
        "nome" => "Matheus",
        "idade" => 20
    ],
    [
        "nome" => "Julia",
        "idade" => 18
    ],
    [
        "nome" => "Fernando",
        "idade" => 47
    ],
    [
        "nome" => "Eduarda",
        "idade" => 27
    ],
    [
        "nome" => "Lucas",
        "idade" => 13
    ],
    [
        "nome" => "Fabio",
        "idade" => 50
    ],
    [
        "nome" => "Muriel",
        "idade" => 17
    ],
    [
        "nome" => "Francisco",
        "idade" => 76
    ],
    [
        "nome" => "Wanderson",
        "idade" => 35
    ],
    [
        "nome" => "Gabriel",
        "idade" => 45
    ],
    [
        "nome" => "Luiz",
        "idade" => 21
    ],
    [
        "nome" => "Angelica",
        "idade" => "44"
    ],
    [
        "nome" => "Sidnei",
        "idade" => 53
    ],
    [
        "nome" => "Giovana",
        "idade" => 5
    ],
    [
        "nome" => "Cloe",
        "idade" => 1
    ]

];

for($i=0; $i < count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);
?>
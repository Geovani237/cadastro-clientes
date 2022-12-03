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
    ]

];

print_r($listaClientes);
echo "<br>";

for($i=0; $i < count($listaClientes); $i++){

    fwrite($arquivo, $listaClientes[$i]["nome"]. "\t");
    fwrite($arquivo, $listaClientes[$i]["idade"]. "\n");
}

fclose($arquivo);
?>
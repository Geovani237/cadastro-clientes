<?php 
$pessoas = array(
    ["Nome","Idade","Cidade"],
    ["Geovani",19,"Americana"],
    ["Guto",36,"Santa Bárbara"]
);
// echo, print --> string
//print_r --> array

$arquivo = fopen("dados.csv", "a+");

foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo,$uma_pessoa,";");
}

fclose($arquivo);
?>
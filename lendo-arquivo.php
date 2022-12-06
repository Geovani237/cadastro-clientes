<?php
$nomeArquivo = "clientes.txt";
$arquivo = fopen($nomeArquivo, "r");
$conteudo = fread($arquivo, filesize($nomeArquivo));
echo $conteudo;
fclose($arquivo);
?>
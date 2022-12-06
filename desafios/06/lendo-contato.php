<?php 
$nameFile = "fornecedores.txt";
$file = fopen($nameFile,"r");
$content = fread($file, filesize($nameFile));
echo $content;
fclose($file);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
    <table border="2" class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Name, E-mail and Country</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nameFile = "fornecedores.txt";
                $file = fopen($nameFile,"r");
                while (!feof($file)){
                    $line = fgets($file, 100);
                    echo "<tr>";
                    echo "<td>$line</td>";
                    echo "</tr>";
                }
                fclose($file);
            ?>
        </tbody>
    </table>
    </div>

</div>
</body>
</html>



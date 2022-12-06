<ul>
    <?php
    $nomeArquivo = "clientes.txt";
    $arquivo = fopen($nomeArquivo, "r");
    while (!feof($arquivo)) {
        $linha = fgets($arquivo, 100);
        echo "<li>$linha</li>";
    }
    fclose($arquivo);
    ?>
</ul>



<table border=2>
    <thead>
        <tr>
            <th>Nome e idade:</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $nomeArquivo = "clientes.txt";
        $arquivo = fopen($nomeArquivo, "r");
        while (!feof($arquivo)) {
            $linha = fgets($arquivo, 100);
            echo "<tr>";
            echo "<td>$linha</td>";
            echo "</tr>";
        }
        fclose($arquivo);
        ?>
    </tbody>

</table>
<header>
<h3>Inserir Contato</h3>
</header>
<?php

    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
    $DataNascContato = mysqli_real_escape_string($conexao,$_POST["DataNascContato"]);
    
    $sql = "INSERT INTO info (
        nomeContato,
        emailContato,
        telefoneContato,
        DataNascContato)
        VALUES(
            '{$nomeContato}',
            '{$emailContato}',
            '{$telefoneContato}',
            '{$DataNascContato}'

        )";
        $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));

        echo "O registro foi inserido com sucesso!";

?>
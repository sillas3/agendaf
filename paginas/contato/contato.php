<header>
    <h3>Contato</h3>
</header>
<div>
    <a href="index.php?menuop=cad-contato">Novo contato</a>
</div>

<div>
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>

</div>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Telefone</th>
            <th>Data de Nasc.</th>
            <th>Edição</th>
            <th>Excluir</th>

        </tr>
    </thead>
    <tbody>
    <?php

    $quantidade = 10;

    $pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;

    $inicio = ($quantidade * $pagina) - $quantidade;

    $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

    $sql = "SELECT * FROM info";
    $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
    while($dados = mysqli_fetch_assoc($rs)){
    ?>
        <tr>
            <td><?=$dados["id"] ?></td>
            <td><?=$dados["nomeContato"] ?></td>
            <td><?=$dados["emailContato"] ?></td>
            <td><?=$dados["telefoneContato"] ?></td>
            <td><?=$dados["DataNascContato"] ?></td>
            <td><a href="index.php?menuop=editar-contato&id=<?=$dados["id"] ?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-contato&id=<?=$dados["id"] ?>">Excluir</a></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
<br>
<?php

$sqlTotal = "SELECT id FROM info";
$qrTotal = mysqli_query($conexao,$sqlTotal) or die( mysqli_error($conexao));
$numTotal = mysqli_num_rows($qrTotal);
$totalPagina = ceil($numTotal/$quantidade);
echo "Total de Registros: $numTotal <br>";
echo '<a href="?menuop=contatos&pagina=1">Primeira Pagina/</a>';

if($pagina>6){
    ?>
        <a href="menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a>"
    <?php
}
for($i=1;$i<=$totalPagina;$i++){

    if($i>=($pagina-5) && $i <= ($pagina+5)){
        if($i==$pagina){
            echo $i;
        }else{
            echo "<a href=\"?^menuop=contatos&pagina=$i\">$i</a>";
    
        }
    }
}

if($pagina<($totalPagina-5)){
    ?>
        <a href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> >> </a>
    <?php
}

echo "<a href=\"?menuop=contatos&pagina=$totalPagina\">Ultima Pagina</a>";

?>

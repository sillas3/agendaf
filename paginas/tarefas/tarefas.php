<header>
    <h3>Agenda</h3>
</header>
<!--
<div>
    <a href="index.php?menuop=cad-tarefa">Nova tarefas</a>
</div>
-->
<div>
    <form action="index.php?menuop=tarefas" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>

</div>

<table border="1">
    <thead>
        <tr>
            <th>Status</th>
            <th>Medico</th>
            <th>Data da consulta</th>
            <th>Hora da consulta</th>
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

    $sql = "SELECT 
    idAgenda,
    statusAgenda,
    medicoAgenda,
    DATE_FORMAT(dataAgenda, '%d/%n/%Y') AS dataAgenda,
    horaAgenda
    FROM tbagenda";
    
    $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
    while($dados = mysqli_fetch_assoc($rs)){
    ?>
        <tr>
            <td><?=$dados["idAgenda"] ?></td>
            <td><?=$dados["medicoAgenda"] ?></td>
            <td><?=$dados["dataAgenda"] ?></td>
            <td><?=$dados["horaAgenda"] ?></td>
            <td><a href="index.php?menuop=editar-agenda&id=<?=$dados["idagenda"] ?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-agenda&id=<?=$dados["idagenda"] ?>">Excluir</a></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
<br>
<?php

$sqlTotal = "SELECT idagenda FROM tbagenda";
$qrTotal = mysqli_query($conexao,$sqlTotal) or die( mysqli_error($conexao));
$numTotal = mysqli_num_rows($qrTotal);
$totalPagina = ceil($numTotal/$quantidade);
echo "Total de Registros: $numTotal <br>";
echo '<a href="?menuop=agenda&pagina=1">Primeira Pagina/</a>';

if($pagina>6){
    ?>
        <a href="menuop=agenda&pagina=<?php echo $pagina-1?>"> << </a>"
    <?php
}
for($i=1;$i<=$totalPagina;$i++){

    if($i>=($pagina-5) && $i <= ($pagina+5)){
        if($i==$pagina){
            echo $i;
        }else{
            echo "<a href=\"?^menuop=tarefas&pagina=$i\">$i</a>";
    
        }
    }
}

if($pagina<($totalPagina-5)){
    ?>
        <a href="?menuop=tarefas&pagina=<?php echo $pagina+1?>"> >> </a>
    <?php
}

echo "<a href=\"?menuop=tarefas&pagina=$totalPagina\">Ultima Pagina</a>";

?>

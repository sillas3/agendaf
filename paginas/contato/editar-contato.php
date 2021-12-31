<?php
$id = $_GET["id"];

$sql = "SELECT * FROM info WHERE id={$id}";
$rs = mysqli_query($conexao,$sql)or die ("Erro ao repurerar os dados do registro. " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);

?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
<form action="index.php?menuop=atualizar-contato" method="post">
    <div>
        <label for="id">ID</label>
        <input type="text" name="id" value="<?=$dados["id"]?>">
    </div>

    <div>
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato" value="<?=$dados["nomeContato"]?>">
    </div>

    <div>
        <label for="emailContato">E-mail</label>
        <input type="email" name="emailContato" value="<?=$dados["emailContato"]?>">
    </div>

    <div>
        <label for="telefoneContato">Telefone</label>
        <input type="text" name="telefoneContato" value="<?=$dados["telefoneContato"]?>">
    </div>


    <div>
        <label for="DataNascContato">Data de Nasc</label>
        <input type="date" name="DataNascContato" value="<?=$dados["DataNascContato"]?>">
    </div>

    <div>
    <input type="submit" value="Atualizar" name="btnAtualizar">
    </div>

</form>
</div>
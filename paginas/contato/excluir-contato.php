<header>
    <h3>Excluir Contato</h3>
</header>
<?php
$id = mysqli_real_escape_string($conexao,$_GET["id"]);
$sql = "DELETE FROM info WHERE id ='{$id}'";

mysqli_query($conexao,$sql) or die("Erro ao excluir o resgistro." . mysqli_error($conexao));
echo "Registro excluido com sucesso!";
?>
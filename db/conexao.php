<?php
include("config.php");

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) or die("Erro na conexão com o serviro!" . mysqli_connect_error()); //falta o BANCO//

?>
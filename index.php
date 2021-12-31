<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   

    <link rel="stylesheet" href="css/estilo-padrao.css">
    <title>agenda1</title>
</head>
<body>
    <header>
<div> <class="container">
        <h1>Sistema agendador</h1>
        <nav>
        <a href="index.php?menuop=home">Home</a> |
        <a href="index.php?menuop=contatos">Contato</a> |
        <a href="index.php?menuop=tarefas">Agenda </a> |
        </nav>
    </header>

    <main>
        <hr
        <?php
            $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";

            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;
                case 'contatos':
                    include("paginas/contato/contato.php");
                break;

                case 'cad-contato':
                    include("paginas/contato/cad-contato.php");
                break;

                case 'inserir-contato':
                    include("paginas/contato/inserir-contato.php");
                break;
                
                case 'excluir-contato':
                    include("paginas/contato/excluir-contato.php");
                break;

                case 'editar-contato':
                    include("paginas/contato/editar-contato.php");
                break;

                case 'atualizar-contato':
                    include("paginas/contato/atualizar-contato.php");
                break;

                case 'tarefas';
                    include("paginas/tarefas/tarefas.php");
                break;

                case 'eventos';
                    include("paginas/eventos/eventos.php");
                break;


                default:
                    include("paginas/home/home.php"); 
                break;
            }
            
        ?>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
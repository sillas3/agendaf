<header>
    <h3>Cadastro de contato</h3>
</header>
<div>
<form action="index.php?menuop=inserir-contato" method="post">
    <div>
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato">
    </div>

    <div>
        <label for="emailContato">E-mail</label>
        <input type="email" name="emailContato">
    </div>

    <div>
        <label for="telefoneContato">Telefone</label>
        <input type="text" name="telefoneContato">
    </div>


    <div>
        <label for="DataNascContato">Data de Nasc</label>
        <input type="date" name="DataNascContato">
    </div>

    <div>
    <input type="submit" value="adicionar" name="btnadicionar">
    </div>

</form>
</div>
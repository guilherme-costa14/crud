<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
$sql = "select * from clientes where id = $id";
$nome = $bairro = $email = $contato = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $bairro = $linha['bairro'];
    $email = $linha['email'];
    $contato = $linha['contato'];
}

mysqli_close($conexao);

?>
<main>
    <h2>Editar clientes</h2>
    <form method="post" action="clientes-atualizar.php?id=<?=$id;?>">
        <label>Nome: <input name = "nome" value="<?=$nome;?>"></label> <br>
        <label>Bairro: <input name = "bairro" value="<?=$bairro;?>"></label> <br>
        <label>EMAIL: <input name = "email" value="<?=$email;?>"></label> <br>
        <label>Contato: <input name = "contato" value="<?=$contato;?>"></label> <br>

        <button type="submit">Salvar</button>
    </form>

</main>

<?php include "footer.php" ?>
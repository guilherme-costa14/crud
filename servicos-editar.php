<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
$sql = "select * from servicos where id = $id";
$servico = $descricao = $preco = $categoria = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $servico = $linha['servico'];
    $descricao = $linha['descricao'];
    $preco = $linha['preco'];
    $categoria = $linha['categoria'];
}

echo $servico . $descricao . $preco . $categoria;

?>
<main>
    <h2>Editar serviço</h2>
    <form method="post" action="servicos-atualizar.php">
        <label>Serviço: <input name = "servico"></label> <br>
        <label>Descrição: <input name = "descricao"></label> <br>
        <label>Preço: <input name = "preco"></label> <br>
        <label>Categoria: <input name = "categoria"></label> <br>

        <button type="submit">Salvar</button>
    </form>

</main>

<?php include "footer.php" ?>
<?php
// requisitar os dados do formulário
$id = $_GET['id'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

// montar um sql de update
 $sql = "update servicos set servico = 
 '$servico', descricao = '$descricao', preco = '$preco', categoria = '$categoria' where id = $id";

// incluir o arquivo de conexão
include "conexao.php";

//executar o sql insert update no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: servicos-listar.php");
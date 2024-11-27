<?php
// requisitar os dados do formulário
$id = $_GET['id'];
$nome = $_POST['nome'];
$bairro = $_POST['bairro'];
$email = $_POST['email'];
$contato = $_POST['contato'];

// montar um sql de update
 $sql = "update clientes set nome = 
 '$nome', bairro = '$bairro', email = '$email', contato = '$contato' where id = $id";

// incluir o arquivo de conexão
include "conexao.php";

//executar o sql insert update no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: clientes-listar.php");
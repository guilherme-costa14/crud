<!-- grava os dados no BD -->
<?php

// requisitar os dados do formulário
$nome = $_POST["nome"];
$bairro = $_POST["bairro"];
$email = $_POST["email"];
$contato = $_POST["contato"];

// montar um sql de insert
$sql = "insert into clientes(nome, bairro, email, contato)
values('$nome', '$bairro', '$email', '$contato')";

// incluir o arquivo de conexão
include "conexao.php";

//executar o sql insert no banco de dados
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: clientes-listar.php");
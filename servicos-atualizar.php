<?php
 // requisitar os dados do formulário
$id = $_GET['id'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

 // montar um sql de update
 $sql = "update servicos set servico";

 // incluir o arquivo de conexão


 //executar o sql insert update no BD


 // fechar a conexão


 // redirecionar para a página listar
 header("Location: servicos-listar.php");
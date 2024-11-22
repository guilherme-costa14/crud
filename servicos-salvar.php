<!-- grava os dados no BD -->
 <?php

 // requisitar os dados do formulário
 $servico = $_POST["servico"];
 $descricao = $_POST["descricao"];
 $preco = $_POST["preco"];
 $categoria = $_POST["categoria"];

 // montar um sql de insert
 $sql = "insert into servicos(servico, descricao, preco, categoria)
 values('$servico', '$descricao', '$preco', '$categoria')";

 // incluir o arquivo de conexão
 include "conexao.php";

 //executar o sql insert no banco de dados
$resultado = mysqli_query($conexao, $sql);

 // fechar a conexão
mysqli_close($conexao);

 // redirecionar para a página listar
 header("Location: servicos-listar.php");
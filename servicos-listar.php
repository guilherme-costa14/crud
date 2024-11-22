<!-- Pega info do BD -->
<?php 
include "header.php"; 
include "conexao.php"; 
?>
<main>

<h2>Todos os serviços</h2>
<a href="servicos-cadastro.php">Adicionar novo serviço</a>

<table border="2">
    <tr>
        <th>SERVIÇO</th>
        <th>DESCRIÇÃO</th>
        <th>PREÇO</th>
        <th>CATEGORIA</th>
        <th>AÇÕES</th>
    </tr>
<?php

$sql = "select * from servicos";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>"; // interpolação de string
    echo "<td> {$linha['servico']} </td>";
    echo "<td> {$linha['descricao']} </td>";
    echo "<td> {$linha['preco']} </td>";
    echo "<td> {$linha['categoria']} </td>";

    echo "<td>";
    echo "<a href='servicos-excluir.php'>";
    echo "<img src='delete.png'>";
    echo "</a>";
    echo "</td>";

    echo "</tr>";
}

mysqli_close($conexao);

/*
// para debugar
echo "<pre>";
print_r($resultado);
echo "</pre>";
// fim debugar
*/
?>
</table>
</main>
<?php include "footer.php"; ?>
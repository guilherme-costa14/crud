<?php 
include "header.php"; 
include "conexao.php"; 
?>
<main>

<h2>Todos os clientes</h2>
<a href="clientes-cadastro.php">Adicionar novo cliente</a>

<table border="2">
    <tr>
        <th>NOME</th>
        <th>BAIRRO</th>
        <th>EMAIL</th>
        <th>CONTATO</th>
        <th>AÇÕES</th>
    </tr>
<?php

$sql = "select * from clientes";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>"; // interpolação de string
    echo "<td> {$linha['nome']} </td>";
    echo "<td> {$linha['bairro']} </td>";
    echo "<td> {$linha['email']} </td>";
    echo "<td> {$linha['contato']} </td>";

    echo "<td>";
    echo "<a href='clientes-excluir.php?id={$linha['id']}'>";
    echo "<img src='delete.png'>";
    echo "</a>";

    echo " <a href='clientes-editar.php?id={$linha['id']}'>";
    echo "<img src='edit.png'>";
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
<!-- Formulário -->
<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo cliente</h2>
    <form method="post" action="clientes-salvar.php">
        <label>Nome: <input name = "nome"></label> <br>
        <label>Bairro: <input name = "bairro"></label> <br>
        <label>E-mail: <input name = "email"></label> <br>
        <label>Contato: <input name = "contato"></label> <br>

        <button type="submit">Salvar</button>
    </form>

</main>

<?php include "footer.php" ?>
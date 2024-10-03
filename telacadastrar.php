<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Coontrera</title>
</head>
<body>
    <?php
        include("navbar.php")
    ?>

    <section class="tela">
        <h1>Cadastrar um novo cliente</h1>
    </section>

    <form method="POST" action="">
        <label for="Nome">Nome: </label>
        <input type="text" name="nome" placeholder="por favor coloque o nome" required>

        <label for="Sobrenome">Sobrenome: </label>
        <input type="text" name="nome" placeholder="por favor coloque o sobrenome" required>

        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" placeholder="por favor coloque o telefone" required>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="por favor coloque o email" required>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" placeholder="por favor coloque o cpf" required>

        <label for="patologia">Patologia</label>

        <label for="escoliose">Escoliose</label>
        <input type="checkbox">
    <!-- consertar (falta o botao de enviar e mais alguns campos - com amor: Felipe jose) -->
    </form>
</body>
</html>
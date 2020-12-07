<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link rel="stylesheet" href="../dist/style.css">

</head>
<body>
    
    <?= include_once("conexao.php"); ?>

    <a href="listar.php" class="link">Listar usuário</a><br>

    <h1>Cadastrar Usuário</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php">
    
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Digite seu nome completo" required>
    <br><br>

    <label>E-mail:</label>
    <input type="email" name="email" placeholder="Digite seu melhor e-mail" required>
    <br><br>

    <label>Cidade:</label>
    <input type="text" name="cidade" placeholder="Onde você mora?">
    <br><br>
    
    <input type="submit" value="Cadastrar" class="button">


    </form>

</body>
</html>
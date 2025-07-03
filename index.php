<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="POST" action="login_process.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"
            required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"
            required><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>
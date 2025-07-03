<?php 
session_start();
require 'includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare('SELECT * FROM Usuario WHERE nome = :nome AND senha = :senha');
    $stmt->execute(['nome' => $nome, 'senha' => $senha]);
    $usuario = $stmt->fetch();

    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        if ($usuario['tipoUsuario'] == 1) {
            header('Location: adminPage.php');
        } else {
            header('Location: CommonPage.php');
        }
    }
}

?>
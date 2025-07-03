<?php 
session_start();
include 'includes/crud.php';
if (
    !isset($_SESSION['usuario']) ||
    $_SESSION['usuario']['tipoUsuario'] != 1
) {
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
excluirFilme($id);
header("Location: adminPage.php");

?>
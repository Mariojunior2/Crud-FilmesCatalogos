<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "catalogo_filmes";


try {
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, 
PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

?>
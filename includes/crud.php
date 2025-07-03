<?php 
include 'conexao.php';

function listar_filmes() {
    global $pdo;
    $sql = "SELECT * FROM filmes";
    return $pdo->query($sql);
}

function buscarFilme($id) {
    global $pdo;
    $sql = "SELECT * FROM filmes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function adicionarFilme($titulo, $diretor, $ano, $genero) {
    global $pdo;
    $sql = "INSERT INTO filmes (titulo, diretor, ano, genero) VALUES (:titulo, :diretor, :ano, :genero)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':diretor', $diretor);
    $stmt->bindParam(':ano', $ano, PDO::PARAM_INT);
    $stmt->bindParam(':genero', $genero);
    return $stmt->execute();
}

function editarFilme($id, $titulo, $diretor, $ano, $genero) {
    global $pdo;
    $sql = "UPDATE filmes SET titulo = :titulo, diretor = :diretor, ano = :ano, genero = :genero WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':diretor', $diretor);
    $stmt->bindParam(':ano', $ano, PDO::PARAM_INT);
    $stmt->bindParam(':genero', $genero);
    return $stmt->execute();
}

function excluirFilme($id) {
    global $pdo;
    $sql = "DELETE FROM filmes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}

?>
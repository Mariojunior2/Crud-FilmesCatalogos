<?php
session_start();
include 'includes/header.php';
include 'includes/crud.php';
if (
    !isset($_SESSION['usuario']) ||
    $_SESSION['usuario']['tipoUsuario'] != 1
) {
    header('Location: index.php');
    exit();
}



$filmes = listar_filmes();
?>
<h2>Lista de Filmes</h2>
<table>
    <tr>
        <th>Título</th>
        <th>Diretor</th>
        <th>Ano</th>
        <th>Gênero</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($filmes as $filme) : ?>
        <tr>
            <td><?= htmlspecialchars($filme['titulo']) ?></td>
            <td><?= htmlspecialchars($filme['diretor']) ?></td>
            <td><?= htmlspecialchars($filme['ano']) ?></td>
            <td><?= htmlspecialchars($filme['genero']) ?></td>
            <td>
                <a class="button" href="editar.php?id=<?= $filme['id'] ?>">Editar</a>
                <a class="button" href="excluir.php?id=<?= $filme['id'] ?>"
                    onclick="return confirm('Deseja excluir este filme?')">
                    Excluir
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
<?php 
include 'includes/headerCommon.php';
include 'includes/crud.php';

$filmes = listar_filmes();
?>
<h2>Lista de Filmes</h2>
<table>
    <tr>
        <th>Título</th>
        <th>Diretor</th>
        <th>Ano</th>
        <th>Gênero</th>
    </tr>
    <?php foreach ($filmes as $filme) : ?>
        <tr>
            <td><?= htmlspecialchars($filme['titulo']) ?></td>
            <td><?= htmlspecialchars($filme['diretor']) ?></td>
            <td><?= htmlspecialchars($filme['ano']) ?></td>
            <td><?= htmlspecialchars($filme['genero']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
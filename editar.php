<?php 
include 'includes/header.php';
include 'includes/crud.php';

$id = $_GET['id'];
$filme = buscarFilme($id);

if($_POST) {
    editarFilme($id, $_POST['titulo'], $_POST['diretor'], $_POST['ano'], $_POST['genero']);
    header("Location: index.php");
}
?>

<h2>Editar Filme</h2>
<form method="POST">
    <label>Título</label>
    <input type="text" name="titulo" value="<?php echo $filme['titulo'];?>" required>

    <label>Diretor</label>
    <input type="text" name="diretor" value="<?php echo $filme['diretor'];?>" required>

    
    <label>Ano</label>
    <input type="number" name="ano" value="<?php echo $filme['ano'];?>" required>

    
    <label>Gênero</label>
    <input type="text" name="genero" value="<?php echo $filme['genero'];?>" required>

    <input type="submit" value="Salvar Alterações">
</form>

<?php include 'includes/footer.php'; ?>
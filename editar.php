<?php
include("conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM contatos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
?>

<h1>Editar Contato</h1>
<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $dados['nome']; ?>"><br>
    Telefone: <input type="text" name="telefone" value="<?php echo $dados['telefone']; ?>"><br>
    <input type="submit" value="Atualizar">
</form>

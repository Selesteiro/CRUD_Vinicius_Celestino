<?php
include("conexao.php");

$sql = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Meus Contatos</title>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <a href="form_cadastro.php">Cadastrar Novo</a>
    <br><br>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php while ($coluna = mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $coluna['nome']; ?></td>
            <td><?php echo $coluna['telefone']; ?></td>
            <td>
                <a href="form_editar.php?id=<?php echo $coluna['id']; ?>">Editar</a>
                <a href="excluir.php?id=<?php echo $coluna['id']; ?>">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

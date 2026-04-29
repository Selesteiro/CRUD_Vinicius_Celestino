<?php
include("conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contatos (nome, telefone) VALUES ('$nome', '$telefone')";

if(mysqli_query($conexao, $sql)) {
    header("Location: index.php");
} else {
    echo "Deu ruim no cadastro";
}
?>

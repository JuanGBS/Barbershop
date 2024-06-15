<?php
include "conexao.php";

$Nome = $_POST['Nome'] ?? '';
$Senha = $_POST['Senha'] ?? '';
$Email = $_POST['Email'] ?? '';

$sql = "INSERT INTO usuario (Nome, Email, Senha) VALUES ('$Nome', '$Email', '$Senha')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
    exit();
} else {
    if (mysqli_errno($conn) == 1062) {
        // Armazene a mensagem de erro em uma sessão para exibir na página de cadastro
        session_start();
        $_SESSION['erro'] = "Erro: $Nome já está cadastrado.";
    } else {
        session_start();
        $_SESSION['erro'] = "Erro ao cadastrar $Nome.";
    }
    header("Location: ../cadastro.php");
    exit();
}
?>

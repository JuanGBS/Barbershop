<?php
session_start();

if (!isset($_SESSION['Email']) || !isset($_SESSION['Senha'])) {
    header("Location: ../login.php");
    exit(); 
}

$emailUsuario = $_SESSION['Email'];

$servername = "localhost";
$username = "id22320465_root"; 
$password = "Senha-010203"; 
$dbname = "id22320465_bancobarbearia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "DELETE FROM agenda WHERE Email = '$emailUsuario' AND Data >= CURDATE()";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Agendamento cancelado com sucesso!');
            window.location.href = '../agendamento.php'; 
          </script>";
} else {
    echo "<script>
            alert('Erro ao cancelar agendamento. Por favor, tente novamente.');
            window.location.href = '../agendamento.php'; 
          </script>";
}

$conn->close();
?>

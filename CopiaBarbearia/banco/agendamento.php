<?php
session_start();

if (!isset($_SESSION['Email']) || !isset($_SESSION['Senha'])) {
    header("Location: ../login.php");
    exit(); 
}

$emailUsuario = $_SESSION['Email'];
$nome = $_POST['name'] ?? '';
$telefone = $_POST['phone'] ?? '';
$data = $_POST['date'] ?? '';
$hora = $_POST['time'] ?? '';

$servername = "localhost";
$username = "id22320465_root"; 
$password = "Senha-010203"; 
$dbname = "id22320465_bancobarbearia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se já existe um agendamento para o mesmo email
$sql = "SELECT * FROM agenda WHERE Email = '$emailUsuario' AND Data >= CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
            alert('Você já possui um agendamento em aberto!');
            window.location.href = '../agendamento.php'; 
          </script>";
} else {
    $sql = "INSERT INTO agenda (Nome, Email, Telefone, Data, Hora) VALUES ('$nome', '$emailUsuario', '$telefone', '$data', '$hora')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Agendamento realizado com sucesso!');
                window.location.href = '../agendamento.php'; 
              </script>";
    } else {
        echo "<script>
                alert('Erro ao realizar agendamento. Por favor, tente novamente.');
                window.location.href = '../agendamento.php'; 
              </script>";
    }
}

$conn->close();
?>

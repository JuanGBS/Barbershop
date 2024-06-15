<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['Email']) || !isset($_SESSION['Senha'])) {
    header("Location: ../login.php");
    exit(); 
}

$emailUsuario = $_SESSION['Email'];
$servername = "localhost";
$username = "id22320465_root"; 
$password = "Senha-010203"; 
$dbname = "id22320465_bancobarbearia";

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM agenda WHERE Email = '$emailUsuario' AND Data >= CURDATE()";
$result = $conn->query($sql);

$agendamentoEmAberto = $result->num_rows > 0;

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="assets/agendamento.css">
</head>
<body>
    <div class="container">
        <a href="index.php"><button>Voltar</button></a>
        <h1>Agendamento</h1>

        <?php if ($agendamentoEmAberto): ?>
            <script>alert('Você já possui um agendamento em aberto!');</script>
            <p>Você já possui um agendamento em aberto. Por favor, cancele seu agendamento atual antes de marcar um novo.</p>
            <form id="cancel-appointment-form" action="banco/cancelar_agendamento.php" method="post">
                <button type="submit">Cancelar Agendamento</button>
            </form>
        <?php else: ?>
            <form id="appointment-form" action="banco/agendamento.php" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="<?php echo $emailUsuario; ?>" readonly>

                <label for="phone">Telefone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="date">Data:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Hora:</label>
                <input type="time" id="time" name="time" required>

                <button type="submit">Agendar</button>
            </form>
        <?php endif; ?>

    </div>
</body>
</html>

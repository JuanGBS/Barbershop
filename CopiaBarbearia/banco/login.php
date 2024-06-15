<?php
session_start();

if(isset($_POST['Email']) && isset($_POST['Senha'])) {
    $servername = "localhost";
    $username = "id22320465_root"; 
    $password = "Senha-010203"; 
    $dbname = "id22320465_bancobarbearia";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $sql = "SELECT * FROM usuario WHERE Email = '$email' AND Senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['Email'] = $email;
        $_SESSION['Senha'] = $senha;
        
        header("Location: ../index.php");
        exit(); 
    } else {
        echo "<script>
                alert('E-mail ou senha incorretos. Por favor, tente novamente.');
                window.location.href = '../login.php'; // Redirecionar de volta para a página de login
              </script>";
    }

    $conn->close();
} else {
    
    header("Location: login.php");
    exit(); 
}
?>

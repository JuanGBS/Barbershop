<?php
$servername = "localhost";
$username = "id22320465_root"; 
$password = "Senha-010203"; 
$dbname = "id22320465_bancobarbearia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

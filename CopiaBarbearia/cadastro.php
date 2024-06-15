<?php
session_start();
if (isset($_SESSION['erro'])) {
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/cadastro.css">
</head>
<body>
    <script src="login.js"></script>
    <div class="login-page">
        <div class="form">
          <button onclick="window.location.href='index.php';">Voltar para a Página Inicial</button>
          <form class="register-form" action="banco/cadastro.php" method="post">
            <input type="email" id="email" name="Email" placeholder="email" required/>
            <input type="text" id="name" name="Nome" placeholder="nome" required/>
            <input type="password" id="password" name="Senha" placeholder="senha" required/>
            <button type="submit">Finalizar Cadastro</button>
            <p class="message">Já possui cadastro? <a href="login.php">Entrar</a></p>
          </form>
        </div>
    </div>
</body>
</html>

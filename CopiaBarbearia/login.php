<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/login.css">
</head>
<body>
  <script src="login.js"></script>
  <div class="login-page">
    <div class="form">
      <button onclick="window.location.href='index.php';">Voltar para a Página Inicial</button>
      <form class="login-form" action="banco/login.php" method="post"> 
          <input type="email" placeholder="email" name="Email">  
          <input type="password" placeholder="senha" name="Senha">  
            <button type="submit">Entrar</button>
        <p class="message">Não possui cadastro?
            <a href="cadastro.php">Cadastrar</a></p>
      </form>
    </div>
  </div>
</body>
</html>

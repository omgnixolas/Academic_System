<?php
  session_start();
  unset($_SESSION['usuario']);
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body >
  <div class="container_back">
  <form action="login.php" method="POST">
    <div class="imgcontainer">
      <img src="imagens/user.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
    <?php
    if(isset($_SESSION['usuario_invalido'])){echo("<p class=\"erro\">Usuário ou senha incorreta</p>"); unset($_SESSION['usuario_invalido']);}  ?>
      <label><b>Usuário</b></label>
      <input type="text"  autocomplete="off" placeholder="@" name="usuario" required>
      <label><b>Senha</b></label>
      <input type="password" autocomplete="off" placeholder="*" name="senha" required>
      <button type="submit">Login</button>
  </form>
  <form action="newcad.php">
      <a href="newcad.php"><button class="cad">Cadastrar-se</button></a>
  </form>
    </div>

    
     
    
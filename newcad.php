<?php
session_start();
?>

<!DOCTYPE html>
<head>
	<script type="text/javascript" src="jquery/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="jquery/jquery.maskedinput-1.1.4.pack.js"/></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
    });
    $(document).ready(function(){
        $("#rg").mask("99.999.999");
    });
    </script>
    <meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/newcad.css">
	<script src="https://kit.fontawesome.com/2826831c4d.js"></script>
</head>
<body>	
	<div class="containerback">
		<?php
			include_once("verifica_dados.php");
		?>
	   <form action="cad_bd.php" method="POST">
	    <div class="inputWithIcon">
		  <input type="text" placeholder="Seu nome" name="nome" required autocomplete="off">
		  <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
		</div>
		<div class="inputWithIcon">
		  <input type="text" placeholder="Usuário" name="usuario"  required autocomplete="off">
		  <i class="fas fa-at"></i>
		</div>
		<div class="inputWithIcon">
		  <input type="password" placeholder="Sua senha" name="senha"  required autocomplete="off">
		  <i class="fas fa-key"></i>
		</div>
		<div class="inputWithIcon">
		  <input type="date" placeholder="Data de nascimento" name="data_nasc"  required autocomplete="off">
		  <i class="far fa-calendar-alt"></i>
		</div>
		<div class="inputWithIcon">
		  <input type="text" placeholder="Email" name="email"  required autocomplete="off">
		  <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
		</div>
		<div class="inputWithIcon">
		  <input type="text" placeholder="CPF" class="cpf" id="cpf" name="cpf"  required autocomplete="off">
		 <i class="fas fa-id-card"></i>
		</div>
		<div class="inputWithIcon">
		  <input type="text" placeholder="RG" class="rg" id="rg" name="rg"  required>
		  <i class="fas fa-id-card"></i>
		</div>

		<input type="submit" value="enviar">
	</div>

	</form>
	</div>


</body>
</html>
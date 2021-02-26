<?php
 session_start();
 include_once("verifica_login.php");
 include('include/lib.php');
 require('cnx.php');
 
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/perfil.css">
</head>
<body>
	<div class="header"> 
		 	<ul class="navigation">
 	 			<a href="turmas.php"><li>Turmas</li></a>
 	 			<a href="avaliacao.php"><li>Avaliações</li>
 	 			<a href="perfil.php"><li>Perfil</li></a>
 	 			<a href="sair.php"><li>Sair</li></a>
 	 		</ul>
 	 	<div class="divlogo"> 
 	 		<img src="imagens/ra.png">
 	 	</div>
	</div>
	<div class="dados">
		<p class="titulobig"> Dados pessoais</p>
		<div class="logouser">
			<img src="imagens/userlogo.png">
		</div>
		<table border="0" cellspacing="10">
		<?php
		$res= pg_query($cnx,"SELECT * FROM login where usuario = '$_SESSION[usuario]'");
		while($reg=pg_fetch_object($res)){
				echo("<tr><td align=\"right\"><b>Nome: </b></td><td align=\"left\">$reg->nome</td><td align=\"right\"><b>CPF:</b></td><td  align=\"left\"> $reg->cpf</td><td align=\"right\"> <b>Data de nascimento:</b></td><td  align=\"left\"> $reg->data_nasc</td></tr><tr><td align=\"right\"><b>Email:</b></td><td  align=\"left\"> $reg->email</td><td align=\"right\"><b>RG:</b></td><td  align=\"left\">$reg->rg</td><td align=\"right\"><b>Usuário:</b><td align=\"left\">$reg->usuario</tr>
					");
				}	
		?>
	</table>
	</div>
	<div class="turma_info">
		<p class="titulobig"><font color="blue"> Sua turma: <?php 
			$res = pg_query($cnx,"SELECT login.cod_turmas FROM login WHERE usuario = '$_SESSION[usuario]'");
			while($reg = pg_fetch_object($res)){
				echo("");
			}
			 ?> </font></p>

		<div class="textodisc">
			<p> Disciplinas:<a href="avaliacoes.php?disc=geo"> Geografia, </a><a href="avaliacoes.php?disc=mat"> Matemática, </a><a href="avaliacoes.php?disc=bio">Biologia,</a><br><a href="avaliacoes.php?disc=inf"> Informática,</a>
			<a href="avaliacoes.php?disc=edu"> Educação Física,</a><a href="avaliacoes.php?disc=quí"> Química,</a><a href="avaliacoes.php?disc=fís"> Física.</a> </p>
		</div>
		<div class="imgturma">
			<img src="imagens/escola.png">
		</div>
	<div>
</body>
</html>
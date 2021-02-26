<?php
	session_start();
	include_once('include/lib.php');
	include_once("verifica_login.php");
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/sala.css">
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
 	 	<a href="painel.php"><img src="imagens/ra.png"></a>
 	</div>
	</div>
	<div class="turma_info">
			<?php echo("<p class=\"info_text\">Lista de alunos da turma: $_GET[turma]");?>
	</div>
	<div class="fundoalunos">
		<table class="lista">
			<tr><th>NOME</th><th>CPF</th></tr>
				<?php
				$turma = $_GET['turma'];
				$res = pg_query($cnx,"
					SELECT * FROM login where turmas = '$turma'
					order by nome asc
					");
				while($reg=pg_fetch_object($res)){
								echo("<tr><td>$reg->nome</td><td>$reg->cpf</td></tr>");
							}
				?>
		</table>
	</div>
</body>
</html>
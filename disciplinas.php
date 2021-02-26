<?php
session_start();
include_once('include/lib.php');
include_once("verifica_login.php");
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/disciplinas.css" />
</head>
<body>
	<div class="header"> 

		 	<ul class="navigation">
 	 			<a href="turmas.php"><li>Turmas</li></a>
 	 			<a href="disciplinas.php"><li>Avaliações</li>
 	 			<a href="perfil.php"><li>Perfil</li></a>
 	 			<a href="sair.php"><li>Sair</li></a>
 	 		</ul>
 	 	<div class="divlogo"> 
 	 		<a href="painel.php"><img src="imagens/ra.png"></a>
 	 	</div>
	</div>
	<br><br><br>
	<!--
		<p ><font size="20">Selecione uma disciplina</font></p>
		<?php
		/*
		$_SESSION['turma'] = $_GET['turma'];
		$res = pg_query($cnx, "SELECT * FROM disciplina");

		while($reg = pg_fetch_object($res)){
			
			echo("<a href=\"notas.php?disciplina=$reg->descricao\"><div class=\"disc\">$reg->descricao</div></a>");
		}
		*/
		?>
		
		-->

		
		<?php
			$db=new banco();
			head();
			$db->consulta("select * from disciplina");
			$db->lista2('disciplina');
			foot();
		?>


	
</body>
</html>
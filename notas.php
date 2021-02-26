
<?php
	session_start();
	include('include/lib.php');
	include_once("verifica_login.php");
	$db=new banco();
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/painel.css">
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
	<br><br><br><br>
</body>
</html>

<?php
	head();

	$_SESSION['cod_turmas'] = $_GET['cod_turmas'];
	$_SESSION['cod_disciplina'] = $_GET['cod_disciplina'];

	$db->consulta("select login.nome, avaliacao.nota, disciplina.descricao from login
					inner join avaliacao on
					login.cod_usuario = avaliacao.cod_usuario
					inner join disciplina on
					avaliacao.cod_disciplina = disciplina.cod_disciplina
					inner join turmas on 
					turmas.cod_turmas = login.cod_turmas
					where turmas.cod_turmas = $_GET[cod_turmas] and disciplina.cod_disciplina = $_GET[cod_disciplina]
	 ");
	$db->cheader=array('Nome','Nota','Disciplina','Opções');
	$db->lista2('login','altnotas.php','frmaval.php','alterar.php');
	foot();
?>
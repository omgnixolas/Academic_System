<?php
   session_start();
   require("include/lib.php");
   include_once("verifica_login.php");
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
   <br><br><br>
</body>
</html>


<?php
   head();
   $db=new banco(); 
   seguranca();
   if(isset( $_GET['alt'])){
   $_SESSION['usuario'] = $_GET['alt'];
   }
   
   $frm=new form('Notas de alunos','alterar.php','get');
   $frm->hidden('alt');
   $frm->text('nome','Nome do aluno',50,20,'*');
   $frm->text('nota','Valor de Venda',50,20,'*');
   $db->consulta("select * from grupo order by desgru"); 
   if(isset($_GET['alt'])){
      $db->consulta("select login.nome, avaliacao.nota from login
      inner join avaliacao 
      on login.cod_usuario = avaliacao.cod_usuario
      where login.nome='$_GET[alt]'"); 
      $frm->carrega($db->res);
   }   
   $frm->show('frm');
   foot();
   ?>


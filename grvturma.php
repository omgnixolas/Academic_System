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
   
   $frm=new form('Notas de alunos','altturma.php?','post');
   $frm->text('nome','Nome do aluno',50,20,'*');
   $frm->text('cpf','CPF do aluno',50,20,'*');
   $frm->text('email','Email',50,20,'*');
   $db->consulta("select cod_turmas, descricao from turmas");
   $frm->dbselect('cod_turmas','turmas', $db->res);

  
   if(isset($_GET['alt'])){
      $frm->hidden('alt');      
      $db->consulta("select * from turmas,login
      where login.cod_turmas = '$_SESSION[cod_turmas]'
      and login.nome='$_GET[alt]'"); 
      $frm->carrega($db->res);
   }  else {
      $frm->hidden('inc');
   }
   $frm->show('frm');
   foot();
   ?>


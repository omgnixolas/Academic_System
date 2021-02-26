
  <?php
   session_start();
   include_once("verifica_login.php");
   include('include/lib.php');
   require('cnx.php');
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
	<br><br><br>
</body>
</html>


  <?php
  head();
  $db=new banco();
  $frm = new form('Seleção de turma','notas.php','get');
   $db->consulta("select cod_turmas, descricao from turmas"); 
   $frm->dbselect('cod_turmas','turmasss',$db->res,'*');
   $db->consulta("select cod_disciplina, descricao from disciplina"); 
   $frm->dbselect('cod_disciplina','Disciplina',$db->res,'*');
   $frm->show('frm');
   foot();
?>   

 
 































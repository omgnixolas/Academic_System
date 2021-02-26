<?php
session_start();
include_once('include/lib.php');
include_once("verifica_login.php");
$db=new banco();
head();
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
</body>
</html>
<?php
echo("<br><br><br>");
head();

if(isset($_GET['cod_turmas'])){
	$_SESSION['cod_turmas'] = $_GET['cod_turmas'];
}
$frm=new form('Turmas cadastradas');
$db->consulta("select cod_turmas,descricao from turmas"); 
$frm->dbselect('cod_turmas','Turmas Cadastradas',$db->res,'*');
$frm->campo['cod_turmas']['value']= $_SESSION['cod_turmas'];
$frm->show('frm',"<input style=\"width:100px\" class=\"btn btn-warning\"  type=\"submit\" value=\"OK\">");
echo("<br>");
$db->consulta("select login.nome, login.cpf,login.email, turmas.descricao from login inner join turmas
on login.cod_turmas = turmas.cod_turmas
where login.cod_turmas = '$_SESSION[cod_turmas]'
");
$db->cheader=array('Nome','CPF','Email','Turma','Opções');
$db->lista2('turmas','grvturma.php','grvturma.php','altturma.php');
?>














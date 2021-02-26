<?php
	session_start();
	require('include/lib.php');
	$usuario = pg_escape_string($_POST['usuario']);
	$senha = pg_escape_string($_POST['senha']);
 	$db=new banco();
	 $db->consulta("select usuario,senha from login where usuario='{$usuario}' and senha=md5('{$senha}')");
	 if($reg=@pg_fetch_object($db->res)){
		 $_SESSION['usuario'] = $usuario;
		header("location:painel.php");
	 }else{
		echo("<script>alert('Erro no login...');document.location='index.php';</script>");
	 }
 ?>
































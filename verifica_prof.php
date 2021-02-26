<?php 
 	session_start();
	include_once('include/lib.php');
 	$nome = pg_escape_string($_POST['prof_nome']);
 	$senha= pg_escape_string($_POST['prof_senha']);
 	$res = pg_query("select * from professor where nome = '{$nome}' and codigo = '{$senha}'");
 	$linhas = pg_num_rows($res);
 	if($linhas > 0){
 		$_SESSION['professor_existe'] = true;
 		header('location: avaliacao.php');
 	} else {
 		$_SESSION['professor_invalido'] = true;
 		header('location: login_prof.php');
 		exit();
 	}

?>
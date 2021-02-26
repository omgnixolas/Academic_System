<?php
	session_start();
	include_once('include/lib.php');

	//Verifica se o cpf digitado já está cadastrado no banco
	$verificacpf = pg_query("select cpf from login where cpf = '$_POST[cpf]'");
	$count1 = pg_num_rows($verificacpf);
	//Verifica se o usuario digitado já está cadastrado no banco
	$verificausuario = pg_query("select usuario from login where usuario = '$_POST[usuario]'");
	$count = pg_num_rows($verificausuario);
	//Verifica se o rg digitado já está cadastrado no banco
	$verificarg = pg_query("select rg from login where rg = '$_POST[rg]'");
	$count2 = pg_num_rows($verificarg);
	
	//notifica ao usuário que o dado está incorreto através de $_SESSION
	$count = pg_num_rows($verificausuario);
	if($count != 0){
	$_SESSION['usuario_invalido'] = true;
	header('location:newcad.php');
	exit();
	} else if($count1 != 0){
	$_SESSION['cpf_invalido'] = true;
	header('location:newcad.php');
	exit();
	} else if($count2 != 0){
	$_SESSION['rg_invalido'] = true;
	header('location:newcad.php');
	exit();
	} else {
	//Caso os dados forem válidos, o cadastro no sistema é feito
	$resultado = pg_query("INSERT INTO login(nome,senha,usuario,data_nasc, email,cpf,rg)
	VALUES ('$_POST[nome]',md5('$_POST[senha]'),'$_POST[usuario]','$_POST[data_nasc]','$_POST[email]','$_POST[cpf]','$_POST[rg]')");
		$_SESSION['login_sucesso'] = true;
		header('location:newcad.php');
		exit();
	}
?>
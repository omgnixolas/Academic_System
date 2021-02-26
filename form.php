<?php
require ("include/lib.php");
head();
$db = new banco();
$frm = new form ('usuarios', 'cadastra.php');
//$frm->text ('usuario','nome',50,45,'*');
$frm->password ('senha','Senha',30,25,'*');
$frm->date('data','Data','*');
$frm->time ('hora','Hora','*');
$frm->hidden('nome');
$db->consulta("select cod_turmas, descricao from turmas");
$frm->dbselect('descricao','turmas', $db->res);
$frm->select('usuario','Período Letivo',array('aluno1','aluno2','aluno3'), '*');
$db->consulta("select usuario from login");
$frm->radio('sexo','sexo', array('m','f'), array('masc','fem'));
$frm->carrega($db->res);
$frm->show('frm');
foot();
?>
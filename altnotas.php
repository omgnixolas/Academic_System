<?php
   session_start();
   require("include/lib.php");
   $db=new banco();
   seguranca();
   
   head();
   $db=new banco();
   $frm = new form('Alteração de alunos','altalunos.php','post');
   $frm->hidden('inc');
   $frm->text('nota_aluno','Nota do aluno',50,20,'*');
   $db->consulta("select login.cod_usuario, nome from login
   inner join avaliacao on
   login.cod_usuario = avaliacao.cod_usuario
   where cod_disciplina = '$_SESSION[cod_disciplina]' and cod_turmas='$_SESSION[cod_turmas]'");
   $frm->dbselect('cod_usuario','Nome', $db->res);
   $frm->show('frm');

   foot();
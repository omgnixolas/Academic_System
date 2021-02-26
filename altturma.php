<?php
   session_start();
   require("include/lib.php");
   head();   
   $db=new banco();
   seguranca();
   
   
   if(isset($_GET['exc'])){
      $db->grava("Delete from login where login.nome='$_GET[exc]'",
       "Usuário foi excluido",
       "Erro ao excluir funcionário",
       "turmas.php?cod_turmas=1");
   }elseif(isset($_POST['alt'])){
      $db->grava("UPDATE login
      SET nome = '$_POST[nome]', cpf = '$_POST[cpf]', email = '$_POST[email]'
      WHERE  nome = '$_SESSION[usuario]' and cpf = '$_POST[cpf]';",
         "Grupo Alterado",
         "erro no update",
         "turmas.php");
   }else{
      $db->grava("insert into login(nome,cpf,email,cod_turmas)
                  values('$_POST[nome]','$_POST[cpf]','$_POST[email]','$_POST[cod_turmas]');",
         "Aluno inserido",
         "erro",
         "turmas.php");
  }      
   foot();
?>
<?php
   session_start();
   require("include/lib.php");
   head();   
   $db=new banco();
   seguranca();
   
   $_SESSION['nome'] = $_GET['nome'];
   $_SESSION['nota'] =  $_GET['nota'];
   
   if(isset($_GET['exc'])){
      $db->grava("DELETE FROM avaliacao X USING login AS A
      WHERE A.cod_usuario = X.cod_usuario and
      a.nome = '$_GET[exc]'",
       "Grupo Excluído",
       "Erro ao excluir o grupo",
       "notas.php?cod_turmas=$_SESSION[cod_turmas]&cod_disciplina=$_SESSION[cod_disciplina]");
   }elseif(isset($_GET['alt'])){
      $db->grava("UPDATE avaliacao
      SET nota = '$_GET[nota]'
      FROM login
      WHERE login.cod_usuario = avaliacao.cod_usuario and login.nome = '$_SESSION[usuario]';
      update login set nome = '$_GET[nome]'
      from avaliacao
      WHERE login.cod_usuario = avaliacao.cod_usuario and login.nome = '$_SESSION[usuario]'",
         "Grupo Alterado",
         "erro no update",
         "notas.php?cod_turmas=$_SESSION[cod_turmas]&cod_disciplina=$_SESSION[cod_disciplina]");
   }else{
      $db->grava("insert into grupo (desgru) values ('$_POST[desgru]');",
         "Grupo Inserido",
         "erro",
         "notas.php?cod_turmas=$_SESSION[cod_turmas]&cod_disciplina=$_SESSION[cod_disciplina]");
  }      
   foot();
?>


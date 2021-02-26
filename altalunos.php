<?php
session_start();
   require("include/lib.php");
   head();   
   $db=new banco();
   seguranca();

   if(isset($_POST['inc'])){
    $db->grava("INSERT INTO avaliacao(nota,cod_usuario,cod_disciplina)
                VALUES('$_POST[nota_aluno]','$_POST[cod_usuario]','$_SESSION[cod_disciplina]')",
     "Insert com sucess",
     "Erro",
     "notas.php?cod_turmas=$_SESSION[cod_turmas]&cod_disciplina=$_SESSION[cod_disciplina]");
   }
   foot();
?>
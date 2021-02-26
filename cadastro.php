<?php
    session_start();
    include_once('include/lib.php');
    include_once("verifica_login.php");
?>

<!DOCTYPE html>
<head>
    <script type="text/javascript" src="jquery/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="jquery/jquery.maskedinput-1.1.4.pack.js"/></script>
    <script type="text/javascript">

    //máscara para cpf (xxx.xxx.xxx-xx)
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
    });
    $(document).ready(function(){
        $("#rg").mask("99.999.999");
    });
    </script>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="css/cad.css">
</head>
<body>
        <form action="cad_bd.php" method="POST">
            <?php
                if(isset($_SESSION['usuario_invalido'])){
            ?>
            <div class="error"><p class="warning">Log de erro: USUÁRIO INVÁLIDO (O usuário já está cadastrado)</p> </div>
            <?php
            } else if(isset($_SESSION['cpf_invalido'])) { 
            ?>
            <div class="error"><p class="warning">Log de erro: CPF INVÁLIDO (O cpf já está vinculado a outra conta)</p> </div>
            <?php
            } else if(isset($_SESSION['rg_invalido'])) { 
            ?>
            <div class="error"><p class="warning">Log de erro: RG INVÁLIDO (O rg já está vinculado a outra conta) </p></div>
            <?php
            } else if(isset($_SESSION['login_sucesso'])) {
                ?>
               <div class="sucess"><p class="warning">Log: O usuário foi cadastrado com sucesso!</p> </div>
                <?php
            } else {
                echo("Insira seus dados");
            }
            //libera as variáveis de sessão
            unset($_SESSION['login_sucesso']);
            unset($_SESSION['rg_invalido']);
            unset ($_SESSION['cpf_invalido']);
            unset($_SESSION['usuario_invalido']);
            ?>

        <div class="div_fundo">
            <BR>
            <p class="title"> CADASTRO  </p>
            <div>
               <img src="pessoa.png">
               <p><input type="text" name="nome" required placeholder="Nome"></p>
            </div>
            
            <div>
               <img src="senha.png">
               <p><input type="password" name="senha" required placeholder="Senha"></p>
            </div>

            <div>
                 <img src="arroba.png">
               <p><input type="text" name="usuario" required placeholder="Usuário"></p>
            </div>
            <div>
                <img src="calendario.png">
               <p><input type="date" name="data_nasc" required placeholder="Data de nascimento"></p>
            </div>
            <div>
               <img src="email.png">
               <p><input type="text" name="email" required placeholder="Email"></p>
            </div>

            <div>
               <img src="cpf.png">
               <p><input type="text" class="cpf" id="cpf" name="cpf" placeholder="CPF"></p>
            </div>
            <div>
                <img src="rg.png">
               <p><input type="text" class="rg" id="rg" name="rg" placeholder="RG"></p>
               <input type="submit" value="CADASTRAR" class="botao"><br>
        </div>
        </div>
        </form>
        <p class="redirecionar"><a href="index.php"> Voltar para o login</a></p>
</body>
</html>
  <?php 
   include_once("verifica_login.php");
   echo("<label>Insira seus dados</label><BR>");
   
            if(isset($_SESSION['usuario_invalido'])){
           echo("<label class=\"red\">Log: Usuário inválido.</label>");
            } else if(isset($_SESSION['cpf_invalido'])) { 
           echo("<label class=\"red\">Log: RG inválido.</label>");
            } else if(isset($_SESSION['rg_invalido'])) { 
          echo("<label class=\"red\">Log: RG inválido.</label>");
           } else if(isset($_SESSION['login_sucesso'])) {
            echo("<label class=\"red\">Sucesso!</label>");
            header('location:index.php');  
            } 
            
            unset($_SESSION['login_sucesso']);
            unset($_SESSION['rg_invalido']);
            unset ($_SESSION['cpf_invalido']);
            unset($_SESSION['usuario_invalido']);

            
            ?>
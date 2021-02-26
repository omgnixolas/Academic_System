<?php 
	session_start();
	include('include/lib.php');
	include_once("verifica_login.php");
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/painel.css">
</head>
<body>
	<div class="header"> 
		 	<ul class="navigation">
 	 			<a href="turmas.php"><li>Turmas</li></a>
 	 			<a href="avaliacao.php"><li>Avaliações</li>
 	 			<a href="perfil.php"><li>Perfil</li></a>
 	 			<a href="sair.php"><li>Sair</li></a>
 	 		</ul>
 	 	<div class="divlogo"> 
 	 		<a href="painel.php"><img src="imagens/ra.png"></a>
 	 	</div>
	</div>

	<a href="login_prof.php"><div class="mid-box">
	<img class="profimg" src="imagens/professor.png" width="220" height="230" align="left"><p class="h1">Professor</p>
	<p class="h0">Tem o controle sobre os seguintes<br> registros: <b>notas, faltas, avaliações<br> e estado de matrícula</b>. Pode alterar<br> dados a qualquer momento, juntamente<br> com a coordenação. </p>
	</div></a>
	<a href="login.php"><div class="mid-box2">
	<img src="imagens/aluno.png" class="bigimg" align="left"><p class="h1-1">Aluno</p>
	<p class="h0-1">O aluno cadastrado no sistema tem acesso a todo o seu histórico escolar:
	<b>notas, faltas, dependências e situação de matrícula</b>. </p>
	</div></a>
	<div class="detalhes">
		<div class="imagens/imghist">
		<img src="imagens/universidade.jpg" align="left">
		</div>
		<div class="texthist">
			História da instituição
			<p class="textmin"> Fundada em 1636 pela Assembleia Estadual de Massachusetts, e logo depois nomeada em homenagem a John Harvard, seu primeiro benfeitor, a universidade é a mais antiga instituição de ensino superior dos Estados Unidos.[12] Embora nunca tenha sido formalmente afiliada a qualquer denominação religiosa, a faculdade inicial forneceu ensino principalmente para o clero congregacionalista e unitarista. Seu currículo e corpo discente foram gradualmente secularizados ao longo do século XVIII e, por volta do século XIX, Harvard tinha emergido como o estabelecimento cultural central entre as elites de Boston.[13][14] Após a Guerra Civil Americana, o então reitor Charles William Eliot (1869-1909) transformou a faculdade e as escolas profissionais afiliadas em uma moderna universidade de pesquisa; Harvard foi membro fundador da Associação de Universidades Americanas em 1900.[15] James Bryant Conant conduziu a universidade durante a Grande Depressão e o início da Segunda Guerra Mundial e começou a reformar a grade curricular e a liberalizar admissões após a guerra. A faculdade de graduação tornou-se mista após a sua fusão com o Radcliffe College em 1977. Drew Gilpin Faust foi eleita a 28ª reitora em 2007 e é a primeira mulher a liderar a instituição.
			</p>
		</div>
	</div>
</body>
</html>

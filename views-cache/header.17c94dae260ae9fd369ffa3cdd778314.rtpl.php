<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTIPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delicada Mulher</title>
	<!-- <link rel="icon" href="imagens/favicon.png"> -->

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/res/site/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="/res/site/css/font-awesome.min.css">
	<link rel="stylesheet" href="/res/site/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/res/site/css/owl.carousel.css">
	<link rel="stylesheet" href="/res/site/css/delicada.css">
	<link rel="stylesheet" href="/res/site/css/responsive.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<div class="modal fade" id="janela">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4 class="modal-title">Sobre a Delicada Mulher - Moda Feminina</h4>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<p>Desde 2007 desenvolvemos Soluções em TI e Internet, buscando auxiliar nossos clientes na conquista do sucesso e satisfazer os usuários que utilizam nossas soluções.</p>

						<p>Acreditamos que através da Tecnologia e da Internet, podemos tornar as empresas mais rentáveis e melhorar as experiências diárias das pessoas.</p>

						<h5>Missão:</h5>

						<p>Fortalecer as organizações e melhorar seus resultados, com de soluções de alta qualidade em tecnologia da informação.</p>

						<h5>Acreditamos:</h5>

						<p>Na Tecnologia como meio para melhorar a vida das pessoas;</p>
						<p>Na Tecnologia como ferramenta para tornar as empresas mais eficientes e lucrativas;</p>
						<p>Na importância da qualidade em tudo;</p>
						<p>Na vantagem do preço justo, com trabalho sério e honesto;</p>
						<p>Na alegria de servir e no prazer de obter resultados;</p>
						<p>No nosso sucesso e de nossos clientes.</p>
					</div>

					<div class="col-md-7">
						<h5>Equipe:</h5>
						<p>Somos um time, tentamos fazer sempre o melhor, e para isso estamos sempre aprendendo, principalmente entre nós mesmos.</p>
					</div>
					<div class="col-md-5">
						<div class="img-modal">
							<img src="../res/site/img/owner.png" alt="vestido">
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">
					Fechar
				</button>
			</div>

		</div>
	</div>
</div>

<nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
	<!-- container -->
	<div class="container">
		<!-- header -->
		<div class="navbar-header">

			<!-- botao toggle -->
			<button class="navbar-toggle collapsed" type="button"
					data-toggle="collapse" data-target="#barra-navegacao">
				<span class="sr-only">Alternar navegação</span> <!-- Acessibilidade -->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- /botao toggle -->

			<!-- imagem logo -->
			<a href="index.php" class="navbar-brand">
				<img class="img-logo" src="../res/site/img/logo.png" alt="DelicadaLogo" id="logotipo">
			</a>
			<!-- /imagem logo -->

		</div>
		<!-- /header -->

		<!-- navbar -->
		<div class="collapse navbar-collapse" id="barra-navegacao">
			<ul class="nav navbar-nav navbar-right">

				<li class="search" class="hidden-xs">
					<div class="input-group">
						<input type="search" placeholder="pesquisar..." id="input-search">
						<span class="input-group-btn"><button type="button"><i class="fa fa-search"></i></button></span>
					</div>
				</li>

				<li><a href="">Feminino</a> </li>
				<li><a href="">Masculino</a> </li>

				<li class="divisor" role="separator"></li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span><i class="fa fa-user"></i></span> Olá <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Entrar</a></li>
						<li><a href="#">Cadastrar-se</a></li>
						<li><a href="#">Sair</a></li>
					</ul>
				</li>
				<li class="divisor" role="separator"></li>
				<li><a href="shop.php"><i id="bag" class="fa fa-shopping-bag" style="font-size: 20px"></i></a></li>
			</ul>
		</div>
		<!-- /navbar -->

	</div>
	<!-- /container -->

</nav><!-- /nav -->
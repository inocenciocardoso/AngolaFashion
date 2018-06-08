<!DOCTYPE html>
<html language="pt-br">
<head>
	<meta charset="utf-8">

	<title>Cadastro/Login</title>

	<meta name="Description" content="">
	<meta name="Keywords" content="maisVendidos, conjunto,africana, camisa"/>
	<meta name="author" content="Inocencio"/>
	<meta name="viewport" content="width=device-width"/>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<style>
	.navbar-header button{
		color: #fff;
	}
	.fullsreen{
		width: 100%;
	}
	main{
		padding-top: 1px;
	}
	footer{
		background: #333;
		color: #fff;
		text-align: center;
		padding: 20px 0;
	}
	.tab-pane{
		padding: 10px 0;
	}
	.jumbotron{
		padding-top: 0.99em;
		padding-bottom: 5px
	}
	.panel-body {
		padding: 15px;
		top: 15px;
		left: 15px;
		right: 15px;
		bottom: 15px;
	}
	.col-sm-3{
		padding-right: 0;
	}
</style>
</head>
<body><br>
	<?php
		include('header.php');
	?>
	<main>
		<div class="jumbotron" style="">
			<h1>Cadastro/Login</h1>
		</div>
		<div class="container">
			<div class="row" style="padding-right: 10em">
				<div class="col-sm-4">
					<div class="panel panel-default" style="width: 21em;">
						<div class="panel-heading">
							<h3 class="panel-tittle">Propagandas Aqui!</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
							</div>
						</div>
						<div class="form-group">
						</div>
					</div>
					<div class="panel panel-default" style="width: 21em;">
						<div class="panel-heading">
							<h3 class="panel-tittle">Propagandas Aqui!</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
							</div>
						</div>
						<div class="form-group">
						</div>	
					</div>
				</div>
				<div class="col-sm-5">
					<div class=" panel panel-default">
						<div class="panel-heading">
							<legend style="text-align: center;">FAÇA SEU CADASTRO</legend>
						</div>
						<form action="" style="padding-left: 1em; padding-right: 1em;">
							
							<div class="form-group">
								<label for="nome">Nome Completo:</label>
								<input id="nome" type="text" name="nome" class="form-control" placeholder="nome" autofocus required>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input id="email" name="email" type="email" class="form-control" placeholder="e-mail">
								</div>
							</div>
							<div class="form-group">
								<label for="cpf">CPF:</label>
								<input id="cpf" name="cpf" type="text" class="form-control" placeholder="000.000.000-00" required>
							</div>
							<div class="form-group">
								<label for="senha">Senha:</label>
								<input id="senha" name="senha" type="password" class="form-control" placeholder="senha" required>
							</div>
							<legend>Forma de Pagamento</legend>

							<div class="form-group">
								<label for="bandeira-cartao">Bandeira:</label>
								<select id="bandeira-cartao" name="bandeira-cartao" class="form-control">
									<option value="visa">Visa</option>
									<option value="master">Master-card</option>
									<option value="amex">America Express</option>
								</select>
							</div>
							<div class="form-group">
								<label for="numero_cartao">Número:</label>
								<input id="numero_cartao" type="text" name="numero_cartao" class="form-control" placeholder="número do cartão">
							</div>
							<div class="form-group">
								<label for="validade-cartao">Validade:</label>
								<input type="month" id="validade-cartao" class="form-control" name="validade-cartao">
							</div>
							<div class="form-group">
								<label for="cvv" for="numero_cartao">CVV</label>
								<input id="numero_cartao" name="numero_cartao" type="text" max-length="3" class="form-control" placeholder="Card Verification Value">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked>
									Li e aceito as Condições de uso e Política e Privacidade da loja.
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam">
									Quero receber novidades da Angola Fashion
								</label><br>
								<button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-thumbs-up"></span>
									Confirmar Pedido
								</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel panel-default" style="width: 23em">
						<div class="panel-heading">
							<h4>JÁ POSSUI CADASTRO? LOGAR</h4>
						</div>
						<form action="">
							<div class="panel-body">
								<label for="email">Login</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="text" id="login" name="" value="" placeholder="Digite seu login ou e-mail" class="form-control">
								</div>
								<label>Senha</label>
								<input type="password" name="" value="" placeholder="Digite sua senha" class="form-control"><br>
								<button type="submit" class="btn btn-primary">Entrar</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
	</main><br>
	<?php include("rodape.php"); ?>
	<script>
			document.querySelector('input[type=email]').oninvalid = function () {
				this.setCustomValidity("");
				if (!this.validity.valid) {
					this.setCustomValidity("Email inválido");
				}
			};
		</script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/converteMoeda.js"></script>
		<script src="js/testaConversao.js"></script>
		<script src="js/total.js"></script>
		<script src="js/inputmask.js"></script>
		<script src="js/inputmask.numeric.extensions.js"></script>
		<script src="js/jquery.inputmask.js"></script>
		<script src="js/checkout.js"></script>
	</body>
	</html>
<?php  
	include("cabecalho.php"); 
	include('logica-usuario.php');
	include('banco-usuario.php');
?>

<?php if(isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
	<p class="alert-success">Deslogado com sucesso!</p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
	<p class="alert-success">Logado com sucesso!</p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false){ ?>
	<p class="alert-danger">Usuário ou senha inválida</p>
<?php }?>

<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true){ ?>
	<p class="alert-danger">Você não tem acesso a esta funcionalidade!</p>
<?php }?>
	<div>
		<h2 class="text-center">
			Sistema de Cadastro de Produtos
		</h2>
		<br/>
	</div>
	<?php if(usuarioEstaLogado()) { ?>

		<p class="text-center text-success">
			Você está logado como <?=usuarioLogado()?>. 
			<a href="logout.php">Deslogar</a>
		</p>

	<?php } else { ?>

	<br>
	<div>
		<p>Email: email@gmail.com</p>
		<p>e Senha: 123456</p>
	</div>

	<h3>Login</h3>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<form action="login.php" method="post">
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="email" required="required"/>
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input class="form-control" type="password" name="senha" required="required" />
					</div>
					<div>
						<button class="btn btn-primary">Login</button>
					</div>
				</form>	

			</div>
		</div>
	</div>

<?php } ?>
<?php include("rodape.php") ?>
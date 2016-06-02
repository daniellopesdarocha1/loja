<?php  
	include("cabecalho.php"); 
	include('logica-usuario.php');
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
		<h4>
			Sistema para cadastro de Produtos
		</h4>
	</div>
	<?php if(usuarioEstaLogado()) { ?>

		<p class="text-success">
			Você está logado como <?=usuarioLogado()?>. 
			<a href="logout.php">Deslogar</a>
		</p>

	<?php } else { ?>

	<br>
	<div>
		<p>Para utilizar o sistema entre com o </p>
		<p>Email: <b>email@gmail.com</b></p>
		<p>e Senha: <b>123456</b></p>
	</div>
	<h3>Login</h3>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"/></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha" /></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
<?php } ?>
<?php include("rodape.php") ?>
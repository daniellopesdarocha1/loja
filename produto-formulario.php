<?php  include("cabecalho.php") ?>

	<h1>Formulário de Cadastro</h1>
	<form action="adiciona-produto.php">
		Produto:
		<input type="text" name="nome"><br/>
		Preco:
		<input type="number" name="preco"><br/>
		<input type="submit" value="Cadastrar">
	</form>

<?php include("rodape.php") ?>
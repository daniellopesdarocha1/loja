<?php  include("cabecalho.php") ?>

<h1>Formulário de Cadastro</h1>
<form action="adiciona-produto.php" method="POST">
	<table>
		<tr>
			<td>Produto</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="number" name="preco"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><textarea name="descricao" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>
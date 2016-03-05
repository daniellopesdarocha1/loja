<?php  include("cabecalho.php") ?>

<h1>Formulário de Cadastro</h1>
<form action="adiciona-produto.php">
	<table>
		<tr>
			<td>Produto</td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Preco</td>
			<td><input class="form-control" type="number" name="preco"></td>
		</tr>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>
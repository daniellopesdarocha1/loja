<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-categoria.php");
	include('logica-usuario.php');

	verificaUsuario();

	$categorias = listaCategorias($conexao);
?>

<div>
	<h2>Formulário de Cadastro</h2>
</div>
<div class="row">
	<div class="col-xs-12">
		<form action="adiciona-produto.php" method="POST">
			<table class="table table-responsive">
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
		    		<td></td>
		    		<td><input type="checkbox" name="usado" value="true"> Usado</td>
				</tr>
				<tr>
					<td>Categoria</td>
		    		<td>
		    			<select name="categoria_id" class="form-control">
			        		<?php foreach($categorias as $categoria) : ?>
			        			<option value="<?=$categoria['id']?>">
			        				<?=$categoria['nome']?>
			        			</option>
			        		<?php endforeach ?>
		        		</select>
		    		</td>
				</tr>
				<tr>
					<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php include("rodape.php") ?>
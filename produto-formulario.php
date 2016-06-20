<?php  

	include("cabecalho.php");
	include("conecta.php");
	include("banco-categoria.php");
	include('logica-usuario.php');

	verificaUsuario();

	$categorias = listaCategorias($conexao);
?>

<div>
	<h2>Adicionar Produto</h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<form action="adiciona-produto.php" method="POST" name="formAdicionaProduto" onsubmit="return validarAdicionarPreco()">
					<div class="form-group">
						<label>Produto</label>
						<input class="form-control" type="text" name="nome" required="required" placeholder="Informe o nome do produto">
					</div>
					<div class="form-group">
						<label>Preço</label>
						<input class="form-control" type="number" step=0.01 name="preco" placeholder="Informe o preço do produto">
					</div>
					<div class="form-group">
						<label>Descrição</label>
						<textarea name="descricao" class="form-control" required="required" placeholder="Informe uma descrição para o produto" ></textarea>
					</div>
					<div class="form-group">
			    		<input type="checkbox" name="usado" value="true"> <label>Usado</label>
					</div>
					<div class="form-group">
						<label>Categoria</label>
			    		
			    			<select name="categoria_id" class="form-control">
				        		<?php foreach($categorias as $categoria) : ?>
				        			<option value="<?=$categoria['id']?>">
				        				<?=$categoria['nome']?>
				        			</option>
				        		<?php endforeach ?>
			        		</select>
			    		
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Cadastrar">
					</div>
				</table>
			</form>
		</div>
	</div>
</div>

<?php include("rodape.php") ?>
<?php 
    include("cabecalho.php"); 
    include("conecta.php");
    include("banco-categoria.php");
    include("banco-produto.php");
    include('logica-usuario.php');

    $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);
    $categorias = listaCategorias($conexao);
?>            
    <h1>Alterar Produto</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <form action="altera-produto.php" method="POST" name="formAdicionaProduto" onsubmit="return validarAdicionarPreco()">
                    <input type="hidden" name="id" value="<?=$produto['id']?>" />
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" required="required" placeholder="Informe o nome do produto">
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input  class="form-control" type='number' step=0.01 name="preco" value="<?=$produto['preco']?>" placeholder="Informe o preço do produto">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea class="form-control" name="descricao" required="required" placeholder="Informe uma descrição para o produto"><?=$produto['descricao']?></textarea>
                    </div>
                    <?php
                        $usado = $produto['usado'] ? "checked='checked'" : "";
                    ?>
                    <div class="form-group">
                        <input type="checkbox" name="usado" <?=$usado?> value="true"> <label>Usado</label>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                            <select name="categoria_id" class="form-control">
                            <?php 

                                foreach($categorias as $categoria) : 
                                    $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                                    $selecao = $essaEhACategoria ? "selected='selected'" : "";

                            ?>
                                <option value="<?=$categoria['id']?>" <?=$selecao?>>
                                        <?=$categoria['nome']?>
                                </option>
                            <?php endforeach ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Alterar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("rodape.php"); ?>
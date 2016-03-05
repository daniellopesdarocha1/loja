<?php  include("cabecalho.php") ?>

<?php 
	function insereProduto($conexao, $nome, $preco) {
		$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
	    $resultadoDaInsercao = mysqli_query($conexao, $query);
	    return $resultadoDaInsercao;
	}

	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
	$conexao = mysqli_connect('localhost', 'root', '', 'loja');

	if(insereProduto($conexao, $nome, $preco)) {
?>
		<p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
	} else {
    $msg = mysqli_error($conexao);
?>
	<p class="alert-danger">O produto <? = $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
	}
?>
	//mysqli_close($conexao); é opcional o php fecha a conexão do mysql automaticamente.
 
 <?php include("rodape.php") ?>
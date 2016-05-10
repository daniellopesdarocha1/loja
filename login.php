<?php 

include("conecta.php");
include ("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
//var_dump($usuario); //var_dump mostra a variavel na tela


if ($usuario == null) {
	header("Location: index.php?login=0"); // deve-se colocar 0 ou string vazia para o php entender que é false
} else {
	setcookie("usuario_logado", $usuario["email"], time() + 60); //fica logado por 60 segundos
	header("Location: index.php?login=1");
}
die();
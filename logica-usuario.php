<?php 

	session_start();
	//usando sessao ao inves do cookie

	function usuarioEstaLogado() {
		//return isset($_COOKIE["usuario_logado"]);
		return isset($_SESSION["usuario_logado"]);
	}

	function verificaUsuario() {
		if (!usuarioEstaLogado()) {
			header("Location: index.php?falhaDeSeguranca=true");
			die();
		}
	}

	function usuarioLogado() {
		//return $_COOKIE["usuario_logado"];
		return $_SESSION["usuario_logado"];
	}

	function logaUsuario($email) {
		//setcookie("usuario_logado", $email, time() + 10); //fica logado por 60 segundos
		$_SESSION['usuario_logado'] = $email;
	}

	function logout(){
		session_destroy();
	}
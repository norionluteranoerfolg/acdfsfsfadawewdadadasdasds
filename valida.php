<?php
	include_once "php/validaor/validar_login.php";

	$validar = new validar();
	$validar->exists_login_and_pass($_POST['login'],$_POST['pass'],"login.php");
	$validar->login($_POST['login'],"login.php");
	$validar->pass($_POST['pass'],"login.php");

	if($validar->authenticate_login_and_pass($_POST['login'],$_POST['pass'])){
		include_once "user/sessão_usuario.php";
		$dados=['nome','idade'];
		$validar->set_session($dados);
		iniciar_sessao_user($dados);
		header("Location:user/user/sessão_usuario.php");		
	}
	else{
		$_SESSION['loginerror']="Usuário não cadastrado";
		header("Location:login.php");
	}

	exit();
	

?>
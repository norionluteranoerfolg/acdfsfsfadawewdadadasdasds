<?php
 private $sessao;

 public function iniciar_sessao_user($index,$dados_sessao){
 	global $sessao;
 	if(!isset(session_start())){
 	  session_start();
 	  while ($index<=count($dados_sessao)) {.
 	  	$_SESSION[$index]=;
 	  }
 	}

 }



?>
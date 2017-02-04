<?php
	session_start(); 
	
  function(){
	if ($_POST['pass']==null ) {
		$_SESSION['loginerror']="Preencha Password"; 
		header('Location:login.php');
		 exit;
	}
?>
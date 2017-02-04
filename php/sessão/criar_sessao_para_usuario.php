<?php
	session_start(); 

if (isset($_POST['login']) and isset($_POST['pass'])){

     }

	 else {
	$_SESSION['loginerror']="erro de login"; 
	header("Location:login.php");
	 exit;
	}

/*
$nome=$_POST['login'];
$pass=$_POST['pass'];
$con = pg_connect("host=localhost port=5432 dbname=estudando user=postgres password=123");
$sql="select * from usuario where nome='{$login}' and pass='{$pass}'";
$query= pg_query($con,$sql);
header('Location:login.php');
exit;
*/
?>
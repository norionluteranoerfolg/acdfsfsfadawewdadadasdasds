<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>user</title>
</head>
<body>


<div style="border:1px solid #ccc; width:500px; height:200px;">
	<div style="float:left; height:200px; width:200px; border:1px solid #ccc;">


	</div>	



<div style="box-shadow:2px 2px 2px 2px #555; border:1px solid #ccc; width:500px; height:200px;">
	<?php if(isset($_SESSION)){echo "<img src='".$_SESSION['foto']."'  height='200px' width='200px'>";} ?>
	<div style="float:left; height:200px; width:272px; margin-left:25px;">
	  <h2>Nome:<span style="font-size:17px;"> <?php if(isset($_SESSION)){echo $_SESSION['nome'];} ?> </span></h2>
	  <h3>Idade: <span style="font-size:15px;"> <?php if(isset($_SESSION)){echo $_SESSION['idade'];} ?></span></h3>
    </div>
</div>

</body>
</html>
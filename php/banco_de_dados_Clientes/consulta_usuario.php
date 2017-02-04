<?php

$nome=$_POST['nome'];

$con = pg_connect("host=localhost port=5432 dbname=estudando user=postgres password=123");
$sql="select foto from usuario where nome='{$nome}'";
$query= pg_query($con,$sql);

$row=pg_fetch_assoc($query);
//echo json_encode($row);

$frase= "uploads/".$row['foto'];
echo "https://static.adzerk.net/Advertisers/33d63a87eb0144dbb2039b21b8d72587.png";

pg_close($con);
exit;

?>
<?php
$con;// conexão com banco de dados
$sql;//o comando para consulta
$query;// salvar a consulta
$nome;//nome do usuário
//$type=$_POST['type'];// o que será feito

/*
if($type==1) {
$nome=$_POST['nome'];
$con = pg_connect("host=localhost port=5432 dbname=estudando user=postgres password=123");;
$sql="select * from usu where nome ='{$nome}'";
$query= pg_query($con,$sql);
pg_close($con);
$row = pg_fetch_assoc($query);
echo json_encode($row);
exit;
}

if($type==2) {
$nome=$_POST['nome'];
$idade=$_POST['idade'];
$email=$_POST['email'];
$con = pg_connect("host=localhost port=5432 dbname=estudando user=postgres password=123");;
$sql="insert into usu(nome,idade,email) values ('{$nome}',{$idade},'{$email}')";
$query= pg_query($con,$sql);
pg_close($con);
echo "Cadastro com sucesso";
exit;
}

*/

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$email=$_POST['email'];
$foto=$_FILES['foto'];



$extensao = pathinfo ( $foto['name'], PATHINFO_EXTENSION );
$extensao = strtolower ( $extensao );
$foto['name']="x123";
$destino="/var/www/html/uploads/" . $foto['name'];
$arquivo_tmp=$foto['name'].".".$extensao;

$con = pg_connect("host=localhost port=5432 dbname=estudando user=postgres password=123");
$sql="insert into usuario(nome,idade,email,foto) values ('{$nome}',{$idade},'{$email}','{$arquivo_tmp}')";
$query= pg_query($con,$sql);




move_uploaded_file($foto['tmp_name'],$destino);

pg_close($con);
echo "Cadastro com sucesso";
exit;




?>
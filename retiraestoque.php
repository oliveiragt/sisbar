<?php
session_start();
include('conexao.php');
$qtd=$_POST['qtdsaida'];
$bar=$_SESSION['idbar'];
$produto=$_SESSION['eid'];
$est=$_SESSION['estoque'];
$verifica=mysql_query("SELECT qtdest FROM estoquebar");
while($resultado=mysql_fetch_assoc($verifica)){
	if ($resultado['qtdest']<$qtd){
		header('location:falha.php');
}
	else{
$query=mysql_query("UPDATE estoquebar SET qtdvenda=qtdvenda+$qtd,qtdest=qtdest-$qtd WHERE idbar=$bar AND idproduto=$produto AND idestoquebar=$est");
if($query){
	header('location:sucessobaixa.php');
}
else{
	header('location:falha.php');
}}}
?>
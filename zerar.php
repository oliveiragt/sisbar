<?php
session_start();
include("conexao.php");
$idest=$_GET['idest'];
$query=mysql_query("UPDATE estoquebar SET qtdvenda=0 WHERE idestoquebar=$idest");
if($query){
	header('location:sucessobaixa.php');
}
else{
    header('location:falha.php');
}
?>
<?php
session_start();
include('conexao.php');
$r1=$_POST['qtdrol1'];
$r2=$_POST['qtdrol2'];
$r3=$_POST['qtdrol3'];
$r4=$_POST['qtdrol4'];
$r5=$_POST['qtdrol5'];
$r6=$_POST['qtdrol6'];
$bar=$_SESSION['roleta'];
$query=mysql_query("INSERT INTO roleta (idbar,rol1,rol2,rol3,rol4,rol5,rol6,dataroleta) VALUES ($bar,$r1,$r2,$r3,$r4,$r5,$r6,now())");
if($query){
	header('location:sucesso.php');
}
else{
	header('location:falha.php');
}
?>
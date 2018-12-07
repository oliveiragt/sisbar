<?php date_default_timezone_set('America/Sao_Paulo');
session_start();
include('conexao.php');
 echo $qtde=$_POST['qtd'];
echo $eid=$_SESSION['eid'];
$query=mysql_query("UPDATE estoque SET dataentrada=now(),qtentrada=$qtde,qtdatual=qtdatual+$qtde WHERE idproduto=$eid")or die(mysql_error());
$query2=mysql_query("INSERT INTO entradaestoque (idp,dataent,qtdrec) VALUES (".$eid.",now(),".$qtde.")") or die(mysql_error());;
if($query and $query2){
	header('location:sucessoestoque.php');
}
else{
	header('location:falhasis.php');
}?>


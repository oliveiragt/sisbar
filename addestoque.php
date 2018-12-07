<?php date_default_timezone_set('America/Sao_Paulo');
session_start();
include('conexao.php');
 echo $qtde=$_POST['qtd'];
 echo $recebe=$_POST['bar'];
echo $eid=$_SESSION['eid'];
$vr=$_SESSION['vr'];
$verifica=mysql_query("SELECT * FROM estoque WHERE idproduto=$eid");
while($rows=mysql_fetch_assoc($verifica)){
	if($rows['qtdatual']<$qtde || $rows['qtdatual']=='0'){
		header('location:falha.php');
	}
	else{
$query=mysql_query("INSERT INTO estoquebar (idbar,idproduto,qtdenviada,qtdest,entradabar,vunitr) 
VALUES (".$recebe.",".$eid.",".$qtde.",".$qtde.",now(),".$vr.")")or die(mysql_error());
$query2=mysql_query("UPDATE estoque SET qtdatual=qtdatual-$qtde WHERE idproduto=$eid")or die(mysql_error());
$query3=mysql_query("INSERT INTO movestoque (idbar,idproduto,datarecebida) VALUES (".$recebe.",".$eid.",now())");
if($query){
	if($query2){
	header('location:sucessoestoque.php');
}
else{
	header('location:falhasis.php');
}
}
else{
header('location:falhasis.php');
}
}
}
?>
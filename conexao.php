<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$conecta = mysql_connect("localhost", "root","vertrigo" ) or print (mysql_error());
$banco=mysql_select_db("sisbar");
if($conecta){
	echo "Conexão realizada com sucesso!";
}
else{
	echo "Erro, tu é um inútil";
}
?>
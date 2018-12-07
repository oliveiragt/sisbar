<?php
include('conexao.php');
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$verifica = mysql_query("SELECT * FROM usuarios WHERE user='$usuario' and senha='$senha'") or die("erro ao selecionar");
	  $resultados = mysql_fetch_array($verifica);
        if (mysql_num_rows($verifica)<=0){
          header('location:falha.html');
		  }else{
			  header('location:sistema.php');
		  }
?>
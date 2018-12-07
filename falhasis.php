<?php 
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Falha</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <h3>Falha</h3>
	  <hr color="#d43439">
	   Algo de errado aconteceu, tente novamente ou contate o suporte.<br><br>
	   <a href="sistema.php">Clique aqui para voltar a página principal</a>
	  </div>
    </div>
   </body>
</html>
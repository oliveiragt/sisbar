<?php
session_start();
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Sucesso</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <h3>Sucesso!</h3>
	  <hr color="#d43439">
	  Operação realizada com sucesso!
	   <br><br><br>
	   <a href="infobar.php?id=<?php echo $_SESSION['idbar']; ?>">Voltar a página de estoque do bar</a>
	  </div>
    </div>
   </body>
</html>
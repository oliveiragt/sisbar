<?php 
session_start();
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
$idloja=$_GET['idbar'];
$_SESSION['roleta']=$idloja;
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Cadastrar Roleta</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <h3>Cadastro de roleta</h3>
	  <hr color="#d43439"><br><br><br><br><br>
	  <form id="cadroleta" method="post" action="cadastraroleta.php">
	   <table style="position:relative; left:22%; color:#d43439; 
	   border: solid 2px #d43439; border-collapse: collapse; width:56%;height:20%; overflow:auto;
	   text-align:center;" border="1">
	   <tr><td>Roleta 1</td><td><input name="qtdrol1" type="text"></td></tr>
	   <tr><td>Roleta 2</td><td><input name="qtdrol2" type="text"></td></tr>
	   <tr><td>Roleta 3</td><td><input name="qtdrol3" type="text"></td></tr>
	   <tr><td>Roleta 4</td><td><input name="qtdrol4" type="text"></td></tr>
	   <tr><td>Roleta 5</td><td><input name="qtdrol5" type="text"></td></tr>
	   <tr><td>Roleta 6</td><td><input name="qtdrol6" type="text"></td></tr>
	   </table>
	   <br><br>
	   <input id="blogin" type="submit" value="Cadastrar">
	   </form>
	   <br>
	   <a href="roleta.php?idbar=<?php echo $idloja; ?>">Voltar a página anterior</a>
	  </div>
    </div>
   </body>
</html>
<?php 
session_start();
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
$idprod=$_GET['id'];
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Estoque - Entrada</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>
	 </div>
	 <div id="conteudo">
	  <h3>Entrada de produto</h3>
	  <hr color="#d43439"><br><br><br><br><br>
	  <form id="adestoque" method="post" action="adestoque.php">
	   <table id="tbestoque" border="1">
	    <?php $query=mysql_query("SELECT * FROM estoque WHERE idproduto='$idprod'");
		$_SESSION['eid']=$idprod;
	   while($rows=mysql_fetch_assoc($query)){ 
	   $_SESSION['vr']=$rows['vunit']; ?>
	   <tr><td>Nome do Produto</td><td><?php echo $rows['nomeprod']; ?></td></tr>
	   <tr><td>Quantidade</td>
	   <td><input name="qtd" type="text" placeholder="Digite o valor a ser adicionado"></td>
	   </tr>
	   <?php } ?>
	   </table>
	   <br><br>
	   <input id="blogin" type="submit" value="Atualizar">
	   </form>
	   <br><br><br><br>
	   <a href="estoque.php">Voltar a página de estoque geral</a>
	  </div>
    </div>
   </body>
</html>
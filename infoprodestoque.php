<?php 
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
$idp=$_GET['id'];
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Entrada no Estoque</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <?php $query=mysql_query("SELECT * FROM entradaestoque WHERE idp=$idp"); ;?>
	  <h3>Entrada de produto no estoque geral</h3>
	  <hr color="#d43439">
	   <table id="tbestoque" border="1">
	   <td>Quantidade recebida</td>
	   <td>Data de entrada</td>
	   </tr>
	   <?php while($rows=mysql_fetch_assoc($query)){ ?>
	   <tr>
	   <td><?php echo $rows['qtdrec']; ?></td>
	   <td><?php echo date('d/m/Y H:i', strtotime($rows['dataent'])); ?></td>
	   </tr>
	   <?php }?>
	   </table><br>
	   <br><br><br>
	   <a href="estoque.php">Voltar a página do estoque</a>
	  </div>
    </div>
   </body>
</html>
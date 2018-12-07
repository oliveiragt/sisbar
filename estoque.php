<?php 
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Estoque Geral</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <h3>Estoque Geral</h3>
	  <hr color="#d43439">
	   <div style="overflow: auto; height: 300px">
	   <table id="tbestoque" border="1">
	   <tr><td>Nome do produto</td>
	  <td>Quantidade atual</td>
	  <td>Preço unitário</td>
	  <td colspan="2">Ações</td></tr>
	   <?php $query=mysql_query("SELECT * FROM estoque");
	   while($rows=mysql_fetch_assoc($query)){ ?>
	   <tr><td><a href="infoprodestoque.php?id=<?php echo $rows['idproduto']; ?>"><?php echo $rows['nomeprod']; ?></a></td>
	   <td><?php echo $rows['qtdatual']; ?></td>
	   <td><?php echo 'R$ ' . number_format($rows['vunit'], 2, ',', '.');?></td>
	   <td><a href="entradaestoque.php?id=<?php echo $rows['idproduto']; ?>">Entrada</a></td>
	   <td><a href="saidaestoque.php?id=<?php echo $rows['idproduto']; ?>">Saida</a></td>
	   </tr>
	   <?php } ?>
	   </table>
	   </div>
	  </div>
    </div>
   </body>
</html>
<?php 
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Bares</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <h3>Bares</h3>
	  <hr color="#d43439">
	  <div style="overflow: auto; height: 300px">
	   <table id="tbbar" border="1" >
	   <tr><td>Nome do bar</td>
	   <td>Dívida atual</td>
	   </tr>
	   <?php $query=mysql_query("SELECT * FROM bares");
	   while($rows=mysql_fetch_assoc($query)){  
	   $bar=$rows['idbar'];
	   $query2=mysql_query("SELECT *, SUM(vunitr*qtdvenda) as total_valor from estoquebar WHERE idbar=$bar");
	  while($rows1=mysql_fetch_assoc($query2)){		   ?>
	   <tr><td><a href="infobar.php?id=<?php echo $rows['idbar'];?>"><?php echo $rows['nomebar']; ?></td>
	   <?php  ?>
	   <td><?php echo 'R$ ' . number_format($rows1['total_valor'], 2, ',', '.');?></td></tr>
	   <?php }} ?>
	   </table>
	   </div>
	  </div>
    </div>
   </body>
</html>
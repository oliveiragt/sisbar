<?php 
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
$idbar=$_GET['id'];
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
	  <?php $query=mysql_query("SELECT * FROM movestoque WHERE idbar=$idbar"); ;?>
	  <h3>Movimentações de estoque</h3>
	  <hr color="#d43439">
	   <div style="overflow: auto; height: 300px">
	   <table id="tbestoque" border="1">
	   <tr><td>Produto</td>
	   <td>Quantidade recebida</td>
	   <td>Estoque no bar</td>
	   </tr>
	   
	   </tr>
	   <?php while($rows=mysql_fetch_assoc($query)){ 
	    ?>
	   <tr><td><?php echo $rows['idbar']; ?></td>
	   <td><?php echo $rows['idproduto']; ?></td>
	   <td><?php echo $rows['datarecebida']; ?></td>
	   </tr>
	  <?php }?>
	   </table></div><br>
	   <br><br><br>
	   <a href="infobar.php?id=<?php echo $idbar ?>">Voltar a página de estoque do bar</a>
	  </div>
    </div>
   </body>
</html>
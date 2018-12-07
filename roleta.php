<?php 
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
$id=$_GET['idbar'];
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Roleta</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>
	 </div>
	 <div id="conteudo">
	  <?php $query=mysql_query("SELECT * FROM roleta WHERE idbar=$id"); ;?>
	  <h3>Roleta</h3>
	  <hr color="#d43439">
	  <div style="overflow: auto; height: 300px">
	   <table id="tbestoque" border="1">
	   <td>Data</td>
	   <td>Roleta 1 - CAMAROTE</td>
	   <td>Roleta 2</td>
	   <td>Roleta 3</td>
	   <td>Roleta 4</td>
	   <td>Roleta 5 - CAMAROTE</td>
	   <td>Roleta 6</td>
	   </tr>
	   <?php while($rows=mysql_fetch_assoc($query)){ ?>
	   <tr>
	   <td><?php echo date('d/m/Y H:i', strtotime($rows['dataroleta'])); ?></td>
	   <td><?php echo $rows['rol1']; ?></td>
	   <td><?php echo $rows['rol2']; ?></td>
	   <td><?php echo $rows['rol3']; ?></td>
	   <td><?php echo $rows['rol4']; ?></td>
	   <td><?php echo $rows['rol5']; ?></td>
	   <td><?php echo $rows['rol6']; ?></td>
	   </tr>
	   <?php }?>
	   </table></div><br>
	   <br>
	   <a href="cadroleta.php?idbar=<?php echo $id; ?>">Cadastrar roleta</a><br>
<a href="infobar.php?id=<?php echo $id; ?>">Voltar a página anterior</a>
	  </div>
    </div>
   </body>
</html>
<?php 
session_start();
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
$idprod=$_GET['id'];
$idloja=$_GET['idbar'];
$estoque=$_GET['idestoque'];
?>
<html>
 <head>
    <link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="favicon.ico" />
   <meta charset="UTF-8">
    <title>Baixa do estoque</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <h3>Baixa do Estoque</h3>
	  <hr color="#d43439"><br><br><br><br><br>
	  <form id="adestoque" method="post" action="retiraestoque.php">
	   <table id="tbestoque" border="1">
	    <?php $query=mysql_query("SELECT * FROM estoque WHERE idproduto='$idprod'");
		$_SESSION['eid']=$idprod;
		$_SESSION['idbar']=$idloja;
		$_SESSION['estoque']=$estoque;
	   while($rows=mysql_fetch_assoc($query)){ ?>
	   <tr><td>Nome do Produto</td><td><?php echo $rows['nomeprod']; }?></td></tr>
	   <tr><td>Quantidade</td>
	   <td><input name="qtdsaida" type="text" placeholder="Digite o valor a ser adicionado"></td>
	   </tr>
	   <tr><td>Bar</td><td><?php $query1=mysql_query("SELECT * FROM bares WHERE idbar=$idloja");
	  while($rows1=mysql_fetch_assoc($query1)){ 
	  echo $rows1['nomebar']; }?>
	  </td>
	  </tr>
	   </table>
	   <br><br>
	   <input id="blogin" type="submit" value="Atualizar">
	   </form>
	   <br><br><br><br>
	   <a href="infobar.php?id=<?php echo $idloja; ?>">Voltar a página anterior</a>
	  </div>
    </div>
   </body>
</html>
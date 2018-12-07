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
    <title>Produtos do Bar</title>
 </head>
   <body background="fundo.png">
    <div id="corpo">
	 <div id="menu">
	 <br>
<a href="sistema.php">Página Principal</a> | <a href="estoque.php">Estoque Geral</a>		|	<a href="bares.php">Bares</a>	
	 </div>
	 <div id="conteudo">
	  <?php $query=mysql_query("SELECT * FROM estoque
INNER JOIN estoquebar ON (estoque.idproduto = estoquebar.idproduto) 
INNER JOIN bares ON (bares.idbar = estoquebar.idbar) WHERE bares.idbar='$idbar'"); ;?>
	  <h3>Produtos em estoque no bar</h3>
	  <hr color="#d43439">
	   <div style="overflow: auto; height: 300px">
	   <table id="tbestoque" border="1">
	   <tr><td>Produto</td>
	   <td>Quantidade recebida</td>
	   <td>Estoque no bar</td>
	   <td>Vendido</td>
	   <td>Data de entrada</td>
	   <td>Valor Unitário</td>
	   <td>Valor total</td>
	   <td colspan="2">Ações</td>
	   </tr>
	   <?php while($rows=mysql_fetch_assoc($query)){ 
	   $nomebar=$rows['nomebar'];
	   $idestoque=$rows['idestoquebar'];
	   ?>Bar atual: <?php echo $nomebar; ?> <br><?php
	   $conta=$rows['qtdvenda']*$rows['vunitr']; ?>
	   <tr><td><?php echo $rows['nomeprod']; ?></td>
	   <td><?php echo $rows['qtdenviada']; ?></td>
	   <td><?php echo $rows['qtdest']; ?></td>
	   <td><?php echo $rows['qtdvenda']; ?></td>
	   <td><?php echo date('d/m/Y H:i', strtotime($rows['entradabar'])); ?></td>
	   <td><?php echo 'R$ ' . number_format($rows['vunitr'], 2, ',', '.')?></td>
	   <td><?php echo 'R$ ' . number_format($conta, 2, ',', '.');?></td>
	   <?php if($rows['qtdest']==0 and $rows['qtdvenda']==0){ echo "<td colspan='2'>Produto esgotado</td>";}else{ ?>
	   <td><a href="baixaestoque.php?id=<?php echo $rows['idproduto']; ?>&idbar=<?php echo $rows['idbar']; ?>&idestoque=<?php echo $rows['idestoquebar']; ?>">Saida</a></td>
	   <td><a href ="zerar.php?idest=<?php echo $idestoque; ?>&qtd=<?php echo $rows['qtdvenda']; ?>">Zerar</a></td>
	   </tr>
	   <?php }}?>
	   </table></div>
	   Total a ser pago: <?php
	   $query2=mysql_query("select *, SUM(vunitr*qtdvenda) as total_valor from estoquebar WHERE idbar=$idbar");
          while($rows1=mysql_fetch_assoc($query2)){
			  echo 'R$ ' . number_format($rows1['total_valor'], 2, ',', '.');
		  }?><br>
	   <a href="roleta.php?idbar=<?php echo $idbar; ?>">Roleta do bar</a><br>
	   <a href="bares.php">Voltar a página de bares</a>
	  </div>
    </div>
   </body>
</html>
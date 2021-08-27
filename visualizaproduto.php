<?php 
	include "topo.php";
	include "dados/arrayprodutos.php";
    $prod = $_GET['produto'];
    $nomeprod = array_search($prod, array_column($arrayproduto, $valor[1]));
	$fotoprod = array_search($prod, array_column($arrayproduto, $valor[4]));
?>

			<div class="titulo"> DETALHAMENTO DE PRODUTO </br></br></div>
			<div class="produto">
					<table>
							<tr>
								<td class="imgproduto"><img src="images/<?php echo $$valor[4] ?>"/><?php echo $$valor[4] ?></td>
							</tr>
							<tr>
							<td><?php echo $$valor[1] ?></br> R$ <?php echo $$valor[3] ?>,00</td>
							</tr>
						</table>
				
			</div>
<?php include "rodape.php" ?>
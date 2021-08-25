<?php 
	include "topo.php";
	include "dados/arrayprodutos.php";
?>

			<div class="titulo">GALERIA DE PRODUTOS </br></br></div>
			<div class="produto">
				<?php foreach($arrayproduto as $chave => $valor){ ?>
					<div class="div_produto">
						<table>
							<tr>
								<td class="imgproduto"><img src="images/<?php echo $valor[4] ?>"/></td>
							</tr>
							<tr>
							<td><?php echo $valor[1] ?> <br> R$ <?php echo $valor[3] ?>,00</td>
							</tr>
						</table>
					</div>		
				  
				 
				<?php } ?>
				
			</div>
<?php include "rodape.php" ?>
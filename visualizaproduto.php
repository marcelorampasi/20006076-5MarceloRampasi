<?php 
	include "topo.php";
	include "dados/arrayprodutos.php";
    $prod = $_GET["produto"];
    $key = array_search($prod, array_column($arrayproduto, $_GET["produto"]));
?>

			<div class="titulo"> DETALHAMENTO DE PRODUTO </br></br></div>
			<div class="produto">
                     <?php echo $key ?>
				
			</div>
<?php include "rodape.php" ?>
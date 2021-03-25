<?php

include 'includes/autoload.php';

	

	// encapsulation 


	// $productList = new ProductList();
	$productList = new ProductList(new DatabaseProductList());

?>

<html>
	<head></head>
	<body>
		<h1> Liste des produits </h1>

		<p> <a href="cart.php"> Voir le panier </a> </p>

		<?php $productList->displayProducts(); ?>
	</body>
</html>
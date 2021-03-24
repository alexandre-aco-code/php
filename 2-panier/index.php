<?php 

	include 'classes/Product.php';
	include 'classes/ProductList.php';

	// encapsulation 


	$productList = new ProductList();

?>

<html>
	<head></head>
	<body>
		<h1> Liste des produits </h1>

		<p> <a href="cart.php"> Voir le panier </a> </p>

		<?php $productList->displayProducts(); ?>
	</body>
</html>
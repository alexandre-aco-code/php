<?php


	include 'interfaces/IConnect.php';
	include 'classes/Product.php';
	include 'classes/ProductList.php';

	include 'interfaces/IStorage.php';
	include 'classes/Database.php';

	include 'interfaces/IProductLoader.php';
	include 'classes/DatabaseProductList.php';
	include 'classes/MemoryProductList.php';


	include 'interfaces/IShipping.php';
	include 'classes/Shipping.php';
	include 'classes/ShippingConfinement.php';
	include 'classes/ShippingNoel.php';


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
<?php 
	include 'interfaces/IStorage.php';
	include 'classes/Product.php';
	include 'classes/ProductList.php';
	include 'classes/ProductOrder.php';
	include 'classes/Cart.php';
	include 'classes/Session.php';
	include 'classes/Database.php';
		include 'interfaces/IProductLoader.php';
		include 'classes/DatabaseProductList.php';
		include 'classes/MemoryProductList.php';
	
	// encapsulation 


	$cart = new Cart();

?>

<html>
	<head></head>
	<body>

		<p> <a href="cart.php"> Voir le panier </a> </p>

		<?php $cart->displayFees() ; ?>

		<a href="confirm.php"> Voir les frais des ports </a>
	</body>
</html>
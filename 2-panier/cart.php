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


	include 'interfaces/IShipping.php';
	include 'classes/Shipping.php';
	include 'classes/ShippingConfinement.php';
	include 'classes/ShippingNoel.php';
	
	// encapsulation 


	$cart = new Cart(new Shipping);

?>

<html>
	<head></head>
	<body>
		<h1> Liste des produits </h1>

		<p> <a href="cart.php"> Voir le panier </a> </p>

		<?php $cart->displayCart(); ?>

		<a href="confirm.php"> Voir les frais des ports </a>
	</body>
</html>
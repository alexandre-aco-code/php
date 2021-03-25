<?php
	include 'includes/autoload.php';	


	
	// encapsulation 


	$cart = new Cart(new Shipping());

?>

<html>
	<head></head>
	<body>

		<p> <a href="cart.php"> Voir le panier </a> </p>

		<?php $cart->displayFees() ; ?>

		<a href="confirm.php"> Voir les frais des ports </a>
	</body>
</html>
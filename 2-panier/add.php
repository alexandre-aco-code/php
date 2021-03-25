<?php

	include 'includes/autoload.php';


	

	$name = $_POST['productName'];
	$quantity = $_POST['quantity'];

	if( intval($quantity) > 0)
	{
		$productList = new ProductList(new DatabaseProductList());
		$product = $productList->getProductByName($name);

		$cart = new Cart(new Shipping());
		$cart->addToCart(  $product , $quantity );
	}

	

	header('Location: index.php');



?>
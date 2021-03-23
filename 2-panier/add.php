<?php

	include 'classes/Product.php';
	include 'classes/ProductList.php';
	include 'classes/ProductOrder.php';
	include 'classes/Cart.php';
	include 'classes/Session.php';

	$name = $_POST['productName'];
	$quantity = $_POST['quantity'];

	if( intval($quantity) > 0)
	{
		$productList = new ProductList();
		$product = $productList->getProductByName($name);

		$cart = new Cart();
		$cart->addToCart( $product , $quantity);
	}

	

	//header('Location: index.php');

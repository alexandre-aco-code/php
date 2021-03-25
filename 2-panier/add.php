<?php
	include 'interfaces/IConnect.php';
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
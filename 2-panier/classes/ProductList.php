<?php

class ProductList
{
	private $products; 

	public function __construct(  )
	{
		$this->products = [];
		//$this->products[] = new Product('Coca' , 2);
		array_push( $this->products , new Product('Coca' , 2));
		array_push( $this->products , new Product('Frites' , 3));
		array_push( $this->products , new Product('Kebab' , 6));
		array_push( $this->products , new Product('Chips' , 0.50));

		// $pdo = new Database();
		// $allproducts = $pdo->selectAll();

		// foreach ($allproducts as $product) {
		// 	array_push($this->products, new Product($product['Name'], $product['Price']));test
		// }
	}

	public function displayProducts() : void
	{
		echo "<ul>";
		foreach( $this->products as $product )
		{
			$product->display();
		}
		echo "</ul>";
	}

	public function getProductByName( String $name ) : Product 
	{
		foreach( $this->products as $product )
		{
			if ( $product->getName() == $name )
			{
				return $product;
			}
		}

		return null;
	}
}
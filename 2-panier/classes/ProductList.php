<?php

class ProductList
{
	private $products;
	private $productLoader;

	public function __construct()
	{
		//$this->products[] = new Product('Coca' , 2);
		/*
		array_push( $this->products , new Product('Coca' , 2));
		array_push( $this->products , new Product('Frites' , 3));
		array_push( $this->products , new Product('Kebab' , 6));
		array_push( $this->products , new Product('Chips' , 0.50));
		*/

		$this->productLoader = new DatabaseProductList();
		$this->products = $this->productLoader->loadProducts();
	}

	public function displayProducts(): void
	{
		echo "<ul>";
		foreach ($this->products as $product) {
			$product->display();
		}
		echo "</ul>";
	}

	public function getProductByName(String $name): Product
	{
		echo "<pre>";
		var_dump($name);
		print_r($this->products);
		echo "</pre>";
	
		foreach ($this->products as $product) {
			if ($product->getName() == $name) {
				return $product;
			}
		}

		return null;
	}
}

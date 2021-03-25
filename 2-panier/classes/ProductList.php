<?php

class ProductList
{
	private $products;
	private $productLoader;

	public function __construct(IProductLoader $productLoader)
	{
		$this->productLoader = $productLoader;
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
		foreach ($this->products as $product) {
			if ($product->getName() == $name) {
				return $product;
			}
		}

		return null;
	}
}

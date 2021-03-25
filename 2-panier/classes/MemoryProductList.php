<?php

	class MemoryProductList implements IProductLoader
	{
		public function loadProducts() : array
		{
			$products = [];
			array_push( $products , new Product('Coca' , 2));
			array_push( $products , new Product('Frites' , 3));
			array_push( $products , new Product('Kebab' , 6));
			array_push( $products , new Product('Chips' , 0.50));

			return $products;
		}


	}

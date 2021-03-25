<?php

	class DatabaseProductList implements IProductLoader, IConnect
	{
        private $pdo;

        public function connect():void
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=solid', 'root', '');
        }
        
		public function loadProducts() : array
		{
			$result = [];
			$this->pdo = new PDO('mysql:host=localhost;dbname=solid' , 'root' , '' );

			$sql = 'SELECT * FROM product';

			$query = $this->pdo->query($sql);
			$products = $query->fetchAll(PDO::FETCH_ASSOC);

			foreach( $products as $product ) 
			{
				$result[] = new Product( $product['nom'] , $product['price']);
			}

			return $result;
		}


	}

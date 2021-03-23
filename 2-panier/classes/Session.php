<?php

	class Session
	{
		public function __construct()
		{
			session_start();
		}


		public function saveCart( array $products ) : void 
		{
			$_SESSION['cart'] = $products;
		}

		public function loadCart() : array
		{
			if( isset($_SESSION['cart']) )
				return $_SESSION['cart'];

			return [];
		}

		public function clearCart() : void 
		{
			session_destroy();
		}
	}

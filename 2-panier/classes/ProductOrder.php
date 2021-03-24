<?php 

	class ProductOrder
	{
		// encapsulation

		// bonne pratique : mettre par defaut les methodes et proprietés en private
		// votre classe doit etre comprehensible et facile a utiliser

		public $product;
		private $quantity;

		public function __construct( Product $product , int $quantity )
		{
			$this->product = $product;
			$this->quantity = $quantity;
		}

		// YAGNI

		// you aren't gonna need it

		// anti pattern : Lava code

		public function addQuantity( int $quantity ) : void
		{
			$this->quantity += $quantity;
		}

		public function getQuantity() : int
		{
			return $this->quantity;
		}

		public function getTotal() : float 
		{
			return $this->quantity * $this->product->getPrice();
		}

		public function display() : void 
		{

		}
	}
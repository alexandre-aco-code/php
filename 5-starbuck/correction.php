- dans un starbuck on peut commander des boissons :

- Espresso : 1.20
- Chocolat : 2.10
- Thé : 1.70 

Les clients peuvent choisir la taille de la boisson : Petit , Moyen , Grand 

Petit : x1 
Moyen : x1.3
Grand : x1.6

Juste sur le prix de base

Sur les boissons on peut ajouter des toppings 

- Creme : 0.10
- Lait : 0.20 Thé au lait
- Chantilly : Petit : 1, Moyen : 1.5, Grand : 2
- Chocolat :  Petit : 1.5, Moyen : 2.1, Grand : 2.6

- Creer des fonctions pour pouvoir afficher le prix total de la boisson avec ses toppings
- Creer des fonctions pour pouvoir afficher une description d'une boisson avec ses toppings

Exercice : 

Reprendre le starbuck:

Predefinir des boissons avec des toppings
    - La boisson plus cher possible X 4
    - La boisson la moins cher
    - Chocolat viennois ( Chocolat + chantilly )
    
<?php

	spl_autoload_register(function ($class) 
	{
		// lire le dossier classes 
		// lire le dossier interfaces
		if( file_exists('classes/'.$class.'.php') == true ) 
			include 'classes/'.$class.'.php';
		else if ( file_exists('interfaces/'.$class.'.php') == true ) 
			include 'interfaces/'.$class.'.php';
	});


$tea = new Beverage('Thé' , 2 , Beverage::SIZE_SMALL );

$teaWithMilk = new MilkTopping($tea);
$teaWithMilkAndCream = new CreamTopping($teaWithMilk);

echo $teaWithMilkAndCream->getTotalPrice();

$coffee = new Beverage('Coffee' , 3 , Beverage::SIZE_MEDIUM);

$coffeeWithChocolate = new ChocolateTopping($coffee);
$coffeeWithChocolateAndWhippedCream = new WhippedCreamTopping($coffeeWithChocolate);
echo '<br>'.$coffeeWithChocolateAndWhippedCream->getTotalPrice();


<?php 

	interface IBeverage
	{
		function getTotalPrice() : float;
		function getSize(): String;
	}
    
<?php

	class WhippedCreamTopping extends BaseTopping
	{
		public function getTotalPrice() : float 
		{
			switch($this->beverage->getSize())
			{
				case Beverage::SIZE_SMALL:
					return $this->beverage->getTotalPrice() + 1;
					break;
				case Beverage::SIZE_MEDIUM:
					return $this->beverage->getTotalPrice() + 1.5;
					break;
				case Beverage::SIZE_LARGE:
					return $this->beverage->getTotalPrice() + 2;
					break;
				default:
					throw new Exception('invalid size');
			}
		}
	}
    
    
<?php
	class MilkTopping extends BaseTopping
	{
		public function getTotalPrice() : float
		{
			return $this->beverage->getTotalPrice() + 0.2;
		}
	}
    
<?php
	class CreamTopping extends BaseTopping
	{
		public function getTotalPrice() : float
		{
			return $this->beverage->getTotalPrice() + 0.1;
		}
	}
    
<?php

	class ChocolateTopping extends BaseTopping
	{
		public function getTotalPrice() : float 
		{
			switch($this->beverage->getSize())
			{
				case Beverage::SIZE_SMALL:
					return $this->beverage->getTotalPrice() + 1.5;
					break;
				case Beverage::SIZE_MEDIUM:
					return $this->beverage->getTotalPrice() + 2.1;
					break;
				case Beverage::SIZE_LARGE:
					return $this->beverage->getTotalPrice() + 2.6;
					break;
				default:
					throw new Exception('invalid size');
			}
		}
	}
    
<?php

	class Beverage implements IBeverage
	{
		private $name;
		private $price;
		private $size;

		public const SIZE_SMALL = 'S';
		public const SIZE_MEDIUM = 'M';
		public const SIZE_LARGE = 'L';

		public function __construct( String $name , float $price, String $size )
		{
			$this->name = $name;
			$this->price = $price;
			$this->size = $size;
		}

		// ......

		public function getTotalPrice() : float
		{
			switch($this->size)
			{
				case Beverage::SIZE_SMALL:
					return $this->price;
					break;
				case Beverage::SIZE_MEDIUM:
					return $this->price * 1.3;
					break;
				case Beverage::SIZE_LARGE:
					return $this->price * 1.6;
					break;
			}
			return $this->price;
		}

		public function getSize() : String
		{
			return $this->size;
		}
	}
    
 <?php

	abstract class BaseTopping implements IBeverage 
	{
		protected $beverage ;

		public function __construct( IBeverage $beverage )
		{
			$this->beverage = $beverage;
		}

		public function getSize() : String
		{
			return $this->beverage->getSize();
		}

		public abstract function getTotalPrice() : float;
	}
    
    
    
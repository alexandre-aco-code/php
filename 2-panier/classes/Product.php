
<?php

class Product
{
    private $name;
    private $price;

    public function __construct(String $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): String
    {
        return $this->name;
    }

    public function setName(String $name): void
    {
        $this->name = $name;
    }

    public function display(): void
    {
        echo "<li>{$this->name} - {$this->price} €
		<form action='add.php' method='POST'>
			<input id='quantity' name='quantity'>
			<input type='hidden' name='productName' value='{$this->name}'>
			<button> Ajouter </button>
		</form>
		</li>";
    }
}

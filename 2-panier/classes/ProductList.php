in<?php

class ProductList {

    private $products;

    public function __construct()
    {

        $this->products = [];

        $product1 = new Product("coca", 4);
        $product2 = new Product("fanta", 3);
        $product3 = new Product("pepsi", 5);
        $product4 = new Product("sprite", 6);

        array_push( $this->products, $product1, $product2, $product3, $product4);

        // Autre manière d'écrire le array push :
        // $this->products[] = new Product('Coca', 2);


    }

    public function displayProducts() : void 
    {
        echo "<ul>";
        foreach( $this->products as $product ) {
            $product->display();
            echo "
            <form action='fees.php' method='POST'>
                <input type='hidden' name='ProductName' value='{$product->getName()}'></input>
                <input name='quantity'></input>
                <button> Ajouter </button>
            </form>
            ";
        }
        echo "</ul>";

    }

}
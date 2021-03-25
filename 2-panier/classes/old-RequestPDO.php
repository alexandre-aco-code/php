<?php 

class RequestPDO {

    private $pdo;

    public function __construct() 
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=solid', 'root', '');
    }

    //selectionner tous les produits
    public function selectAll()
    {
        $sql = "SELECT * FROM product";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // var_dump($products);
        // echo "</pre>";

        return $products;

    }


    //Vérifier qu'un produit existe
    // public function getProduct(string $name)
    // {
    //     $sql = "SELECT * 
    //             FROM product 
    //             WHERE Name = ? ";
    //     $query = $this->pdo->prepare($sql);
    //     $query->execute([$name]);

    //     $product = $query->fetchAll(PDO::FETCH_ASSOC);
    //     return $product;

    // }

    //insérer un panier
    public function saveCart(array $listOfProductOrder)
    {
        // echo "<pre>";
        // var_dump($listOfProductOrder);
        // echo "</pre>";

        foreach ( $listOfProductOrder as $productOrder ) 
        {
            echo "<pre>";
            var_dump($productOrder->product->getName());
            echo "</pre>";

            $sql = "INSERT INTO product 
                    (Name, Quantity) 
                    VALUES ( ?, ? ) ";
            $query = $this->pdo->prepare($sql);
            $query->execute([$productOrder->product->getName(), $productOrder->getQuantity()]);
        }

    }

    public function loadCart()
    {
        $sql = "SELECT * FROM cart";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $cart = $query->fetchAll(PDO::FETCH_ASSOC);
        return $cart;

    }

    public function clearCart()
    {
        
    }

}

?>


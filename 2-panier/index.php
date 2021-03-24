<?php

include 'classes/Product.php';
include 'classes/ProductList.php';

// encapsulation 


$productList = new ProductList();
$requestPDO = new RequestPDO();

?>

<html>

<head></head>

<body>
    <h1> Liste des produits </h1>

    <p> <a href="cart.php"> Voir le panier </a> </p>

    <?php $productList->displayProducts(); ?>

    <!-- <?php $requestPDO->selectAll(); ?> -->

    <!-- <?php var_dump($Database->getProduct('coca')); ?> -->

</body>

</html>
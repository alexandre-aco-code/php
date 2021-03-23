<?php

    include 'classes/Product.php';
    include 'classes/ProductList.php';

    // encapsulation 

    $productList = new ProductList();

?>

<html>

    <head></head>

    <body>
        <h1> Liste des produits </h1>

        <?php $productList->displayProducts(); ?>
    </body>

</html>
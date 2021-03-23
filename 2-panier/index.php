<?php

    include('classes/Product.php');
    include('classes/ProductList.php');

    include('classes/ProductOrder.php');

    $ProductList = new ProductList();

?>

<html>
    <head></head>
    <body>
        <h1>Liste des produits</h1>
        
        <?php $ProductList->displayProducts(); ?>

        
    </body>
</html>



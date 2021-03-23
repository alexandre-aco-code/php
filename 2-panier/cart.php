<?php

include 'classes/Product.php';
include 'classes/ProductList.php';
include 'classes/ProductOrder.php';
include 'classes/Cart.php';
include 'classes/Session.php';
// encapsulation 


$cart = new Cart();

?>

<html>

<head></head>

<body>
    <h1> Liste des produits </h1>

    <p> <a href="cart.php"> Voir le panier </a> </p>

    <?php $cart->displayCart(); ?>

    <a href="confirm.php"> Voir les frais des ports </a>
</body>

</html>
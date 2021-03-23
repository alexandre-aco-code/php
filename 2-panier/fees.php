<?php
    include 'classes/ProductOrder.php';
    
    $ProductOrder = new ProductOrder($_POST['ProductName'], $_POST['quantity']);

?>

<html>
<head></head>
<body>
    <h1>Panier</h1>
    <?php $ProductOrder->display() ?>

</body>
</html>


<html>

<body>

    <?php

    $pdo = new PDO('mysql:host=localhost;dbname=solid', 'root', '');

    $query = $pdo->query('SELECT * FROM product');

    /*$query = $pdo->prepare('SELECT * FROM product');
			$query ->execute();*/

    $products = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($products);
    $pdo = null;


    ?>



    <?php foreach ($products as $product) : ?>
        <p> <?php echo $product['nom'] ?> </p>
        <p> <?= $product['price'] ?> € </p>
    <?php endforeach; ?>
</body>

</html>

<html>

<body>

    <?php
    $name = $_GET['name'];
    $price = 5;

    $pdo = new PDO('mysql:host=localhost;dbname=solid', 'root', '');

    $sql = "INSERT INTO product VALUES(NULL, ? , ? )";

    $query = $pdo->prepare($sql);
    $query->execute([$name, $price]);


    ?>



</body>

</html>
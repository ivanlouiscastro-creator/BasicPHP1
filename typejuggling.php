<?php
$price = "50";
$quantity = 2;

$total = $price * $quantity;
?>

<!DOCTYPE html>
<html>
<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="styles.css" >
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Order Summary</h2>

    <p>Price: <?php echo $price; ?></p>
    <p>Quantity: <?php echo $quantity; ?></p>
    <p>Total: <?php echo $total; ?></p>

    <p>Price data type: <?php echo gettype($price); ?></p>
    <p>Total data type: <?php echo gettype($total); ?></p>
</body>
</html>

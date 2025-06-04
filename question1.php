<!DOCTYPE html>
<html>
<head>
    <title>Order Total</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>Quantity:</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
    </form>

    <?php
    $item = "pizza";
    $price = 5.99;
    
    if (isset($_GET["quantity"])) {
        $quantity = (int)$_GET["quantity"];
        $total = $quantity * $price;

        echo "You have ordered {$quantity} x {$item}.<br>";
        echo "Your total is: \$" . number_format($total, 2);
    }
    ?>
</body>
</html>

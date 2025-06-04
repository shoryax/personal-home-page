<!DOCTYPE html>
<html>
<head>
    <title>Math Functions</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>

        <label>y:</label>
        <input type="text" name="y"><br>

        <input type="submit" value="Total">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $total = null;

        // Uncomment one of these lines to apply a function
        // $total = abs($x);       // Absolute value
        // $total = round($x);     // Round to nearest integer
        // $total = floor($x);     // Round down
        // $total = ceil($x);      // Round up
        // $total = pow($x, 5)
        // $total = sqrt($x)
        // Example: basic operation
        $total = $x + $y;

        echo "Result: $total";
    }
    ?>
</body>
</html>

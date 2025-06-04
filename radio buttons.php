<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="PayPal">
        PayPal<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php

    if(isset($_POST["confirm"])) {

        $credit_card = null;
        //Method 1 (else-if statements)
            if(isset($_POST["credit_card"])) {
                $credit_card = $_POST["credit_card"];
                echo $credit_card; 
            }
            else if($credit_card == "Visa") {
                echo "You selected Visa!";
            }
            else if($credit_card == "PayPal") {
                echo "You selected PayPal!";
            }
            else if($credit_card == "American Express") {
                echo "You selected American Express!";
            }
            else {
                echo "Please make a selection!!";
            }
        //Method 2 (switches)
        switch($credit_card) {
            case "Visa";
                echo "You selected Visa!";
                break;
            case "PayPal";
                echo "You selected PayPal!";
                break;
            case "American Express";
                echo "You selected Visa!";
                break;
        }
    }
?>
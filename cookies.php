<?php

    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and other non-sensitive data

    setcookie("favorite_food", "pizza", time() + (86400 * 2), "/");
    setcookie("favorite_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("favorite_sides", "green salad", time() + (86400 * 4), "/");


    foreach ($_COOKIE as $key => $value) {
        echo" {$key} = {$value} <br>";
    }

    if (isset($_POST["favorite_food"])) {
        echo "Buy Some {$_COOKIE["favorite_food"]} !!!";
    }
    


?>
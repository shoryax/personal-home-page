<?php
    $foods = array("apple", "orange", "banana", "coconut");
    array_push($foods, "mango", "grape");
    $foods[] = "pineapple";

    foreach ($foods as $food) {
        echo $food . "<br>";
    }
?>

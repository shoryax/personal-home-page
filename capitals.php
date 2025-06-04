<?php
    $capitals = array("USA" => "Washington D.C.",
                    "Japan" => "Tokyo",
                    "India" => "New Delhi",
                    "Russia" => "Moscow");

    $capital = $capitals[$_POST["country"]];
    echo "The capital is {$capital}"; //prints the capital when the country is typed in the text-area 

    echo $capitals["Japan"]; //prints the capital of Japan

    foreach($capitals as $key => $value) { //prints everything there in the array
        echo "{$key} => {$value} <br>";
    }

    array_flip($capitals);
    foreach($capitals as $key => $value) { //prints everything flipped; key is now value and vice-versa
        echo "{$key} => {$value} <br>"; 
    }
    array_pop($capitals);
    array_shift($capitals);


?>
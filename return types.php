<?php

    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = "Bro Code";
    echo isset($username);  //prints 1

    if (isset($username)) {
        echo "The username is set!!";        //when false and null; prints "It's not set!!"
    }
    else {
        echo "It's not set!!";
    }


    if(empty($username)) {
        echo "The username is empty!!";      //when nothing is there, false, null, ""; prints its empty 
    }
    else {
        echo "The username is NOT empty here!!";
    }
?>
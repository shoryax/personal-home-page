<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Pizza<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>
<?php
//Method 1 (isset; else-if statements)
if (isset($_POST["submit"])) {
    if (isset($_POST["pizza"])) {
        echo "You like Pizza!!";
    } else if (isset($_POST["hamburger"])) {
        echo "You like Hamburger!!";
    } else if (isset($_POST["hotdog"])) {
        echo "You like Hotdog!!";
    } else if (isset($_POST["taco"])) {
        echo "You like Taco!!";
    } else {
        echo "Please select something nigga!";
    }
}
//Method 2 (empty; else-if statements)
        //if checks only first and second then it prints; You like Pizza
        //                                                You like Hamburger
        //                                                You don't like Hotdog
        //                                                You don't like Taco

    if (empty($_POST["pizza"])) {
        echo "You don't like Pizza!!";
    } else if (empty($_POST["hamburger"])) {
        echo "You don't like Hamburger!!";
    } else if (empty($_POST["hotdog"])) {
        echo "You don't like Hotdog!!";
    } else if (empty($_POST["taco"])) {
        echo "You don't like Taco!!";
    } else {
        echo "Please select something nigga!";
    }

    //Also, can write the switches for these too, just like we did for radio buttons.
?>
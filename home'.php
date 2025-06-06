<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <!-- instead of "home'.php" using PHP_SELF; to get the current file name without explicitly stating it -->
        username: <br>
        <input type="username" name="username">
        <input type="submit">
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST METHOD" == "POST"]) {
        echo "Hello!";
    }

?>
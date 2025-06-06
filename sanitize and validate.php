<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sanitize and validate.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php

    if (isset($_POST["login"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        echo "Hello {$username}";

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo "You are {$age}";

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        // Separating sanitize and validation
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        echo "You are {$age}";

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if (empty($email)) {
            echo "You didn't enter an email or was invalid !";
        }
        else {
            echo"Your email is {$email}";
        }
    }
?>
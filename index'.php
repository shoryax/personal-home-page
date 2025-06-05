<?php
// session = SGB used to store information on a user
//           to be used across multiple pages.
//           A user is assigned a session-id ex. login credentials

    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is the login page <br>
    <a href="session.php">This is the login page</a>
    <form action="home.php" method="post">
        username:
        <input type="text" name="username">
        password:
        <input type="text" name="password">
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>

<?php
    if (isset($_POST["login"])) {

        if (
            !empty($_POST["username"]) &&
            !empty($_POST["password"])) {

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // echo $_SESSION["username"] . "<br>";
            // echo $_SESSION["password"] . "<br>";

            header("Location: home.php");
        }
        else {
            echo"Missing argument/s <br>";
        }
    }
?>
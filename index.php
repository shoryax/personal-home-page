<?php

// include() = Copies the content of a file (php/html/text)
//             and includes it in your php file.
//             sections of our website become reusable
//             changes only need to be made in one place.

    include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is my Home page<br>
    Stuff about your home page can go here<br>
</body>

</html>
<?php
    include("footer.html");
?>
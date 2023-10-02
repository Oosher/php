

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>User name:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>





<?php

    echo $_POST["username"] ."<br> ". $_POST["password"];

?>
<!-- <?php
    $name = "bruh ";
    $food = "water";
    echo "hello im under the water <br> $name  $food \$"  ;
   
?> -->
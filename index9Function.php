

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

    function firstFuncInPhp(int $a ,int $b) {
        $c =sqrt($a**2+$b**2);
        return $c;
    }


    echo firstFuncInPhp(4,5);
?>

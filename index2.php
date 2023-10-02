

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
        <label>Amount:</label>
        <input type="text" name="amount"><br>
        <input type="submit" value="calc total">
    </form>
</body>
</html>





<?php

    $item = "water";
    $price = 1.99 ;
    $amount = $_POST["amount"];

    $total = $amount * $price;
    echo "your orders total is: $total  ";

?>

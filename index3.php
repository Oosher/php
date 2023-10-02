

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
        <label>y:</label>
        <input type="text" name="y"><br>
        
        <label>z:</label>
        <input type="text" name="z"><br>

        <input type="submit">
    </form>
</body>
</html>





<?php

    $y = $_POST["y"];
    $z = $_POST["z"];
    $total=null;
    $total2=null;
    $total3=null;

    $total = abs($y);

    $total2 = pow($y,$z);

    $total3 = max($y,$z);

    echo "$total  $total2 $total3" ;

?>

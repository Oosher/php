

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
        <label>radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit">
    </form>
</body>
</html>





<?php

    $r= $_POST["radius"];

    $c=null;

    $c = 2*pi()*$r;

    $c = round($c,4);

    $area = pi()* pow($r,2);

    $area = round($area,4);


    echo "c: $c area: $area ";

 

?>

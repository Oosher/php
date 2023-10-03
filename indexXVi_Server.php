

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) //disables any crosside scripts?>" method="post">
        <label>User name:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>





<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "submitted";
    }










/*     foreach($_SERVER as $key => $value){

        echo "$key => $value <br>";


    } */




?>

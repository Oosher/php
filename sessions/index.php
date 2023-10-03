<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" >
        <label>User name:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="sub" onsubmit="">
    </form>
</body>
</html>





<?php


    if (isset($_POST["sub"])) {


        $_SESSION["username"] = $_POST["username"];

        $_SESSION["password"] = $_POST["password"];


        echo "The userName And Password have been saved";

        header("Location: home.php"); //redirects to the home.php page

        exit();
        
    }

?>

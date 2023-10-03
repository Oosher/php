

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
        <label>Email:</label>
        <input type="text" name="email"><br>
        <label>Enter your ip:</label>
        <input type="text" name="ip"><br>
        <input type="submit" name="sub">
    </form>
</body>
</html>





<?php


    if (isset($_POST["sub"])) {
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

        $ip= filter_input(INPUT_POST,"ip",FILTER_VALIDATE_IP);

        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        echo "$username $password $email";







    }

?>

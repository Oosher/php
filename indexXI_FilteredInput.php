

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
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="sub">
    </form>
</body>
</html>





<?php


    if (isset($_POST["sub"])) {
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        echo "$username $password $email";







    }

?>

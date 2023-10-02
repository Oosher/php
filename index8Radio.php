

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
    
        <input type="radio" name="credit_card" value="visa">visa<br>
        <input type="radio" name="credit_card" value="mastercard">mastercard<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>





<?php




if (isset($_POST["confirm"])) { 


    if (isset($_POST["credit_card"])) {
        $cardType = $_POST["credit_card"];

        echo $cardType;
    }
    else{

        echo "please select a card type";
    }
 
}


?>

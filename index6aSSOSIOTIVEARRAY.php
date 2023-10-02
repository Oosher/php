<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
        <label>Enter a country ABV:</label>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php

    $capitals = [
    "ISR"=>"JER",
    "JAP"=>"TOK",
    "USA"=>"WAS",
    "GER"=>"BER"
    ];

    $capitals["JAP"]= "HEN";

    $capitals["CYN"] = "BEI";

    echo $capitals["ISR"]. "<br>";

    $keys = array_keys($capitals);

    $value = array_values($capitals);

    $amountOfCountries = count($capitals);


    $flippedCapitals = array_flip($capitals);

    foreach($capitals as $key=> $value){

        echo "$key  $value  <br>";
    }

    //--> task
    $capital="";
    $capital =$_POST["country"]? $capitals[$_POST["country"]]:"";

    echo "$capital <br>"

?>

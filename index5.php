







<?php

   $age = 13;
   
   $products = ["shimon","laptop","shmuel"];

   if ($age>=18) {

    echo "you are an adult leh kvarrrr <br>";
    
   }else{
        echo "go away pleaseeee <br>";
   }


   for ($i=0; $i < count($products); $i++) { 
    echo $products[$i]."<br>";
   }

   foreach($products as $product){

    echo " $product <br>";
   }
?>

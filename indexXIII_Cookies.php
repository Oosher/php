






<?php

    setcookie("fav_video", "videoName" ,time()+86400);// -- time()+86400 1 day
    setcookie("fav_food", "foodName" ,time()+86400*2);
    setcookie("fav_movie", "movieName" ,time()+86400*4);
    setcookie("fav_actor", "actorName" ,time()+86400*6);





    foreach($_COOKIE as $cookie => $value){
        echo "$cookie = $value <br>";

    }





    

    if(isset($_COOKIE["fav_food"])){

        echo "buy some {$_COOKIE["fav_food"]}";

    }else{


        echo "sorry we do not have any information about you";

    }


?>

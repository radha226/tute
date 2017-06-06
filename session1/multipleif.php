<?php


    $a = 20;

    $b = 25;

    if(($a >= 10 || $b >= 10) && $b*2 >= ($a*2)+20){

        if($a <= 15){
            echo "A less than 15 and greater than 10";
        }else{
            echo "A is greater than 10 but not less than 15";
        }

    }else{
        if($c = $b+$a >= 20){
            echo "One";
        }else{
            echo "two";
        }
    }


?>
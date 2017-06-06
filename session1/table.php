<?php
    //$max=10;

    // for($i=1; $i<=10; $i++){
    //     if($i<=5){
    //         echo "2"."*".$i."="."2"*$i;
    //         echo "<br>";
    //     }
    //     elseif($i<=6 || $i<=10){
    //         echo "3"."*".$max."="."3"*$i;
    //         echo "<br>";
    //         $max--;
    //     }
        
    // }




    // $table = 2;

    // for($i = 1; $i<=10; $i++){

    //     if($i > 5){
    //         $inc = $max;
    //         $max--;
    //         $table = 3;
    //     }else{
    //         $inc = $i;
    //     }
    //     echo $table." X ".$inc." = ".($table*$inc)."<br/>";
    // }


$tab=2;
$max=10;

    for($i=1; $i<=10; $i++){

        if($i%2==0){
            
            $inc=$max;
            $max--;
            $tab=3;
        }
        else{
            //  echo "3"."*".$i."="."3"*$i;
            
            $inc=$i;
            $tab=2;
        }
        echo $tab." X ".$inc." = ".($tab*$inc)."<br/>";
          
    }

?>



<?php
    $myarray=[2,3,5];
    $array2 = [3,6,9];
for($i=0; $i < count($myarray); $i++){


    for($j=1; $j<=10; $j++){

        if(in_array($j, $array2)){
            echo "skipped"."<br>";
        
        }else{
        echo $myarray[$i]."*".$j."=".$myarray[$i]*$j."<br>";
        }
    }
    echo"<Br><Br>";
}






    // $status = false;
    // for($a=0; $a< count($myarray); $a++){       

    //     for($j=1;  $j<=10; $j++){

    //         for($i = 0; $i < count($array2); $i++){
                
    //             if($j == $array2[$i]){
    //                 $status = true;
    //                 break;
    //             }else{
    //                 $status = false;
    //             }
    //         }
    //         //after break;
    //         if($status == true){
    //             echo "Skipped<br/>";
    //         }else{
    //             echo $myarray[$a]."*".$j."=".$j*$myarray[$a];
    //             echo "<br>";
    //         }
    //     }
    //    echo "<br/><br/>";
        

    // }
    //is_array

    

    

    
    
?> 
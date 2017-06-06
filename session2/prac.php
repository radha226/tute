<?php

    $myarray = array(
                        1,2,3,4,
                        array('one','two','three','four',array(1,2,3,4)),
                        array('o','t','f',5,6),
                        array(array('one'=>1,'two'=>2,3))
                    );
 echo $myarray[4]."<br/>";
    for($i = 0; $i < count($myarray); $i++){

        if(is_array($myarray[$i])){ //true or false
            for($j = 0; $j < count($myarray[$i]); $j++){
                if(is_array($myarray[$i][$j])){
                    foreach($myarray[$i][$j] as $k => $v){
                        echo $v."<br/>";
                    }
                }else{
                    echo $myarray[$i][$j]."<br/>";
                }
            }
        }else{
            echo $myarray[$i]."<br/>";
        }
    }
?>
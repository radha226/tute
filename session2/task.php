<?php

    $myarray = array(

                        1,2,3,4,5, 
                        array('two','three','four',array('o','t','th')),
                        array('one'=>1,'two'=>2,'three'=>3),
                        array('one','two',3,5,6,array('hello','world')),
                        array(array(5,6,7,8))
                    );


                    for($i=0; $i < count($myarray); $i++){
                        if(is_array($myarray[$i])){
                          // print_r($myarray);
                           foreach($myarray[$i] as $j=>$value){

                               if(is_array($value)){
                                    //print_r($value);
                                    for($j=0;  $j< count($value); $j++){
                                        
                                          echo $value[$j]."<br>";
                                    }
                                    
                               }else{
                                    echo $value."<br>";
                               }
                              
                           }
                        }
                        else{
                            echo $myarray[$i]."<br>";
                        }
                    }
?>
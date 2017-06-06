<?php

    $myarray = array(
                        1,
                        2,
                        3,
                        4,
                        5,
                        array(6,7,8,9,array(14,15,16,17)),
                        array(10,11,12,13)
                    );

    echo $myarray[5][4][0];
    // echo "<pre/>";
    // print_r($myarray[0]);
    // echo $myarray[2];
?>
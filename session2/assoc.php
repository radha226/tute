<?php

    $myarray = array('one' => 1,'two'=>2,3);

    echo "<pre/>";

    print_r($myarray);

    foreach($myarray as $key => $value){

        echo $key."----->".$value."<br/>";
    }

?>
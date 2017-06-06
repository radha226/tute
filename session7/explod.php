<?php

    $string = 'This is my string';

    $exp = explode(' ',$string);

    echo "<pre/>";
    print_r($exp);

    echo "<br/><br/>";

    $imp = implode(' ',$exp);

    echo "<pre/>";
    print_r($imp);

?>
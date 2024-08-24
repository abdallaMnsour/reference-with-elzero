<?php


    $names = ['abdalla', 'osama', 'ali', 'mohammed'];

    foreach($names as $name){
        echo "hello $name <br>";
    }

    echo "<br>";

    $countries = ['EG', 'USA', 'DB', 'EM'];

    $countries = ['EG'=>50, 'USA'=>20, 'DB'=>30, 'EM'=>10];

    foreach($countries as $country => $discount):
        echo "this is discount in $country: $discount <br>";
    endforeach;


?>
<?php


    $name = 'abdalla';
    $name2 = &$name; // الثنين بيوصلوا علي بعض
    $name2 = 'tasnim'; // tasnim الاثنين بقوا

    echo $name ;
    echo '<br>' ;
    echo $name2 ;
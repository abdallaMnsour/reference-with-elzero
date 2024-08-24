<?php

    $name1 = 'abdalla';
    $$name1 = 'tasnim'; // $abdalla = 'tasnim';
    $$$name1 = 'abdellrahman'; // $tasnim = 'abdellrahman';



    echo "<h1>$name1</h1>";
    echo '<br>';
    echo "<h1>${$name1}</h1>";
    echo '<br>';
    echo "<h1>$abdalla</h1>";
    echo '<br>';
    echo "<h1>${$$name1}</h1>";
    echo '<br>';
    echo "<h1>$tasnim</h1>";
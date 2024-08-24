<?php
    echo '<body style="background: #222; color: white; font-family: Arial;font-size: 25px;padding: 40px"><pre>';

    echo lcfirst('My name is abdalla mansour <br>'); // first index to lower
    echo ucfirst('my name is abdalla mansour <br>'); // first index to upper
    echo strtolower('MY NAME IS ABDALLA MANSOUR <br>'); // all to lower
    echo strtoupper('my name is abdalla mansour <br>'); // all to upper
    echo ucwords('my name is abdalla mansour <br>'); // all words to upper
    echo ucwords('my name is abdalla mansour this is my gmail /bodymansour8 @gmail .com<br>', ' '); // the second index ' ' is upper
    echo str_repeat('abdalla mansour <br>', 5); // repeat string 5 times

    // test

    echo str_repeat(ucwords('hello my name is abdalla <br>'), 3);

    // test 2
    $test2 = 'hello_my_name_is_tasnim<br>';
    echo ucwords(str_repeat($test2, 3), '_');

?>
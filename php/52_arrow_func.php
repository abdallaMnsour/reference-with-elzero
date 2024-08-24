<?php
    echo '<body style="background: #222; color: white; font-family: Arial;font-size: 25px;padding: 40px"><pre>';
    /**
     * arrow function
     *   syntax
     */
    $name = 'Tasnim';
    $array = ['abdalla','Tasnim','abdelrahman','sana'];

    $test_func_1 = fn()=> 'hello';
    $test_func_2 = fn($name)=>'hello '.$name;
    $test_func_3 = fn()=> 'hello '.$name; // arrow function can call element in local
    $test_func_4 = array_map(fn($concat) => "my name is $concat", $array);

    echo $test_func_2('abdalla');
    echo '<br>';
    echo $test_func_3();
    echo '<br>';
    print_r($test_func_4);
?>
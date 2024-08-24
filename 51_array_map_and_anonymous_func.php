<?php
    echo "<pre>";

    $local = 10;
    $calc = function($num) use($local) { // function بتدخل اي حاجه في الجلوبل لل use ال
        echo $num + $local;
    };
    $calc(4);


    echo "<br>";

    $numbers = [10, 20, 30, 40, 50, 60];
    
    function add_five($num){
        return $num + 5;
    };

    $add_five = array_map("add_five", $numbers);

    print_r($add_five);


    echo "<br>";

    // anonymous function
    $add_ten = array_map(function($num){return $num + 10;}, $numbers);

    print_r($add_ten);

?>
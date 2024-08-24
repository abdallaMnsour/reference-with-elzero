<?php


    $a = 10;
    $b = @$a or die("sorry this data is not found"); // if this data is not found print text
    echo $b;

    $c = @file("test_file.php") or die('<br>file is not found'); // 
    echo '<br>';
    echo '<pre>';
    print_r($c) ;
    echo '</pre>';

    @(include('test_file.php')) or die('you\'r include file is not found')
?>
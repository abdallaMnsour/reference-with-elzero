<?php
echo '<body style="background: #f9d9ff;color: #4d135b;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; background: #4d135b; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px">
abs mt_rand intdiv fmod 
</div><pre>';

    /**
     * math function
     *  
     *  abs
     *   absolute
     *  mt_rand
     *   mersenne twister random number generator algorithm
     *  intdiv
     *    integer division
     *  fmod
     *    floating point remainder
     */

echo '<br>################ abs ################<br>';


    echo abs(-3) . "\n";


echo '<br>################ mt_rand ################<br>';

    echo mt_rand() . "\n";
    echo mt_getrandmax() . "\n"; // يعطي اعلي قيمه في الراند
    echo mt_rand(1,6) . "\n";


echo '<br>################ intdiv ################<br>';


    echo 10 / 2 . "\n"; // 5
    echo gettype(10 / 2 ). "\n"; // integer

echo '<br>-------------------------------<br>';

    echo 10.5 / 2 . "\n"; // 5.25
    echo gettype(10.5 / 2 ). "\n"; // double

echo '<br>-------------------------------<br>';

    echo intdiv(10, 2). "\n"; // 5
    echo gettype(intdiv(10, 2)). "\n"; // integer

echo '<br>-------------------------------<br>';

    echo intdiv(10.5, 2). "\n"; // 5
    echo gettype(intdiv(10.5, 2)). "\n"; // integer


echo '<br>################ fmod ################<br>';


    echo 11 % 5 . "\n"; // 1
    echo gettype(11 % 5). "\n";// integer

echo '<br>-------------------------------<br>';

    echo fmod(11, 5) . "\n"; // 1
    echo gettype(fmod(11, 5)). "\n";// double

echo '<br>-------------------------------<br>';

    echo 11.5 % 5 . "\n"; // 1
    echo gettype(11.5 % 5). "\n";// integer

echo '<br>-------------------------------<br>';

    echo fmod(11.5, 5) . "\n"; // 1.5
    echo gettype(fmod(11.5, 5)). "\n";// double

?>
<?php
    /**
     * String Operators
     * 
     *  1  Concatenate String
     *  2  .
     *  3  .=
     */


    // الطريقه الاولي لعمل دمج
    $a = 'abdalla ';
    $a = $a . 'mohmmed ';
    $a = $a . 'mansour';

    echo $a;
    echo '<br>';

    // الطريقه الثانيه لعمل دمج
    $b = 'tasnim ';
    $b .= 'mohmmed ';
    $b .= 'mansour';

    echo $b;
    echo '<br>';
    echo '<br>';

    // الاستخدام
    $c = 'my name is';
    define('NAME', 'abdalla');

    echo "$c " . NAME; // Concatenate و عمل function يمكن اضافه


?>
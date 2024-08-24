<?php
    // aux او con لا يمكن عمل ملف باسم

    /*
    Pre-Defined Constants [Case Sensitive]
        PHP_VERSION
        PHP_OS_FAMILY
        PHP_INT_MAX
        DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
        __LINE__
        __FILE__
        __DIR__
    
    Reserved Keywordes
        break
        clone
    
    Search 
        PHP Predefined Constants
        Compile Time vs Runtime
        List of REserved Words
    */

    // Pre-Defined Constants
    echo PHP_VERSION;
    echo "<br>";
    echo PHP_OS_FAMILY;
    echo "<br>";
    echo PHP_INT_MAX;
    echo "<br>";
    echo DEFAULT_INCLUDE_PATH;
    echo "<br>";

    // Magic Constants
    echo "<br>";
    echo __LInE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __DIR__;
    echo "<br>";

    // we can't mack a Constants has name is puilt in function
    // Example:
    // define("break", 'ali');
    // echo break;
?>
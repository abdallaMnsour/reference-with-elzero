<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';

    /**
     * array_map(function, array or more)
     * 
     * array_filter
     *    ARRAY_FILTER_USE_KEY
     *    ARRAY_FILTER_USE_BOTH
     */

    $firstName = ['abdalla', 'gamal', 'ali', 'mohamed', 'osama', 'mahmod'];
    $lastName = ['mansour', 'mazin', 'mahmod', 'nasr', 'shady', 'kareem'];
    
    
    echo '<br>################ array map ################<br>';
    echo '<br>---------------- print array has first names ----------------<br>';
    
    function ar_names1($name){
        return "hello $name";
    }
    
    print_r(array_map('ar_names1', $firstName));


    echo '<br>---------------- print array has first and last names ----------------<br>';
    
    function ar_names2($first, $last){
        return "hello $first $last";
    }
    
    print_r(array_map('ar_names2', $firstName, $lastName));


    echo '<br>################ array filter ################<br>';

    echo '<br>---------------- shecking numbers values ----------------<br>';
    
    $array = [
        1 => 4,
        6 => 2,
        3 => 5,
        7 => 3,
        2 => 1,
        8 => 9,
        9 => 7,
    ];
    
    
    function sheck($n){
        return $n > 4;
    };
    
    print_r(array_filter($array, 'sheck'));



    echo '<br>---------------- shecking numbers keys ----------------<br>';

    
    $array = [
        1 => 4,
        6 => 2,
        3 => 5,
        7 => 3,
        2 => 1,
        8 => 9,
        9 => 7,
    ];



    function ar_names3($n){
        return $n > 4;
    }

    print_r(array_filter($array, 'ar_names3', ARRAY_FILTER_USE_KEY)); // return keys greater than 4



    echo '<br>---------------- shecking numbers both ----------------<br>';

    
    $array = [
        1 => 4,
        6 => 2,
        3 => 5,
        7 => 3,
        2 => 1,
        8 => 9,
        9 => 7,
    ];


    function ar_names4($k , $v){
        return $k > 4 || $v > 4;
    }

    print_r(array_filter($array, 'ar_names4', ARRAY_FILTER_USE_BOTH)); // return keys greater than 4

?>
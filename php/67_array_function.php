<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';

    /**
     * array_merge
     * array_replace
     * array_rand
     * shuffle
     */

    $array1 = ['one' => 'first', 'two' => 'second', 'three' => 'third',];
    $array2 = ['fore' => 'forth', 'one' => 'this is num five'];

    $array3 = [23 => 'first', 23 => 'second', 4 => 'third',];
    $array4 = [6 => 'forth',23 => 'this is num five'];

    $rand = ['A', 'B', 'C', 'D', 'E', 'F'];


    echo '<br>---------------- array marge ----------------<br>';

    print_r(array_merge($array1, $array2));
    print_r(array_merge($array3, $array4));
    
    echo '<br>---------------- array replace ----------------<br>';
    
    print_r(array_replace($array3, $array4));
    
    echo '<br>---------------- array rand ----------------<br>';
    
    echo array_rand($rand);

    echo '<br>---------------- shuffle ----------------<br>';

    shuffle($array1);
    print_r($array1);
    


################################################################################################
############################################# test #############################################
################################################################################################
echo '<h4 style="color: #2196f3">##########------------==== test shuffle is true ====------------###########</h4>';



    /* test shuffle is true */


    $array_shuffle = ['one', 'two', 'three', 'four'];

    function test_shuffle($array){
        $back_array = [];
        for ($i = 0; $i < count($array); $i++){
            $rand = array_rand($array);
            if (!in_array($array[$rand], $back_array)){
                $back_array[] = $array[$rand];
            }
            if (count($back_array) < count($array)){
                $i--;
            }
        }
        return $back_array;

    }

    print_r(test_shuffle($array_shuffle));
?>
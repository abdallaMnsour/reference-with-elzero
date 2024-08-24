<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';

    /**
     * array_keys (array, search, by type and value)
     * array_values (array) => remove the keys
     * array_pad
     * array_product
     * array_sum
     */


    $names = ['osama', 'ali', 'abdalla', '1', 1, 'ali', 'mohamed', 'mazin', 'tasnim'];
    $names1 = ['os' => 'osama', 'ali' =>  'ali', 'abd' =>  'abdalla', '1', 1, 'ali', 'mohamed', 'mazin', 'tasnim'];
    $abc = ['a' => 'A','B', 'C','D'];
    $numbers = [2,2,3];

    print_r(array_keys($names, '1', true));

    print_r(array_values($names1));

    print_r(array_pad($abc, -10, '*'));

    echo array_product($numbers) . '<br>';
    
    echo array_sum($numbers) . '<br>';






################################################################################################
############################################# test #############################################
################################################################################################

                                /* array keys !!! */


    function array_keys_test($array, $value=false, $bool=false)
    {
        $back_array = [];

        if ($bool){
            foreach ($array as $key => $values){
                if ($array[$key] === $value){
                    array_push($back_array, $key);
                }
            }
        }else{
            foreach ($array as $key => $values){
                if ($array[$key] == $value){
                    array_push($back_array, $key);
                }
            }
        }

        if ($value === false){
            foreach ($array as $key => $value){
                array_push($back_array, $key);
            }
        }
        return $back_array;
    }

    print_r(array_keys($names, '1', true));


    print_r(array_keys_test($names , 1, true));




                                /* array pad */
                                // wateing ...

    function pad($array, $count, $switch)
    {
        $cou = count($array);
        
        $back_array_value = [];

        if ($count > 0 and $count > $cou){
            for($i = 0; $i < $count; $i++){
                if (@$array[$i] == NULL) {
                    array_push($array, $switch);
                    array_push($back_array_value, $array[$i]);
                }else{
                    array_push($back_array_value, $array[$i]);
                }
            }
        }
        return $back_array_value;
    }

    print_r(pad($abc, 10, '#'))


?>
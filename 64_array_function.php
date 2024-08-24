<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';
     
     
     // echo '<br>-------------------------------<br>';
     // 
     // 


    /**
     * array_reverse => (الاحتفاظ برقم الاراي , عكس الاراي) => تقوم بعكس الاراي
     * array_flip => يبدل القيمه بالمفتاح
     * count => (اذا كان في اراي داخل اراي يقوم بعها, الاراي)
     * array_key_exists => (هل الاراي بها مفتاح معين) => terurn true or false
     * in_array => (هل الاراي بها قيمه معين) => terurn true or false
     */

    $array = ['abdalla', 'mohamed', 'ali', 'osama', 'mahmod', [1, 2 ,3]];




    $اسماء = ['محمد', 'علي', 'عبدالله'];

    print_r($اسماء);
    
    print_r($array);
    echo '<br>-------------------------------<br>';
    print_r(array_reverse($array));
    echo '<br>-------------------------------<br>';
    print_r(array_reverse($array, 'this string is true'));
    
    echo '<br>###############################<br>';
    
    $array1 = ['abd' => 'abdalla', 'mohamed', 'ali', 'osama', 'mahmod'];
    
    print_r(array_flip($array1));;
    
    echo '<br>###############################<br>';
    
    print_r(count($array));
    echo '<br>';
    print_r(count($array, 1));
    
    
    echo '<br>###############################<br>';
    
    var_dump(array_key_exists('abd', $array1));// هل هناك مفتاح في الاراي ده
    
    echo $array1['abds'];







############################################################################
################################### test ###################################
############################################################################

    $array = ['abd' => 'abdalla', 7 => 'mohamed', 'ali', 'os' => 'osama', 'mahmod'];


    echo '<br>================ flip ================<br>';

    function flip($array){
        $back = [];
        foreach ($array as $keys => $values){
            $back += [$values => $keys];
        }
        return $back;
    }

    print_r(flip($array));


    echo '<br>================ in array ================<br>';

    function in_array_test($value, $array) {
        foreach ($array as $values) {
            if ($value == $values){
                return true;
            }
        }
        return false;
    }

    var_dump(in_array('ali', $array1));
    var_dump(in_array_test('ali', $array1));


    echo '<br>================ test count ================<br>';
    
    function test_count($array){
        $i = 0;
        foreach ($array as $value):
            $i++;
        endforeach;
        return $i;
    }
    
    echo test_count($array1);


    echo '<br>================ key exists ================<br>';
    
    function key_exists_test($value, $array){
        foreach($array as $key => $values):
            if ($value == $key){
                return true;
            }
        endforeach;
        return false;
    }
    
    var_dump(array_key_exists('abd', $array)); // هل هناك مفتاح بهذا الاسم في هذا الاراي
    var_dump(Key_exists_test('abd', $array)); // هل هناك مفتاح بهذا الاسم في هذا الاراي


    echo '<br>================ array reverse ================<br>';

    function reverse($array, $bool=false){
        // $default_array_value = [];
        // $default_array_key = [];
        $back_array_value = [];
        $back_array_key = [];
        if ($bool){
            foreach($array as $key => $value){
                array_unshift($back_array_value, $value);
                array_unshift($back_array_key, $key);
            }
            
            return array_combine($back_array_key, $back_array_value);
        }else{
            foreach($array as $key => $value){
                // // for ($m = 0; $m < count($key); $m++){
                //     if (gettype($key) == 'integer'){
                //         // count($key);
                //         $i = 0;
                //         $key = $i;
                //         $i++;
                //     }
                // // }
                
                array_unshift($back_array_value, $value);
                // array_push($back_array_key, $key);
            }
            return $back_array_value;
        }
    }

    echo count($array);

    print_r(array_reverse($array, false));
    print_r(reverse($array, false));
?>
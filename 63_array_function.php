<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';
    /**                                                 
     * array_chunk => (get array , count array in array, )
     * array_change_key_case => default is lower but [1 or true or CASE_UPPER] => key is upper
     * array_combine => concat two array [keys and values] ! But thay must be equal in numbers
     * array_count_values => تحسب عدد القيم المتكرره وتضع القيمه كمفتاح
     */

    $array1 = ['abdalla', 'kareem', 'ali', 'mona', 'shaima'];
    $array2 = ['ME'=>'abdalla', 'firnd'=>'kareem', 'no'=>'ali', 'mon'=>'mona', 'sh'=>'shaima'];

    print_r(array_chunk($array1, 2)); // لها اندكسات خاص بها array كل قطعه
    echo '<br>-----------------------------<br>';
    print_r(array_chunk($array1, 2, true)); // يقطع الاراي لكن عناصره تظل بها نفس ارقام الاندكسات
    echo '<br>-----------------------------<br>';
    print_r(array_chunk($array2, 2)); // false يكتب اسم الاندكس بدل رقمه طالما القيمه
    echo '<br>-----------------------------<br>';
    print_r(array_chunk($array2, 2, true)); // true الفرق يكتب اسم الاندكس بدل رقمه طالماالقيمه
    

    echo '<br>###############################<br>';
    
    
    print_r(array_change_key_case($array2)); // default is lower
    echo '<br>-----------------------------<br>';
    print_r(array_change_key_case($array2, CASE_LOWER)); // to lower
    echo '<br>-----------------------------<br>';
    print_r(array_change_key_case($array2, false)); // to lower
    echo '<br>-----------------------------<br>';
    print_r(array_change_key_case($array2, 0)); // to lower
    
    echo '<br>=============================<br>';

    print_r(array_change_key_case($array2, CASE_UPPER)); // to upper
    echo '<br>-----------------------------<br>';
    print_r(array_change_key_case($array2, 1)); // to upper
    echo '<br>-----------------------------<br>';
    print_r(array_change_key_case($array2, true)); // to upper
    echo '<br>-----------------------------<br>';
    

    echo '<br>###############################<br>';
    
    $keys = ['A', 'B', 'C', 'D'];
    $values = ['abdalla', 'belal', 'coda', 'dani'];
    
    print_r(array_combine($keys, $values));
    
    
    echo '<br>###############################<br>';


    $array3 = ['A', 'B', 'C', 'D', 'A', 'A', 'D'];
    print_r($array3) ;
    print_r(array_count_values($array3)) ;


    echo '<br>##########------------==== test ====------------###########<br>';
    // test  يجب امساك المفتاح لعمل هذا الاختبار

    function array_count($array){
        $array2 = [];

        foreach($array as $keys => $values){
            $i = 0;

            foreach ($array as $index => $name) {
                if ($array[$keys] == $array[$index]){
                        $i++;
                }
            }

            $array2 += [$values => $i];
        }
    
    return $array2;
    }

    $testArray = ['hamed', 'hamed','gamal', 'ali', 'abdalla', 'mohamed', 'mazin', 'mazin', 'mazin'];

    // $test = ['test' => 'hello'];
    // $testArray += $test;

    // print_r($testArray);
    print_r(array_count($testArray));
    print_r(array_count_values($testArray));

?>
<?php echo '<pre>';
    //                     1                   2           3                    4
    // str_replace(العدد الذي تم تغيره(اختياري) , النص , الحرف المرغوب , الحرف الغير مرغوب)
    echo str_replace(['@', '#'], [' ', 'a'], 'hello@my@name@is #bd#ll# manosur',$test);
    echo '<br>';
    echo $test;
    echo '<br>';
    print_r(str_replace(['one', 'two'], [1, 2], ['one','two', 'three'],$test));
    echo '<br>';
    print_r(str_ireplace(['one', 'two', 'three'], [1, 3], ['one','two', 'three'],$test));
?>
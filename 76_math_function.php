<?php
echo '<body style="background: #f9d9ff;color: #4d135b;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #4d135b;">
sqrt min max
</div><pre>';

    /**
     * sqrt => بيجيب الجزر التربيعي
     * min => بيرجع اقل قيمه
     * max => بيرجع اعلي قيمه
     */

     echo '<br>################ sqrt ################<br>';


    echo sqrt(25). "\n"; // 5
    echo sqrt(9). "\n"; // 3
    echo sqrt(100). "\n"; // 10


    echo '<br>################ min ################<br>';
    
    
    echo min(12,34,45,6,2,6). "\n"; // 2
    echo min([12,34,45,6,2,6]). "\n"; // 2
    print_r(min([12,34,45,6,2,6], [1,34,75,56,22,16])). "\n"; // second array
    print_r(min([12,34,45,6,2,6], [11,34,75,56,22,16])). "\n"; // first array


    echo '<br>################ max ################<br>';


    echo max(12,34,45,6,2,6). "\n"; // 2
    echo max([12,34,45,6,2,6]). "\n"; // 2
    print_r(max([12,34,45,6,2,6], [1,34,75,56,22,16])). "\n"; // first array
    print_r(max([12,34,45,6,2,6], [111,34,75,56,22,16])). "\n"; // second array
?>
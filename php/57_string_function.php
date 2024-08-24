<?php echo '<body style="background: #222; color: white; font-family: Arial;font-size: 25px;padding: 40px"><pre>';
    /**
     * strpos
     * strrpos
     * stripos
     * strripos
     * supstr_count
     */

    echo strpos('my name is abdalla', 'a', 2); // 4
    echo '<br>';
    echo strrpos('my name is abdalla', 'a'); // 17
    echo '<br>';
    echo stripos('my name is abdalla', 'A'); // 17
    echo '<br>';
    echo strripos('my name is abdalla', 'A'); // 17
    echo '<br>';
    echo substr_count('my name is abdalla', 'a', 5, 8); // => 1 في النص التالي a كم مره يتكرر حرف ال

?>
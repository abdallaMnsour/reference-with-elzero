<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 25px;padding: 40px"><pre>';
    /**
     * strstr or strchr [strchr is alias]
     * stristr
     * number_formate
     */

    echo strstr('my name is abdalla', 'is')."<br>"; // is abdalla
    echo strstr('my name is abdalla', 'is', true)."<br>"; // my name 

    echo '<br>';
    // الحروف الحساسه
    echo stristr('my name is abdalla', 'IS')."<br>"; // is abdalla
    echo stristr('my name is abdalla', 'IS', true).'<br>'; // my name 
    
    echo '<br>';

    echo number_format(1000000.1243).'<br>'; // 1,000,000
    echo number_format(1000000.1243, 2).'<br>'; // 1,000,000.12
    echo number_format(1000000.1234, 4).'<br>'; // 1,000,000.1243
    echo number_format(1000000.1234, 4, '<').'<br>'; // 1,000,000<1243
    echo number_format(1000000.1234, 4, '<', '^').'<br>'; // 1^000^000<1243
?>
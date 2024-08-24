<?php
echo '<body style="background: #cbffed;color: #068a71;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: white;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #068a71;">
filter (list) (id) (var)
</div><pre>';

    /**
     * filter_list
     * filter_id
     * filter_var => return ( ture || false )
     */


    print_r(filter_list());

    echo filter_id('boolean'); // 258

    $var = 'on'; // true || on || yes || 1

    if (filter_var($var, FILTER_VALIDATE_BOOL)){

        echo "\nfilter is true";

    }else{

    echo "\nfilter is false";

    }
?>
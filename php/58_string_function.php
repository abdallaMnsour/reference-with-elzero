<?php echo '<body style="background: #222; color: white; font-family: Arial;font-size: 25px;padding: 40px"><pre>';
    /**
     * parse_str
     * quotemeta
     * str_pad
     *   STR_PAD_RIGHT
     *   STR_PAD_LEFT
     *   STR_PAD_POTH
     * strtr
     */

    parse_str('name=abdalla&age=21', $array);
    echo $array['name'];
    echo $array['age'];

    echo '<br>';
    
    echo 'hello () [] // ^ % & *';
    echo '<br>';
    echo quotemeta('hello () [] // ^ % & *');
    echo '<br>';



    echo '12' . '<br>';
    echo '235' . '<br>';
    echo '4352' . '<br>';
    echo '62435' . '<br>';
    echo '475234' . '<br>';
    
    
    echo str_pad('12', 8, '*', STR_PAD_LEFT) . '<br>';
    echo str_pad('235', 8, '*', STR_PAD_LEFT) . '<br>';
    echo str_pad('4352', 8, '*', STR_PAD_LEFT) . '<br>';
    echo str_pad('62435', 8, '*', STR_PAD_LEFT) . '<br>';
    echo str_pad('475234', 8, '*', STR_PAD_LEFT) . '<br>';


    echo strtr('my name is abdaalla mansour', ' ', '_');
?>
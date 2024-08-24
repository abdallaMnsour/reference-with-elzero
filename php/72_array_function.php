<?php

use function PHPSTORM_META\elementType;

 echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';

    /**
     * array_reduce(array, 'function', carry)
     */

    $array = [5, 4, 43, 34, 6];

    function call($carry, $item){
        echo "$carry \n"; // in the first == null
        echo "$item \n";
        echo $carry + $item . "\n";
        echo '############<br>';
        return $carry + $item;
    }

    echo array_reduce($array, 'call');



################################################################################################
############################################# test #############################################
################################################################################################


    echo '<br>##########------------==== find small ====------------###########<br>';

    $array2 = [12, 53, 7, 1, 4, 45, 12, 70, 10];

    $bool = null;
    function fsmall($carry, $item)
    {
        global $bool;

        if ($bool){
            if ($carry > $item){ // اكبر من او اصغر من => القيمه الاكبر او القيمه الاصغر في الاراي
                return $item;
            }
            return $carry;
        }

        $bool = true;
        return $item;
    }
    
    echo array_reduce($array2, 'fsmall');

?>
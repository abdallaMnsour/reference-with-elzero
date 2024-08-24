<?php
echo '<body style="background: #f9d9ff;color: #4d135b;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #4d135b;">
round
</div><pre>';

    /**
     * round
     *   mode
     *      PHP_ROUND_HALF_UP  => default
     *      PHP_ROUND_HALF_DOWN
     *      PHP_ROUND_HALF_EVEN => لاقرب عدد زوجي
     *      PHP_ROUND_HALF_ODD => لاقرب عدد فردي
     */

    
    echo '<br>---------------- round ----------------<br>';

    echo round(10.5). "\n"; // 11
    echo round(10.4). "\n"; // 10

    echo round(10.99, 1). "\n"; // 11
    echo round(10.69, 1). "\n"; // 10.7

    echo round(10.50, 0, PHP_ROUND_HALF_UP). "\n"; // 11 default
    echo round(10.50, 0, PHP_ROUND_HALF_DOWN). "\n"; // 10

    echo round(10.50, 0, PHP_ROUND_HALF_EVEN). "\n"; // 10
    echo round(11.50, 0, PHP_ROUND_HALF_EVEN). "\n"; // 12

    echo round(10.50, 0, PHP_ROUND_HALF_ODD). "\n"; // 11
    echo round(11.50, 0, PHP_ROUND_HALF_ODD). "\n"; // 11
?>
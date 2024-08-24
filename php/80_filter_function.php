<?php
echo '<body style="background: #cbffed;color: #068a71;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: white;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #068a71;">
email int float url
</div><pre>';

    /**
     * FILTER_SANITIZE_EMAIL
     * 
     * FILTER_SANITIZE_NUMBER_INT
     * 
     * FILTER_SANITIZE_NUMBER_FLOAT
     *      flags =>
     *          FILTER_FLAG_ALLOW_THOUSAND
     *          FILTER_FLAG_ALLOW_FRACTION
     * 
     * FILTER_SANITIZE_URL
     */

echo '<br>---------------- email sanitize ----------------<br>';


    $email = 'boda     <>>><>/()\   mansour8@gmail.com'; // "bodamansour8@gmail.com"

    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));


echo '<br>---------------- int sanitize ----------------<br>';


    $int = '100  asdf  +   sdf   100.,'; // "100+100"

    var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

    
echo '<br>---------------- float sanitize ----------------<br>';


    $float = '1,21    asd   5,614.23'; // "1,215,614.23"

    var_dump(filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT, ['flags' => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]));


echo '<br>---------------- url sanitize ----------------<br>';


    $url = 'https://bod      em    ans.com'; // "https://bodemans.com"

    var_dump(filter_var($url, FILTER_SANITIZE_URL))

?>
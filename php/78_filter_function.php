<?php
echo '<body style="background: #cbffed;color: #068a71;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: white;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #068a71;">
BOOL URL IP MAC
</div><pre>';

    /**
     **** filters ****
     *
     * FILTER_VALIDATE_BOOL => True ['yes', 'on', 1, True] | False ['no', 'off', 0, False, '']
     *       flag => FILTER_NULL_ON_FAILURE => ['no', 'off', 0, False, ''] if (element is not [ture of false]) => null
     * 
     * FILTER_VALIDATE_URL
     *       flags =>
     *          FILTER_NULL_ON_FAILURE     => false بيرجع url لو القيمه غير
     *          FILTER_FLAG_PATH_REQUIRED  => يوجد مسار ام لا
     *          FILTER_FLAG_QUERY_REQUIRED => ام لا query string يوجد 
     * 
     * FILTER_VALIDATE_IP
     *       flags =>
     *          FILTER_NULL_ON_FAILURE
     *          FILTER_FLAG_IPV4
     *          FILTER_FLAG_IPV6
     * 
     * FILTER_VALIDATE_MAC => media access control address
     *       flags => 
     *          FILTER_NULL_ON_FAILURE
     */


    $bool = '1'; // no off 0 false ''
    var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));

    echo "\n";

    $url = 'a://a';
    $url2 = 'https://abdalla.org/context/?id=100';

    var_dump(filter_var($url, FILTER_VALIDATE_URL)). "\n"; // ture

    var_dump(filter_var($url2, FILTER_VALIDATE_URL, ['flags' => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED])). "\n"; // NULL


    echo "\n";

    $ip = '190.1.23.123';

    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)); //false

    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)); //190.1.23.123

    var_dump(filter_var($ip, FILTER_VALIDATE_IP, ['flags' => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4])); //190.1.23.123


    echo "\n";

    $mac = '00:00:5e:00:53:fa';

    var_dump(filter_var($mac, FILTER_VALIDATE_MAC)); // 00:00:5e:00:53:fa if False

    var_dump(filter_var($mac, FILTER_VALIDATE_MAC , FILTER_NULL_ON_FAILURE)); // if NULL
?>
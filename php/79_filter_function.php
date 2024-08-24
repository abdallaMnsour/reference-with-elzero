<?php
echo '<body style="background: #cbffed;color: #068a71;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: white;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #068a71;">
EMAIL INT FLOAT
</div><pre>';

    /**
     *  FILTER_VALIDATE_EMAIL
     *      flag =>
     *          FILTER_NULL_ON_FAILURE
     * 
     *  FILTER_VALIDATE_INT
     *      flag =>
     *          FILTER_NULL_ON_FAILURE
     *      options =>
     *          min_range
     *          max_range
     * 
     *  FILTER_VALIDATE_FLOAT
     *      flag =>
     *          FILTER_NULL_ON_FAILURE
     *      options =>
     *          min_range
     *          max_range
     */

    $email = 'bodemansour8@gmail.com';
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));


    $int = 100.00;

    var_dump(filter_var(
        $int, FILTER_VALIDATE_INT,
        ['flags' => FILTER_NULL_ON_FAILURE, 'options' => ['min_range' => 50, 'max_range' => 100]]));


    $float = '99.9';

    var_dump(filter_var(
        $float, FILTER_VALIDATE_FLOAT,
        ['flags' => FILTER_NULL_ON_FAILURE, 'options' => ['min_range' => 50, 'max_range' => 100]]));
?>
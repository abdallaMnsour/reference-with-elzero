<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';

    /**
     * array_slice
     * array_splice
     */

    echo '<br>---------------- array slice ----------------<br>';

    $array = ['o' => 'one', 9 => 'two', 'three', 'four', 'five', 'six'];

    print_r(array_slice($array, 2)); // three four five six

    print_r(array_slice($array, 2, -2)); // three four

    print_r(array_slice($array, 0, -2)); // one two three four

    print_r(array_slice($array, 0, -2, true)); // تترك المفتاح كما هو حتي لو كان رقم

    echo '<br>---------------- array splice ----------------<br>';

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    print_r(array_splice($array, 2, -5, ['three', 'four']));

    print_r($array);
?>
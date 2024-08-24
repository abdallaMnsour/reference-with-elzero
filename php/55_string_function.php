<?php echo '<body style="background: #222; color: white; font-family: Arial;font-size: 25px;padding: 40px"><pre>';

    /**
     * join => it's like [implode]
     * implode => array to string [join() => is alias]
     * explode => string to array
     * str_shuffle => random order
     * strrev => بتعكس الجمله
     * trim => remove spaces in string
     */

    $array = ['abdalla', 'mohamed', 'abdalla', 'mansour'];
    $string = 'my name is abdalla';

    echo implode('_',$array);
    echo '<br>';
    echo join('_', $array);
    echo '<br>';
    
    // ---------------------
    print_r(explode(' ',$string, 2));
    print_r(str_split($string));
    echo '<br>';
    
    // ---------------------
    echo str_shuffle('abdalla');
    echo '<br>';
    
    // ---------------------
    echo trim('   abdalla    ');
    echo '<br>';
    echo strlen('   abdalla    '); // => 14
    echo '<br>';
    echo strlen(trim('   abdalla    ')); // => 7
    echo '<br>';
    echo trim('###abdalla##', '#'); // => 7
    echo '<br>';
    echo strlen(trim('###abdalla##', '#')); // => 7
    echo '<br>';


?>
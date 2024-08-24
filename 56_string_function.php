<?php echo '<body style="background: #222; color: white; font-family: Arial;font-size: 25px;padding: 40px"><pre>';
    /**
     * chunk_split
     * strlen
     * str_split
     * strip_tags
     * nl2br
     */

    $string = 'my name is abdalla mansour';

    echo chunk_split($string, 1);
    echo '<br>';
    echo strlen($string);
    echo '<br>';
    print_r(str_split($string, 3));
    echo '<br>';
    echo "<h6>$string and my age is <mark>21</mark></h6>"; // default tag
    echo '<br>';
    echo strip_tags("<h6>$string and my age is <mark>21</mark></h6>"); // remove all tags
    echo '<br>';
    echo '<br>';
    echo nl2br("hello
    $string
    and my age is 21
    i learn [php, javascript, jQuare, bootstrap, html, css]");
?>
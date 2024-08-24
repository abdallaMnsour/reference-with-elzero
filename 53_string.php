<?php echo '<body style="background: #222; color: white; font-family: Arial;font-size: 25px;padding: 40px"><pre>';
    /**
     * Access Element
     * Update Element
     */

    $name = 'abdalla mohammed mansour';
    
    // Access Elenment
    echo "last index is '{$name[strlen($name) - 1]}'"; // r
    echo '<br>';
    echo "last index is '{$name[-1]}'"; // r
    
    // Update Element
    echo '<br>';
    echo '<br>';

    $name[0] = 'A';
    $name[28] = 'A'; // if index is not found print this string in this index
    
    echo $name;
?>
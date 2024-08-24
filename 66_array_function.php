<?php echo '<body style="background: #eeffef; color: #009688; font-family: Arial;font-size: 22px;padding: 40px"><pre>';
    /**
     * current => اين يقف العنصر الان
     * next => يشير علي العنصر التالي
     * prev => يشير علي العنصر السابق
     * reset => يرجع لاول عنصر
     * end => يذهب الي اخر عنصر
     */
    $names = ['abdalla', 'mohamed', 'ali', 'mahmod', 'osama'];

    echo current($names).'<br>'; // abdalla
    echo next($names).'<br>'; // mohamed
    echo current($names).'<br>'; // mohamed
    echo next($names).'<br>'; // ali
    echo current($names).'<br>'; // ali
    echo prev($names).'<br>'; // mohamed
    echo end($names).'<br>'; // osama
    echo current($names).'<br>'; // osama
?>
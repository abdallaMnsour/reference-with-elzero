<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
file feof
</div><pre>';

    /**
     * file($stream) => put the rows in an array
     * feof($stream) => if the pointer in the end => return True
     *      => if you will use the while loop, you have use [ fgets ] !
     */


    
    $stream = fopen('file read.txt', 'r');

    // $i = 0;
    // while (!feof($stream)){
    //     echo "line one " . ++$i . " " . fgets($stream);
    // }

    
    for ($i = 0; $i<count(file('file read.txt')); $i++){
        echo fgets($stream). "<br>";
    }



    print_r(file('file read.txt'));
    
    var_dump(feof($stream)) ;
    fclose($stream);

?>
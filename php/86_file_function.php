<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
fopen fread fgets fclose
</div><pre>';

    /**
     * fopen
     * fgets
     * fread
     * fclose
     */

    $read = fopen('file read.txt', 'r');

    echo fgets($read); // => my
    echo fgets($read, 3); // => my \n na

    echo fread($read, 12); // => كملت الناقص
    fclose($read);
?>
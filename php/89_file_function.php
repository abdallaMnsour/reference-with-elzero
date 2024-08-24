<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
rewind fseek
</div><pre>';

    /**
     * rewind => the pointer in the first
     * fseek => the pointer is anywhere i want
     */

    $stream = fopen('file read.txt', 'r');

    // echo fgets($stream);
    
    // rewind($stream); // => always go to line 0
    fseek($stream, 40);

    echo fgets($stream);

    // echo mb_strlen("my\r\nname\r\nis\r\nabdalla\r\nhello my name is ", "8bit"); ???
    fclose($stream);
?>
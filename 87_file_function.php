<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
fwrite
</div><pre>';

/**
 * 
 */

$write = fopen('file read.txt', 'a');

fwrite($write, "\nhello my name is abdalla");
fwrite($write, "\nhello my name is abdalla", 10);

fclose($write);
?>
<?php
// style
echo '<style>input {background: #cbe5ff;border: none;border:1px solid #06488a; padding:8px;margin:3px;color:#06488a}input:hover{background:#06488a;color:white}</style>
<body style="background: #cbe5ff;color: #06488a;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: #cbe5ff;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #06488a;">
session
</div><pre>';

    // you have to write it first code
    session_start(); // important

    $_SESSION['name'] = 'abdalla';
    $_SESSION['id'] = '13a45ag4g61fa412';

    

?>

<a href="test/zero/1test.php">click</a>
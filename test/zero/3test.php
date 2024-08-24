<?php session_start();
echo "<style>input {background: #cbe5ff;border: none;border:1px solid #06488a; padding:8px;margin:3px;color:#06488a}input:hover{background:#06488a;color:white}</style>
<body style='background: #cbe5ff;color: #06488a;font-family: Arial;font-size: 22px;padding: 40px'>
<div style='width: 100%;text-align: center;color: #cbe5ff;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #06488a;'>
hello_$_SESSION[username]
</div><pre>";
    

    print_r($_SESSION);
    echo "hello $_SESSION[username]";

?>

<a href="logout.php">logout</a>
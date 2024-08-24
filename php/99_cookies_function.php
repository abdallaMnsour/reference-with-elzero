<?php
echo '<style>input {background: #cbe5ff;border: none;border:1px solid #06488a; padding:8px;margin:3px;color:#06488a}input:hover{background:#06488a;color:white}</style>
<body style="background: #cbe5ff;color: #06488a;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: #cbe5ff;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #06488a;">
path
</div><pre>';

    /**
     * setcookie(name, value, expires, path, domain, secure, http_only)
     */

    
    // setcookie('name', 'abdalla', time() + 60 * 60 * 24 * 30); // return 30 day

    setcookie('name', 'mohamed', strtotime('+1 month'), '/'); // return 31 day


    if (isset($_COOKIE['name'])){
        print_r($_COOKIE);

        echo "<s style='color: red;'>$_COOKIE[name]</s>";
    }
    
?>
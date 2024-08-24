<?php
echo '<style>input {background: #cbe5ff;border: none;border:1px solid #06488a; padding:8px;margin:3px;color:#06488a}input:hover{background:#06488a;color:white}</style>
<body style="background: #cbe5ff;color: #06488a;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: #cbe5ff;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #06488a;">
session_destroy session_unset
</div><pre>';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if ($_POST['username'] == 'abdalla' && $_POST['pass'] == 'pass'){

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['pass'] = $_POST['pass'];

            header('location: test/zero/3test.php');
        }
    }
    
?>


<form action="" method="POST">
    <input type="text" name="username" placeholder="enter name">
    <input type="password" name="pass" placeholder="enter password">
    <input type="submit" value="click">
</form>
<?php
echo '<style>input {background: #cbe5ff;border: none;border:1px solid #06488a; padding:6px;margin:3px;color:#06488a}input:hover{background:#06488a;color:white}</style>
<body style="background: #cbe5ff;color: #06488a;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: #cbe5ff;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #06488a;">
test cookies
</div><pre>';

    
    // $font_color = $_GET['font_color']; //
    // echo $color;

    if (isset($_COOKIE['color']) or isset($_COOKIE['font']))
    {
        echo '<style>body {background: '. $_COOKIE['color'] .' !important; color: '. @$_COOKIE['font'].' !important}</style>';
    }

    // setcookie('font', $font_color);
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        setcookie('color', $_POST['bc_color'], strtotime('+1 year'));
        setcookie('font', $_POST['font_color'], time() + 10);

        header('location: 101_cookies_function.php');
    }




?>

<form action="" method="POST">

    <div style="display: flex;margin: 0;width: 15%;justify-content: space-between;align-items: center">
        <input id="back_color" type="color" name="bc_color">
        <label for="back_color">background</label>
    </div>

    <div style="display: flex;margin: 0;width: 15%;justify-content: space-between;align-items: center">
        <input id="font_color" type="color" name="font_color">
        <label for="font_color">color font</label>
    </div>
    <input type="submit" value="chouse color">
</form>
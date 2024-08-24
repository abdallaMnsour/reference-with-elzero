<?php
echo '<style>input {background: #cbffed;border: none;border:1px solid #068a71; padding:8px;margin:3px;color:#068a71}input:hover{background:#068a71;color:white}</style>
<body style="background: #cbffed;color: #068a71;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%;text-align: center;color: white;padding: 4px;border-radius: 5px;word-spacing: 160px;
background: #068a71;">
filter_input INPUT_GET examble
</div><pre>';

    /**
     * filter_input
     * 
     * INPUT_GET
     * INPUT_POST
     * INPUT_COOKIE
     * INPUT_SERVER
     * INPUT_ENV
     * 
     */


    // echo $_GET['number'];

    // echo filter_input(INPUT_GET, 'number', FILTER_VALIDATE_INT);

    echo filter_input(INPUT_GET, 'number', FILTER_SANITIZE_NUMBER_FLOAT, ['flags' => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]);




?>
<form action="" method="get">
    <input type="text" name="number" placeholder="inter number">
    <input type="submit" value="click">
</form>
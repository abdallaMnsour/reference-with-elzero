<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
basename dirname realpath pathinfo
</div><pre>';

    /**
     * basename => بيرجع اسم الملف
     * dirname(file name, levels) => بيرجع مسار الملف
     * realpath => بيرجع المسار كامل
     * pathinfo => معلومات امسار
     */

echo '<br><br>---------------- basename ----------------<br><br>';

    echo basename('85_file_function.php'). "\n";
    echo basename(__FILE__);


echo '<br><br>---------------- dirname ----------------<br><br>';


    echo dirname(__FILE__). "\n";
    echo dirname(__FILE__, 2). "\n";
    echo dirname(__FILE__, 4). "\n";
    echo dirname(__FILE__, 14);

echo '<br><br>---------------- realpath ----------------<br><br>';


    echo realpath(__FILE__);


echo '<br><br>---------------- pathinfo ----------------<br><br>';


    print_r(pathinfo(__FILE__)). "\n";
    print_r(pathinfo(__FILE__)['extension']). "\n"; // => php
    echo "\n";
    print_r(pathinfo(__FILE__, PATHINFO_EXTENSION)). "\n"; // => php
?>
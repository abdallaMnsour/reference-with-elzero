<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
disk_free_and_total_size file_exists_and_size
</div><pre>';

    /**
     * disk_total_size => حجم الدسك
     * disk_free_size => المساحه الفارغه في الدسك
     * file_exists => هل الملف موجود
     * filesize => حجم الملف
     */
    #                      bit    kilo   mega   giga
    echo disk_total_space('c:') / 1024 / 1024 / 1024 . "\n";
    echo disk_free_space("c:") / 1024 / 1024 / 1024 . "\n" ;
    var_dump(file_exists('file_testing.php')) . "\n";
    echo filesize('file_testing.php')/1024;
?>
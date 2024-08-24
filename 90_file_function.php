<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
glob rename copy unlink
</div><pre>';

    /**
     * glob(الامتداد ,اسم الملف) => بيرجع اراي
     * rename
     * copy => copy or cut or rename
     * unlink => delete
     */

    print_r(glob('test/osama/*.*'));

    // make rename
    // rename('test/osama/1test.php', 'test/osama/2test.php');

    // make copy
    // copy('test/osama/2test.php', 'test/zero/2test.php');

    // make copy and rename
    // copy('test/osama/2test.php', 'test/zero/1test.php');

    // delete the file
    // unlink('test/osama/2test.php');
?>
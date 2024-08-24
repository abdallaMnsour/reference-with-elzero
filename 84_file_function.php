<?php
echo '<style>input {background: #faffcb;border: none;border:1px solid #5b5413; padding:8px;margin:3px;color:#5b5413}input:hover{background:#5b5413;color:white}</style>
<body style="background: #faffcb;color: #5b5413;font-family: Arial;font-size: 22px;padding: 40px">
<div style="width: 100%; text-align: center; color: white; padding: 4px; border-radius: 5px;word-spacing: 160px;
background: #5b5413;">
i don\'t know
</div><pre>';

    /**
     * chmod
     * fileperms
     * clearstatcache
     */

    // mkdir('test');
    chmod('test', 0644);
    clearstatcache();
    echo fileperms('test');

    
    
?>
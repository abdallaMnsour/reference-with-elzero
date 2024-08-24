<?php
    /**
     * include        [if this is not found => warning]
     * include_once   [if this is not found => warning]
     * 
     * require        [if this is not found => error]
     * require_once   [if this is not found => error]
     */
    
    require_once('file_testing.php');
    
    echo $a;
    $a = 20;
    require_once('file_testing.php');
    echo $a;
?>
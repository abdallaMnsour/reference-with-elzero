<?php
    session_start();

    isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 0;

    echo "you'r views is $_SESSION[views]";
?>
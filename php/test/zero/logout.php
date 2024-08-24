<?php
    session_start();

    session_unset();





    session_destroy();

    header('location: ../../104_session.php');
?>
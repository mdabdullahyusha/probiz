<?php
    session_start();

    session_destroy();
    header('location:/probiz/admin/login.php');
?>
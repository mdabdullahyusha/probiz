<?php
    session_start();

    if(!isset($_SESSION['login_korche'])) {
        header('location:/probiz/admin/login.php');
    }
?>
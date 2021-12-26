<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    
    $delete_menu = "DELETE FROM menus WHERE id = '$id'";
    $delete_menu_result = mysqli_query($dbconnect, $delete_menu);
    
    $_SESSION['delete_menu'] = 'Menu Deleted Success';
    header('location:view_navigation.php');
?>
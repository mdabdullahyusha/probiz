<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM logos WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_user = "DELETE FROM logos WHERE id = '$id'";
    $delete_user_result = mysqli_query($dbconnect, $delete_user);

    $delete_from = '../uploads/logos/'.$after_assoc['logo_name'];
    unlink($delete_from);
    
    $_SESSION['delete_user'] = 'Logo Deleted Success';
    header('location:view_navigation.php');
?>
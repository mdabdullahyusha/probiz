<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM banners WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_banner = "DELETE FROM banners WHERE id = '$id'";
    $delete_banner_result = mysqli_query($dbconnect, $delete_banner);

    $delete_from = '../uploads/banners/'.$after_assoc['bg_image'];
    unlink($delete_from);
    
    $_SESSION['delete_banner'] = 'Banner Deleted Success';
    header('location:view_banner.php');
?>
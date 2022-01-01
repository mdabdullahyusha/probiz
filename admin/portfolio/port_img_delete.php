<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM portfolio_image WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_port_img = "DELETE FROM portfolio_image WHERE id = '$id'";
    $delete_port_img_result = mysqli_query($dbconnect, $delete_port_img);

    $delete_from = '../uploads/portfolio_image/'.$after_assoc['port_img'];
    unlink($delete_from);
    
    $_SESSION['delete_port_img'] = 'About Deleted Success';
    header('location:view_portfolio.php');
?>
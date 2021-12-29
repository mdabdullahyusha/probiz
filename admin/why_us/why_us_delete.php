<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    $select_image = "SELECT * FROM why_choose_title WHERE id = '$id'";
    $select_image_result = mysqli_query($dbconnect, $select_image);
    $after_assoc = mysqli_fetch_assoc($select_image_result);
    
    $delete_why_choose = "DELETE FROM why_choose_title WHERE id = '$id'";
    $delete_why_choose_result = mysqli_query($dbconnect, $delete_why_choose);

    $delete_from = '../uploads/why_choose/'.$after_assoc['why_choose_image'];
    unlink($delete_from);
    
    $_SESSION['delete_why_us'] = 'Why Us Deleted Success';
    header('location:view_why_us.php');
?>
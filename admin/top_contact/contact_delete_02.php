<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];


    
    $delete_user = "DELETE FROM social_icon WHERE id = '$id'";
    $delete_user_result = mysqli_query($dbconnect, $delete_user);
    
    $_SESSION['delete_user'] = 'User Deleted Success';
    header('location:view_contact.php');
?>
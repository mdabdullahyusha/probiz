<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    // $select_contact = "SELECT * FROM top_contact WHERE id = '$id'";
    // $select_contact_result = mysqli_query($dbconnect, $select_contact);
    // $after_assoc = mysqli_fetch_assoc($select_contact_result);



    
    $delete_user = "DELETE FROM top_contact WHERE id = '$id'";
    $delete_user_result = mysqli_query($dbconnect, $delete_user);
    
    $_SESSION['delete_user'] = 'User Deleted Success';
    header('location:view_contact.php');
?>
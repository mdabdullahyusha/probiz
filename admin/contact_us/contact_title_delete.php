<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    
    $delete_contact_title = "DELETE FROM contact_title WHERE id = '$id'";
    $delete_contact_title_result = mysqli_query($dbconnect, $delete_contact_title);
    
    $_SESSION['delete_contact_title'] = 'Blog Title Deleted Success';
    header('location:view_contact.php');
?>
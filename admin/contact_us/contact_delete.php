<?php
    session_start();
    require '../db.php';
    $id = $_GET['id'];

    
    $delete_contacts = "DELETE FROM contact_us WHERE id = '$id'";
    $delete_contacts_result = mysqli_query($dbconnect, $delete_contacts);
    
    $_SESSION['delete_contact'] = 'Teams Deleted Success';
    header('location:view_contact.php');
?>
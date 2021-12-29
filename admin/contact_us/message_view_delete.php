<?php
    session_start();
    require '../db.php';

    $id = $_GET['id'];
    
    $delete_contact_us_mail = "DELETE FROM contact_us_mail WHERE id = '$id'";
    $delete_contact_us_mail_result = mysqli_query($dbconnect, $delete_contact_us_mail);

    $_SESSION['delete_contact_us_mail'] = 'Contact Us Mail Deleted Success';
    header('location:/probiz/admin/contact_us/view_contact_info.php');
?>
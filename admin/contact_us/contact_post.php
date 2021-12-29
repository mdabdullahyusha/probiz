<?php
    session_start();
    require '../db.php';

    $address_icon = $_POST['address_icon'];
    $address = $_POST['address'];
    $mail_icon = $_POST['mail_icon'];
    $mail = $_POST['mail'];
    $mobile_icon = $_POST['mobile_icon'];
    $mobile = $_POST['mobile'];
    $telephone_icon = $_POST['telephone_icon'];
    $telephone = $_POST['telephone'];

    $insert_contact_us = "INSERT INTO contact_us (address_icon, address, mail_icon, mail, mobile_icon, mobile, telephone_icon, telephone)
                      VALUES('$address_icon', '$address', '$mail_icon', '$mail', '$mobile_icon', '$mobile', '$telephone_icon', '$telephone')";
            $insert_contact_us_result = mysqli_query($dbconnect, $insert_contact_us);

            $_SESSION['success'] = 'Contact Added Success';
            header('location:add_contact.php');
   
?>
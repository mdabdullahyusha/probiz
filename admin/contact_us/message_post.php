<?php
    session_start();
    require '../db.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    date_default_timezone_set('Asia/Dhaka');
    $created_at = date('d-m-y h:i:s');

    $insert_contact_us_mail = "INSERT INTO contact_us_mail (name, email, subject, message, created_at)
                      VALUES('$name', '$email', '$subject', '$message', '$created_at')";
            $insert_contact_us_mail_result = mysqli_query($dbconnect, $insert_contact_us_mail);

            $_SESSION['success'] = 'Contact Us Mail Added Success';
            header('location:/probiz/index.php');
   
?>
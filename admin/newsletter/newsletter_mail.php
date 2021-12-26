<?php 
    session_start();
    require '../db.php';
    $newsletter_mail = $_POST['newsletter_mail'];

    $insert_newsletter_mail = "INSERT INTO newsletter_mail (newsletter_mail)
                                VALUES('$newsletter_mail')";
    $insert_newsletter_mail_result = mysqli_query($dbconnect, $insert_newsletter_mail);

    header('location:/probiz/index.php');
?>
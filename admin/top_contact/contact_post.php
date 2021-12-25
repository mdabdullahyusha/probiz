<?php
    session_start();
    require '../db.php';


        $phone_icon = $_POST['phone_icon'];
        $phone_number = $_POST['phone_number'];
        $email_icon = $_POST['email_icon'];
        $email = $_POST['email'];

        $insert_contact = "INSERT INTO top_contact (phone_icon, phone_number, email_icon, email)
                VALUES('$phone_icon', '$phone_number', '$email_icon', '$email')";
        $insert_contact_result = mysqli_query($dbconnect, $insert_contact);

        if ($insert_contact_result) {
            $_SESSION['success'] = 'Data Added Success';
            header('location:add_contact.php');
        }

?>
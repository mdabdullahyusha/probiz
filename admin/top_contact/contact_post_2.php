<?php
    session_start();
    require '../db.php';


        $social_icon = $_POST['social_icon'];
        $link = $_POST['link'];

        $insert_contact = "INSERT INTO social_icon (social_icon, link)
                VALUES('$social_icon', '$link')";
        $insert_contact_result = mysqli_query($dbconnect, $insert_contact);

        if ($insert_contact_result) {
            $_SESSION['success'] = 'Data Added Success';
            header('location:add_contact_2.php');
        }

?>
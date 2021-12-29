<?php
    session_start();
    require '../db.php';

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    

    $insert_contact_title = "INSERT INTO contact_title (category, title, description)
                      VALUES('$category', '$title', '$description')";
    $insert_contact_title_result = mysqli_query($dbconnect, $insert_contact_title);

    $_SESSION['success_t'] = 'Contact Title Added Success';
    header('location:add_contact.php');

?>
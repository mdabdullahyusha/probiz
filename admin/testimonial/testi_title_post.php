<?php
    session_start();
    require '../db.php';
    
    // die('Asho Khelbo');

    $category = $_POST['category'];
    $title = $_POST['title'];
    
    $insert_testi_title = "INSERT INTO testi_title (category, title)
                VALUES('$category', '$title')";
    $insert_testi_title_result = mysqli_query($dbconnect, $insert_testi_title);

    $_SESSION['success'] = 'Testimonial Title Added Success';
    header('location:add_testimonial.php');
?>
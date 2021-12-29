<?php
    session_start();
    require '../db.php';

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $uploaded_file = $_FILES['why_choose_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_why_choose = "INSERT INTO why_choose_title (category, title, description)
                      VALUES('$category', '$title', '$description')";
            $insert_why_choose_result = mysqli_query($dbconnect, $insert_why_choose);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/why_choose/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_why_choose_image = "UPDATE why_choose_title SET why_choose_image = '$file_name' WHERE id = $id";
            $update_why_choose_image_result = mysqli_query($dbconnect, $update_why_choose_image);
            
            $_SESSION['success'] = 'Why Choose Added Success';
            header('location:add_why_us.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_why_us.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_why_us.php');
    }

    $reasons = $_POST['reasons'];

    $insert_reason = "INSERT INTO reasons (reasons)VALUES('$reasons')";
    $insert_reason_result = mysqli_query($dbconnect, $insert_reason);

    $_SESSION['success'] = 'Reason Added Success';
    header('location:add_why_us.php');

?>
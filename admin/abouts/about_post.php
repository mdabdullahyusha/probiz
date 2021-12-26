<?php
    session_start();
    require '../db.php';

    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $uploaded_file = $_FILES['about_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_about = "INSERT INTO abouts (category, title, description)
                      VALUES('$category', '$title', '$description')";
            $insert_about_result = mysqli_query($dbconnect, $insert_about);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/abouts/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_about_image = "UPDATE abouts SET about_image = '$file_name' WHERE id = $id";
            $update_about_image_result = mysqli_query($dbconnect, $update_about_image);
            
            $_SESSION['success'] = 'About Added Success';
            header('location:add_about.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_about.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_about.php');
    }

    


?>
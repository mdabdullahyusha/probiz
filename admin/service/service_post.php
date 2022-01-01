<?php
    session_start();
    require '../db.php';
    
    $title = $_POST['title'];
    $description = $_POST['description'];

    $uploaded_file = $_FILES['service_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_service = "INSERT INTO services (title, description)
                      VALUES('$title', '$description')";
            $insert_service_result = mysqli_query($dbconnect, $insert_service);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/services/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_service_image = "UPDATE services SET service_image = '$file_name' WHERE id = $id";
            $update_service_image_result = mysqli_query($dbconnect, $update_service_image);
            
            $_SESSION['success_t'] = 'Service Added Success';
            header('location:add_service.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_service.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_service.php');
    }

    


?>
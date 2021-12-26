<?php
    session_start();
    require '../db.php';

    $title_01 = $_POST['title_01'];
    $title_02 = $_POST['title_02'];

    $uploaded_file = $_FILES['contact_now_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_contact = "INSERT INTO contact_now (title_01, title_02)
                      VALUES('$title_01', '$title_02')";
            $insert_contact_result = mysqli_query($dbconnect, $insert_contact);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/contact_now/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_contact_now_image = "UPDATE contact_now SET contact_now_image = '$file_name' WHERE id = $id";
            $update_contact_now_image_result = mysqli_query($dbconnect, $update_contact_now_image);
            
            $_SESSION['success'] = 'Contact Now Added Success';
            header('location:add_contact_now.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_contact_now.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_contact_now.php');
    }

    


?>
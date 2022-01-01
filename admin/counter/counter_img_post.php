<?php
    session_start();
    require '../db.php';


    $uploaded_file = $_FILES['counter_image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
           
            // $id = mysqli_insert_id($dbconnect);
            $time = time();
            $file_name = $time.'.'.$extension;
            $new_location = '../uploads/counter/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $insert_counter_image = "INSERT INTO counter_image (counter_image)
                                    VALUES('$file_name')";
            $insert_counter_image_result = mysqli_query($dbconnect, $insert_counter_image);
            
            $_SESSION['success_t'] = 'Service Added Success';
            header('location:add_counter.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_counter.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_counter.php');
    }

?>
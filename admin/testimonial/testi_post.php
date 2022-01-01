<?php
    session_start();
    require '../db.php';

    $name = $_POST['name'];
    $post = $_POST['post'];
    $description = $_POST['description'];
    $star_rating = $_POST['star_rating'];


    $uploaded_file = $_FILES['testi_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_testimonial = "INSERT INTO testimoni (name, post, description, star_rating)
                      VALUES('$name', '$post', '$description', '$star_rating')";
            $insert_testimonial_result = mysqli_query($dbconnect, $insert_testimonial);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/testimonial/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_testimonial_image = "UPDATE testimoni SET testi_image = '$file_name' WHERE id = $id";
            $update_testimonial_image_result = mysqli_query($dbconnect, $update_testimonial_image);
            
            $_SESSION['success_t'] = 'Testimonial Added Success';
            header('location:add_testimonial.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_testimonial.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_testimonial.php');
    }

    


?>
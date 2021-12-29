<?php
    session_start();
    require '../db.php';

    $title = $_POST['title'];
    $posted_from = $_POST['posted_from'];
    $description = $_POST['description'];
    $comment = $_POST['comment'];
    $blog_like = $_POST['blog_like'];
    
    date_default_timezone_set('Asia/Dhaka');
    $created_at = date('d-m-y h:i:s');
    

    $uploaded_file = $_FILES['blog_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
    if(in_array($extension, $allowed_extenstion)) {
        if($uploaded_file['size'] < 2000000000000) {
            $insert_blog = "INSERT INTO blogs (title, posted_from, description, comment, blog_like, created_at)
                      VALUES('$title', '$posted_from', '$description', '$comment', '$blog_like', '$created_at')";
            $insert_blog_result = mysqli_query($dbconnect, $insert_blog);

            $id = mysqli_insert_id($dbconnect);
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/blogs/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_blog_image = "UPDATE blogs SET blog_image = '$file_name' WHERE id = $id";
            $update_blog_image_result = mysqli_query($dbconnect, $update_blog_image);
            
            $_SESSION['success'] = 'Blog Added Success';
            header('location:add_blog.php');
        }
        else {
            $_SESSION['extension'] = 'File Size To Large';
                header('location:add_blog.php');
        }
    }
    else {
        $_SESSION['extension'] = 'Invalid Extension';
        header('location:add_blog.php');
    }

?>
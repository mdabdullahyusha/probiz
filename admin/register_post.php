<?php
    session_start();
    require 'db.php';


        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $profile_image = $_FILES['profile_image'];

        date_default_timezone_set('Asia/Dhaka');
        $created_at = date('d-m-y h:i:s');

        $upper = preg_match('@[A-Z]@', $password);
        $lower = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $special = preg_match('@[!,#,$,%,^,&,*,(,),-,_]@', $password);

        // Name Field Validation
        if(empty($name)) {
            $_SESSION['empty'] = 'Name Field Is Required';
            header('location:register.php');
        }
        else {
            if (strlen($name) < 3) { 
                $_SESSION['empty'] = "Minimum 3 Character Required";
                header('location:register.php');
            }
        }

        // Email Field Validation
        if(empty($email)) {
            $_SESSION['email_empty'] = 'Email Field Is Required';
            header('location:register.php');
        }
        else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['email_empty'] = 'Please Enter a Valid Email Address';
                header('location:register.php');
            }
        }

        // Password Field Validation
        if(empty($password)) {
            $_SESSION['password_empty'] = 'Please! Fill Out Password';
            header('location:register.php');
        }
        else {
            if(!$upper || !$lower || !$number || !$special || strlen($password) < 8) {
                $_SESSION['password_empty'] = 'Please Use This (A,a,@,3) In Your Password To Get It Strong. And Give Them 8 Characters';
                header('location:register.php');
            }
        }


        $after_explode = explode('.', $profile_image['name']);
        $extension = end($after_explode);
        $allowed_extenstion = array('jpg', 'JPG', 'jpeg', 'png', 'gif', 'svg', 'webp');
    
        if(in_array($extension, $allowed_extenstion)) {
            if($profile_image['size'] < 2000000000000) {
                $insert_banner = "INSERT INTO users (name, email, password, created_at)
                        VALUES('$name', '$email', '$password', '$created_at')";
                $insert_banner_result = mysqli_query($dbconnect, $insert_banner);

                $id = mysqli_insert_id($dbconnect);
                $file_name = $id.'.'.$extension;
                $new_location = 'uploads/users/'.$file_name;
                move_uploaded_file($profile_image['tmp_name'], $new_location);

                $update_profile_image = "UPDATE users SET profile_image = '$file_name' WHERE id = $id";
                $update_profile_image_result = mysqli_query($dbconnect, $update_profile_image);
                
                header('location:register.php');
            }
            else {
                $_SESSION['extension'] = 'File Size To Large';
                    header('location:register.php');
            }
        }
        else {
            $_SESSION['extension'] = 'Invalid Extension';
            header('location:register.php');
        }

?>
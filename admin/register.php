<?php
    session_start();
    require 'db.php';
    require 'includes/header.php';
    // require 'session_check.php';
    require 'includes/sidemenu.php';
?>
            

            <div class="page-register">
                <main class="page-content">
                    <div class="page-inner" style="min-height:300px !important">
                        <div id="main-wrapper">
                            <div class="row">
                                <div class="col-md-3 center">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Probiz Admin Registration</a>
                                        <p class="text-center m-t-md">Create a Probiz Admin Registration account</p>
                                        <form class="m-t-md" action="register_post.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                                <?php if(isset($_SESSION['empty'])) { ?>
                                                <div class="alert alert-danger"><?= $_SESSION['empty']?></div>
                                                <?php } unset($_SESSION['empty'])?>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Email">
                                                <?php if(isset($_SESSION['email_empty'])) { ?>
                                                <div class="alert alert-danger"><?= $_SESSION['email_empty']?></div>
                                                <?php } unset($_SESSION['email_empty'])?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                                <?php if(isset($_SESSION['password_empty'])) { ?>
                                                <div class="alert alert-danger"><?= $_SESSION['password_empty']?></div>
                                                <?php } unset($_SESSION['password_empty'])?>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="profile_image" class="form-control" placeholder="Profile Pic">
                                            </div>
                                            <!-- <div class="form-group">
                                                <input type="role" name="role" class="form-control" placeholder="Password" required>
                                            </div> -->
                                            
                                            <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- Row -->
                        </div><!-- Main Wrapper -->
                    </div><!-- Page Inner -->
                </main><!-- Page Content -->
            </div>

    

<?php
    require 'includes/footer.php';
?>
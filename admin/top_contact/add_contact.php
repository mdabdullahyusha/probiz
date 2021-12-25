<?php
    session_start();
    require '../db.php';
    require '../includes/header.php';
    // require 'session_check.php';
    require '../includes/sidemenu.php';
?>
            

            <div class="page-register">
                <main class="page-content">
                    <div class="page-inner">
                        <div id="main-wrapper">
                            <div class="row">
                                <div class="col-md-3 center">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Top Contact Bar</a>
                                        <p class="text-center m-t-md">Create a Top Contact Part</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        
                                        <form class="m-t-md" action="contact_post.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="phone_icon" class="form-control" placeholder="Mobile Icon Class Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone_number" class="form-control" placeholder="Mobile Number">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email_icon" class="form-control" placeholder="Email Icon Class Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Email">
                                            </div>
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
    require '../includes/footer.php';
?>
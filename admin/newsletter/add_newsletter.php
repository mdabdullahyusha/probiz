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
                                        <a class="logo-name text-lg text-center">Newsletter</a>
                                        <p class="text-center m-t-md">Add Newsletter Info</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="newsletter_post.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="category" class="form-control" placeholder="Category">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="description" class="form-control" placeholder="Description">
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
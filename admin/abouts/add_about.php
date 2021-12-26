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
                                        <a class="logo-name text-lg text-center">Banners</a>
                                        <p class="text-center m-t-md">Add a Banner</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="about_post.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="category" class="form-control" placeholder="Category">
                                            </div>
                                            <div class="form-group">
                                                <label for="desc">Description</label>
                                                <textarea class="form-control" name="description" id="desc"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="about_image">Image</label>
                                                <input id="about_image" type="file" name="about_image" class="form-control">
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
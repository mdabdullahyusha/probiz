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
                                        <form class="m-t-md" action="banner_post.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="description" class="form-control" placeholder="Description">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="btn_1" class="form-control" placeholder="Btn 01">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="btn_1_link" class="form-control" placeholder="Btn 01 Link">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="btn_2" class="form-control" placeholder="Btn 02">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="btn_2_link" class="form-control" placeholder="Btn 02 Link">
                                            </div>
                                            <div class="form-group">
                                                <label for="bg_image">Background Image</label>
                                                <input id="bg_image" type="file" name="bg_image" class="form-control">
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
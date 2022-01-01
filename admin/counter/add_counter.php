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
                            <div class="row" style="display: flex; justify-content:center;">
                                <div class="col-md-3">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Counter</a>
                                        <p class="text-center m-t-md">Add Counter</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="counter_post.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="icon_link" class="form-control" placeholder="Place Icon Link Here">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="number" class="form-control" placeholder="Counter Number">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="text" name="description" class="form-control" placeholder="Description">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Counter Image</a>
                                        <p class="text-center m-t-md">Add Counter Background Image</p>
                                        <?php if(isset( $_SESSION['success_t'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success_t']?></div>
                                        <?php } unset( $_SESSION['success_t'])?>
                                        <form class="m-t-md" action="counter_img_post.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="counter_image">Image</label>
                                                <input id="counter_image" type="file" name="counter_image" class="form-control">
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
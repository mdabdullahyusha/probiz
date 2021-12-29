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
                            <div class="row" style="display:flex; justify-content:center;">
                                <div class="col-md-3">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Standard Plan Pricing </a>
                                        <p class="text-center m-t-md">Add Standard Pricing</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="standard_pricing_post.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="price" class="form-control" placeholder="Price">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="btn" placeholder="Button Name">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Facility</a>
                                        <p class="text-center m-t-md">Add Facility</p>
                                        <?php if(isset( $_SESSION['success_t'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success_t']?></div>
                                        <?php } unset( $_SESSION['success_t'])?>
                                        <form class="m-t-md" action="standard_pricing_f_post.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="facility" class="form-control" placeholder="Facility">
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
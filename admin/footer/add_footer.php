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
                                        <a class="logo-name text-lg text-center">Impontant Links On Footer</a>
                                        <p class="text-center m-t-md">Add Imrotant Links</p>
                                        <?php if(isset( $_SESSION['success_t'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success_t']?></div>
                                        <?php } unset( $_SESSION['success_t'])?>
                                        <form class="m-t-md" action="important_link_post.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="link_info" class="form-control" placeholder="Link Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="link" class="form-control" placeholder="Link">
                                            </div>
                                           
                                            <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- Row -->

                            <div class="row" style="padding-top: 60px;">
                                <div class="col-md-3 center">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Footer</a>
                                        <p class="text-center m-t-md">Add Footer</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="footer_post.php" method="POST">
                                            
                                            <div class="form-group">
                                                <input type="text" name="footer" class="form-control" placeholder="Footer Info">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="sponsor_link" class="form-control" placeholder="Sponsor's Link">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="sponsor_name" class="form-control" placeholder="Sponsor's Name">
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
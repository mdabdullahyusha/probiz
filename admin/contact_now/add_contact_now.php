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
                                        <a class="logo-name text-lg text-center">Contact Now</a>
                                        <p class="text-center m-t-md">Add Contact Now Info</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="contact_now_post.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="title_01" class="form-control" placeholder="Title 01">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="title_02" class="form-control" placeholder="Title 02">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="contact_now_image">Image</label>
                                                <input id="contact_now_image" type="file" name="contact_now_image" class="form-control">
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
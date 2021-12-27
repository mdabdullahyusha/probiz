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
                                        <a class="logo-name text-lg text-center">Team Part Title</a>
                                        <p class="text-center m-t-md">Add a Team Title</p>
                                        <?php if(isset( $_SESSION['success_t'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success_t']?></div>
                                        <?php } unset( $_SESSION['success_t'])?>
                                        <form class="m-t-md" action="team_title_post.php" method="POST">
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

                            <div class="row" style="padding-top: 60px;">
                                <div class="col-md-3 center">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Team</a>
                                        <p class="text-center m-t-md">Add a Team Member</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="team_post.php" method="POST" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Team Member Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="job_post" class="form-control" placeholder="His/Her Job Post">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_01" class="form-control" placeholder="Social Icon 01">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_01_link" class="form-control" placeholder="Social Icon 01 Link">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_02" class="form-control" placeholder="Social Icon 02">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_02_link" class="form-control" placeholder="Social Icon 02 Link">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_03" class="form-control" placeholder="Social Icon 03">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_03_link" class="form-control" placeholder="Social Icon 03 Link">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_04" class="form-control" placeholder="Social Icon 04">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="icon_04_link" class="form-control" placeholder="Social Icon 04 Link">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="btn_2_link" class="form-control" placeholder="Btn 02 Link">
                                            </div>
                                            <div class="form-group">
                                                <label for="profile_image">Profile Image</label>
                                                <input id="profile_image" type="file" name="profile_image" class="form-control">
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
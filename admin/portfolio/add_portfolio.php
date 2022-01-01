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
                                        <a class="logo-name text-lg text-center">Portfolio Title</a>
                                        <p class="text-center m-t-md">Add Portfolio Title</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="port_title_post.php" method="POST">
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
                                            
                                            <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Portfolio Image</a>
                                        <p class="text-center m-t-md">Add Portfolio Image</p>
                                        <?php if(isset( $_SESSION['success_t'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success_t']?></div>
                                        <?php } unset( $_SESSION['success_t'])?>
                                        <form class="m-t-md" action="port_img_post.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="port_img">Add Portfolio Image</label>
                                                <input type="file" name="port_img" class="form-control">
                                            </div>
                                            <div class="form-group">
                                               <select name="class_name" id="" class="form-control">
                                                   <option>-- Select Class Name--</option>
                                                   <option value="marketing">Marketing</option>
                                                   <option value="planning">Planning</option>
                                                   <option value="research">Research</option>
                                               </select>
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
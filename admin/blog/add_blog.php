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
                                        <a class="logo-name text-lg text-center">Blog Title</a>
                                        <p class="text-center m-t-md">Add Blog Title</p>
                                        <?php if(isset( $_SESSION['success_t'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success_t']?></div>
                                        <?php } unset( $_SESSION['success_t'])?>
                                        <form class="m-t-md" action="blog_title_post.php" method="POST">
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
                                        <a class="logo-name text-lg text-center">Blog</a>
                                        <p class="text-center m-t-md">Add Blog</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="blog_post.php" method="POST" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                            <label for="">Posted from Who?</label>
                                                <select name="posted_from" id="" class="form-control">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Moderator</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="textarea">Put Your Description Here</label>
                                                <textarea type="text" name="description" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="comment" class="form-control" placeholder="Comment">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="blog_like" class="form-control" placeholder="Like">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="blog_image">blog Image</label>
                                                <input id="blog_image" type="file" name="blog_image" class="form-control">
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
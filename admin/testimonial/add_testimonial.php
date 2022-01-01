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
                                <div class="col-md-3 ">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Testimonial Title</a>
                                        <p class="text-center m-t-md">Add Testimonial Title</p>
                                        <?php if(isset( $_SESSION['success'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success']?></div>
                                        <?php } unset( $_SESSION['success'])?>
                                        <form class="m-t-md" action="testi_title_post.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="category" class="form-control" placeholder="Category">
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="login-box">
                                        <a class="logo-name text-lg text-center">Testimonial</a>
                                        <p class="text-center m-t-md">Add Testimonial</p>
                                        <?php if(isset( $_SESSION['success_t'])) {?>
                                        <div class="alert alert-success"><?=  $_SESSION['success_t']?></div>
                                        <?php } unset( $_SESSION['success_t'])?>
                                        <form class="m-t-md" action="testi_post.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="post" class="form-control" placeholder="Post">
                                            </div>
                                            <div class="form-group">
                                                <label for="desc">Description</label>
                                                <textarea class="form-control" name="description" id="desc"></textarea>
                                            </div>
                                            <div class="form-group">
                                               <select name="star_rating" id="" class="form-control">
                                                   <option>-- Star Rating --</option>
                                                   <?php for($i = 1; $i <= 5; $i++) {?>
                                                    <option value="<?= $i?>"><?= $i?></option>
                                                    <?php } ?>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="testi_image">Image</label>
                                                <input id="testi_image" type="file" name="testi_image" class="form-control">
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
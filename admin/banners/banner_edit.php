<?php
    session_start();
    require '../db.php';

    $id = $_GET['id'];
    $select_banner = "SELECT * FROM banners WHERE id= $id";
    $select_banner_result = mysqli_query($dbconnect, $select_banner);
    $after_assoc3 = mysqli_fetch_assoc($select_banner_result);
    
    require '../includes/header.php';
    require '../includes/sidemenu.php';
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Form Elements</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Form Elements</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Basic Form</h4>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($_SESSION['update_success'])) { ?>
                                <div class="alert alert-success">
                                    <?= $_SESSION['update_success'];?>
                                </div>
                        <?php  } unset($_SESSION['update_success']);?>
                        <form action="banner_update.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?= $after_assoc3['title']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Description</label>
                                <input type="text" name="description" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['description']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Btn 01</label>
                                <input type="text" name="btn_1" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['btn_1']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Btn 01 Link</label>
                                <input type="text" name="btn_1_link" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['btn_1_link']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Btn 02</label>
                                <input type="text" name="btn_2" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['btn_2']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Btn 02 Link</label>
                                <input type="text" name="btn_2_link" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['btn_2_link']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimg">Active Image</label><br>
                                <img src="/probiz/admin/uploads/banners/<?= $after_assoc3['bg_image']?>" width="150" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">New Image Upload</label>
                                <input type="file" name="bg_image" class="form-control" id="exampleInputPassword2">
                                <?php
                                    if(isset($_SESSION['extension'])) { ?>
                                        <div class="alert alert-success">
                                            <?= $_SESSION['extension'];?>
                                        </div>
                                <?php  } unset($_SESSION['extension']);?>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
</div>
<?php
    require '../includes/footer.php';
?>
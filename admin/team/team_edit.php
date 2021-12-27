<?php
    session_start();
    require '../db.php';

    $id = $_GET['id'];
    $select_team = "SELECT * FROM teams WHERE id= $id";
    $select_team_result = mysqli_query($dbconnect, $select_team);
    $after_assoc3 = mysqli_fetch_assoc($select_team_result);
    
    require '../includes/header.php';
    require '../includes/sidemenu.php';
?>
<div class="page-inner">
    <div class="page-title">
        <h3>Teams</h3>
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
                        <form action="team_update.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?= $after_assoc3['name']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Job Post</label>
                                <input type="text" name="job_post" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['job_post']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 01</label>
                                <input type="text" name="icon_01" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_01']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 01 Link</label>
                                <input type="text" name="icon_01_link" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_01_link']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 02</label>
                                <input type="text" name="icon_02" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_02']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 02 Link</label>
                                <input type="text" name="icon_02_link" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_02_link']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 03</label>
                                <input type="text" name="icon_03" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_03']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 03 Link</label>
                                <input type="text" name="icon_03_link" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_03_link']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 04</label>
                                <input type="text" name="icon_04" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_04']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Icon 04 Link</label>
                                <input type="text" name="icon_04_link" class="form-control" id="exampleInputEmail2" value="<?= $after_assoc3['icon_04_link']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimg">Active Image</label><br>
                                <img src="/probiz/admin/uploads/teams/<?= $after_assoc3['profile_image']?>" width="150" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">New Image Upload</label>
                                <input type="file" name="profile_image" class="form-control" id="exampleInputPassword2">
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
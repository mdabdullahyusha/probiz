<?php
session_start();
    require '../db.php';
    require '../includes/header.php';
    require '../includes/sidemenu.php';

    $id = $_GET['id'];
    $select_user = "SELECT * FROM users WHERE id= $id";
    $select_user_result = mysqli_query($dbconnect, $select_user);
    $after_assoc2 = mysqli_fetch_assoc($select_user_result);
    
?>
<div class="page-inner">
    <div class="profile-cover">
        <div class="row">
            <div class="col-md-3 profile-image">
                <div class="profile-image-container">
                    <img src="/probiz/admin/uploads/users/<?= $after_assoc2['profile_image']?>" alt="">
                </div>
            </div>
            <div class="col-md-12 profile-info">
                <div class=" profile-info-value">
                    <h3>1020</h3>
                    <p>Followers</p>
                </div>
                <div class=" profile-info-value">
                    <h3>1780</h3>
                    <p>Friends</p>
                </div>
                <div class=" profile-info-value">
                    <h3>260</h3>
                    <p>Photos</p>
                </div>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-3 user-profile">
                <h3 class="text-center"><?= $after_assoc2['name']?></h3>
                <p class="text-center">UI/UX Designer</p>
                <hr>
                <ul class="list-unstyled text-center">
                    <li><p><i class="fa fa-map-marker m-r-xs"></i>Melbourne, Australia</p></li>
                    <li><p><i class="fa fa-envelope m-r-xs"></i><a href="#"><?= $after_assoc2['email']?></a></p></li>
                    <li><p><i class="fa fa-link m-r-xs"></i><a href="#">www.themeforest.net</a></p></li>
                </ul>
                <hr>
                <button class="btn btn-primary btn-block"><i class="fa fa-plus m-r-xs"></i>Follow</button>
            </div>
            <div class="col-md-6 m-t-lg">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="post">
                            <textarea class="form-control" placeholder="Post" rows="4=6"></textarea>
                            <div class="post-options">
                                <a href="#"><i class="icon-camera"></i></a>
                                <a href="#"><i class="icon-camcorder"></i></a>
                                <a href="#"><i class="icon-music-tone-alt"></i></a>
                                <a href="#"><i class="icon-link"></i></a>
                                <a href="#"><i class="icon-microphone"></i></a>
                                <button class="btn btn-default pull-right">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 m-t-lg">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <div class="panel-title">Some Info</div>
                    </div>
                    <div class="panel-body">
                        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                    </div>
                </div>
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <div class="panel-title">Skills</div>
                    </div>
                    <div class="panel-body">
                        <p>HTML5</p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            </div>
                        </div>
                        <p>PHP</p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                        </div>
                        <p>Javascript</p>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require '../includes/footer.php';
?>
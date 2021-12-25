<?php
    session_start();
    // require 'includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
        
        <!-- Title -->
        <title>Probizz | Admin Dashboard</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="/probiz/admin/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="/probiz/admin/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="/probiz/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/probiz/admin/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="/probiz/admin/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="/probiz/admin/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="/probiz/admin/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="/probiz/admin/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="/probiz/admin/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/probiz/admin/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
        <link href="/probiz/admin/assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>	
        <link href="/probiz/admin/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        	
        <!-- Theme Styles -->
        <link href="/probiz/admin/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="/probiz/admin/assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="/probiz/admin/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="/probiz/admin/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="/probiz/admin/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Probiz Admin Login</a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <form class="m-t-md" action="login_post.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                        <?php if(isset($_SESSION['email_invalid'])) {?>
                                        <div class="alert alert-danger"><?= $_SESSION['email_invalid']?></div>
                                        <?php } unset($_SESSION['email_invalid'])?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        <?php if(isset($_SESSION['pass_invalid'])) {?>
                                        <div class="alert alert-danger"><?= $_SESSION['pass_invalid']?></div>
                                        <?php } unset($_SESSION['pass_invalid'])?>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

<?php
    require 'includes/footer.php';
?>
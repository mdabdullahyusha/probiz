<?php
    // session_start();
    // require '/probiz/admin/session_check.php';
    
    if(!isset($_SESSION['login_korche'])) {
        header('location:/probiz/admin/login.php');
    }
    
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
    <body class="page-header-fixed">
        
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="assets/images/profile-menu-image.png" width="60" alt="David Green"/><span>David Green</span></div>
                <div class="profile-menu-list">
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
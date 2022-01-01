<?php
    $id = $_SESSION['id'];

    $select_user = "SELECT * FROM users WHERE id= $id";
    $select_user_result = mysqli_query($dbconnect, $select_user);
    $after_assoc = mysqli_fetch_assoc($select_user_result);

    $select_message = "SELECT COUNT(*) as unreaded_email FROM newsletter_mail WHERE status = 0";
    $select_message_result = mysqli_query($dbconnect, $select_message);
    $after_assoc2 = mysqli_fetch_assoc($select_message_result);
    
    $select_contact_us_mail = "SELECT COUNT(*) as unreaded_message FROM contact_us_mail";
    $select_contact_us_mail_result = mysqli_query($dbconnect, $select_contact_us_mail);
    $after_assoc3 = mysqli_fetch_assoc($select_contact_us_mail_result);

    $select_contact_us = "SELECT * FROM contact_us_mail ORDER BY id DESC";
    $select_contact_us_result = mysqli_query($dbconnect, $select_contact_us);
?>
<main class="page-content content-wrap">
    <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="/probiz/admin/admin.php" class="logo-text"><span>Modern</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Choose Theme Color
                                                    <div class="color-switcher">
                                                        <a class="colorbox color-blue" href="indexca00.html?theme=blue" title="Blue Theme" data-css="blue"></a>
                                                        <a class="colorbox color-green" href="indexaf91.html?theme=green" title="Green Theme" data-css="green"></a>
                                                        <a class="colorbox color-red" href="index0e99.html?theme=red" title="Red Theme" data-css="red"></a>
                                                        <a class="colorbox color-white" href="index13d4.html?theme=white" title="White Theme" data-css="white"></a>
                                                        <a class="colorbox color-purple" href="index938c.html?theme=purple" title="purple Theme" data-css="purple"></a>
                                                        <a class="colorbox color-dark" href="index4965.html?theme=dark" title="Dark Theme" data-css="dark"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right"><?= $after_assoc3['unreaded_message']?></span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have <?= $after_assoc3['unreaded_message']?> new  messages !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <?php foreach($select_contact_us_result as $contact_us_mail) {?>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="/probiz/admin/assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name"><?= $contact_us_mail['name']?></p>
                                                        <p class="msg-text"><?= $contact_us_mail['message']?></p>
                                                        <p class="msg-time"><?= $contact_us_mail['created_at']?></p>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?= $after_assoc['name']?><i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="/probiz/admin/uploads/users/<?= $after_assoc['profile_image']?>" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="/probiz/admin/logout.php"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/probiz/admin/logout.php" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                                
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="/probiz/admin/uploads/users/<?= $after_assoc['profile_image'] ?>" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><?= $after_assoc['name']?><br><small>Art Director</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li><a href="/probiz/admin/admin.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Users</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="/probiz/admin/users/user_view.php">Users Info</a></li>
                                <li><a href="/probiz/admin/register.php">Add Users</a></li>
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>FrontEnd</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"><p>Top Contact</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <!-- <li class="droplink"><a href="#"><p>Contact Info</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Level 3.1</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="/probiz/admin/top_contact/view_contact.php">Contact Info</a></li>
                                        <li class="droplink"><a href="#"><p>Add Contact</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="/probiz/admin/top_contact/add_contact.php">Left Contact Bar</a></li>
                                                <li><a href="/probiz/admin/top_contact/add_contact_2.php">Social Icon Bar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Navigation</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/navigation/view_navigation.php">Navigation Info</a></li>
                                        <li class="droplink"><a href="#"><p>Add Navigation</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="/probiz/admin/navigation/add_logo.php">Logo</a></li>
                                                <li><a href="/probiz/admin/navigation/add_menu.php">Menu</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Banners</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/banners/view_banner.php">Banners Info</a></li>
                                        <li><a href="/probiz/admin/banners/add_banner.php"><p>Add Banners</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>About Us</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/abouts/view_about.php">About Info</a></li>
                                        <li><a href="/probiz/admin/abouts/add_about.php"><p>Add About</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Feature & Service</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/service/view_service.php">Service Info</a></li>
                                        <li><a href="/probiz/admin/service/add_service.php"><p>Add Service</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Portfolio</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/portfolio/view_portfolio.php">Portfolio Info</a></li>
                                        <li><a href="/probiz/admin/portfolio/add_portfolio.php"><p>Add Portfolio</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Contact Now</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/why_us/view_contact_now.php">Contact Now Info</a></li>
                                        <li><a href="/probiz/admin/why_us/add_contact_now.php"><p>Add Contact</p></a></li>
                                    </ul>
                                </li>

                                <li class="droplink"><a href="#"><p>Why Choose</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/why_us/view_why_us.php">Why Choose Info</a></li>
                                        <li><a href="/probiz/admin/why_us/add_why_us.php"><p>Add Why Choose</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Newsletter</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/newsletter/view_newsletter.php">Newsletter Info</a></li>
                                        <li><a href="/probiz/admin/newsletter/add_newsletter.php"><p>Add Newsletter</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Pricing</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/pricing/view_pricing.php">Pricing Info</a></li>
                                        <li class="droplink"><a href="#"><p>Add Pricing</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="/probiz/admin/pricing/add_pricing_title.php">Pricing Title</a></li>
                                                <li><a href="/probiz/admin/pricing/basic_pricing.php">Basic</a></li>
                                                <li><a href="/probiz/admin/pricing/standard_pricing.php">Standard</a></li>
                                                <li><a href="/probiz/admin/pricing/premium_pricing.php">Premium</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                
                                <li class="droplink"><a href="#"><p>Counter</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/counter/view_counter.php">Counter Info</a></li>
                                        <li><a href="/probiz/admin/counter/add_counter.php"><p>Add Counter</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Our Team</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/team/view_team.php">Team Info</a></li>
                                        <li><a href="/probiz/admin/team/add_team.php"><p>Add Team</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Testimonial</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/testimonial/view_testimonial.php">Testimonial Info</a></li>
                                        <li><a href="/probiz/admin/testimonial/add_testimonial.php"><p>Add Testimonial</p></a></li>
                                    </ul>
                                </li>

                                <li class="droplink"><a href="#"><p>Our Blog</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/blog/view_blog.php">Blog Info</a></li>
                                        <li><a href="/probiz/admin/blog/add_blog.php"><p>Add Blog</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Contact With Us</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/contact_us/view_contact.php">Contact Info</a></li>
                                        <li><a href="/probiz/admin/contact_us/add_contact.php"><p>Add Contact</p></a></li>
                                    </ul>
                                </li>
                                
                                <li class="droplink"><a href="#"><p>Footer</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="/probiz/admin/footer/view_footer.php">Footer Info</a></li>
                                        <li><a href="/probiz/admin/footer/add_footer.php"><p>Add Footer</p></a></li>
                                    </ul>
                                </li>

                                
                            </li>
                        </ul>

                        <li><a href="/probiz/admin/newsletter/view_mail.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"><span class="badge badge-info"><?= $after_assoc2['unreaded_email']?></span></span><p>Sended Email</p></a></li>
                        
                        <li><a href="/probiz/admin/contact_us/view_contact_info.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-phone-alt"><span class="badge badge-info"><?= $after_assoc3['unreaded_message']?></span></span><p>Contact Info</p></a></li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div>
            
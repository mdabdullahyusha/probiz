<?php
    session_start();
    require 'admin/db.php';

    // For Top Contact
    $select_top_contact = "SELECT * FROM top_contact";
    $select_top_contact_result = mysqli_query($dbconnect, $select_top_contact);
    $after_assoc = mysqli_fetch_assoc($select_top_contact_result);
    
    // For Social Icon
    $select_social_icon = "SELECT * FROM social_icon WHERE status = 1";
    $select_social_icon_result = mysqli_query($dbconnect, $select_social_icon);
    
    // For Logo
    $select_logo = "SELECT * FROM logos WHERE status = 1";
    $select_logo_result = mysqli_query($dbconnect, $select_logo);
    $after_assoc2 = mysqli_fetch_assoc($select_logo_result);
    
    // For Menu
    $select_menu = "SELECT * FROM menus WHERE status = 1";
    $select_menu_result = mysqli_query($dbconnect, $select_menu);
    
    // For Banners
    $select_banner = "SELECT * FROM banners WHERE status = 1";
    $select_banner_result = mysqli_query($dbconnect, $select_banner);
    $after_assoc3 = mysqli_fetch_assoc($select_banner_result);
    
    // For Abouts
    $select_about = "SELECT * FROM abouts WHERE status = 1";
    $select_about_result = mysqli_query($dbconnect, $select_about);
    $after_assoc4 = mysqli_fetch_assoc($select_about_result);
    
    // For Contact Now
    $select_contact_now = "SELECT * FROM contact_now WHERE status = 1";
    $select_contact_now_result = mysqli_query($dbconnect, $select_contact_now);
    $after_assoc5 = mysqli_fetch_assoc($select_contact_now_result);
    
    // For Newsletter
    $select_newsletter = "SELECT * FROM newsletter WHERE status = 1";
    $select_newsletter_result = mysqli_query($dbconnect, $select_newsletter);
    $after_assoc6 = mysqli_fetch_assoc($select_newsletter_result);
    
    // For Team Title
    $select_teams_title = "SELECT * FROM teams_title WHERE status = 1";
    $select_teams_title_result = mysqli_query($dbconnect, $select_teams_title);
    $after_assoc7 = mysqli_fetch_assoc($select_teams_title_result);
    
    // For Team Title
    $select_team = "SELECT * FROM teams WHERE status = 1";
    $select_team_result = mysqli_query($dbconnect, $select_team);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ProBizz - Multipurpose Business Landing Page</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="front_end/css/bootstrap.css">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="front_end/css/owl.carousel.min.css">
    <!--Slick CSS-->
    <link rel="stylesheet" type="text/css" href="front_end/css/slick.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" type="text/css" href="front_end/css/fontawesome-all.min.css">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="front_end/css/style.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="front_end/css/responsive.css">
</head>

<body>

    <div id="preloader">
        <div class="spinner">
           <div class="rect1"></div>
           <div class="rect2"></div>
           <div class="rect3"></div>
           <div class="rect4"></div>
           <div class="rect5"></div>
        </div>
    </div>

    <!--Start Body Wrap-->
    <div id="body-wrapper">
        <!--Start Header-->
        <header id="header">
            <!--Start Header Top-->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-9 col-md-7">
                            <div class="header-contact-info">
                                <ul>
                                    <li><i class="<?= $after_assoc['phone_icon']?>"></i><?= $after_assoc['phone_number']?></li>
                                    <li><i class="<?= $after_assoc['email_icon']?>"></i> <?= $after_assoc['email']?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5">
                            <div class="header-social text-right">
                                <ul>
                                    <li><a href="#"><span>Follow Us : </span></a></li>
                                    <?php foreach($select_social_icon_result as $social) { ?>
                                    <li><a href="<?= $social['link'] ?>"><i class="<?= $social['social_icon'] ?>"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Top-->

            <!--Start Main Menu-->
            <div class="main_navbar">   
            <!-- MAIN NAVBAR -->
                <nav class="navbar navbar-expand-lg  navbar-dark">
                    <div class="container">
                        <a class="navbar-brand logo-sticky font-600" href="index.php"><img src="/probiz/admin/uploads/logos/<?= $after_assoc2['logo_name']?>" width="250"></a>
                        <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <?php foreach($select_menu_result as $menu) {?>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="<?= $menu['link']?>"><?= $menu['menu_name']?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--End Main Menu-->

        </header>
        <!--End Header-->

        <!--Start Banner Section-->
        <section id="main-banner" style="background: url(/probiz/admin/uploads/banners/<?= $after_assoc3['bg_image']?>); background-size: cover; background-position: center;" class="bg-cover position-relative full-height text-center">
            <div class="overlay"></div>
            <div class="caption-content dp-table">
                <div class="tbl-cell position-relative">
                    <h1 class="color-white"><?= $after_assoc3['title']?></h1>
                    <p class="color-white mt-3"><?= $after_assoc3['description']?>
                    </p>
                    <div class="large-btn animated slideInUp">
                        <a class="btn btn-light mt-5 mr-4" href="<?= $after_assoc3['btn_1_link']?>"><?= $after_assoc3['btn_1']?></a><a class="btn btn-primary mt-5" href="<?= $after_assoc3['btn_2_link']?>"><?= $after_assoc3['btn_2']?></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section-->

         <!--Start Features Section-->
        <section id="features">
            <!--Start Container-->
            <div class="container">
                <!--Start Features Row-->
                <div class="row">
                    <!--Start Feature Single-->
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="feature-single text-center">
                            <img src="front_end/img/1.png" alt="icon">
                            <h4><span class="p-color1">Great</span>  Strategy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Feature Single-->

                    <!--Start Feature Single-->
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="feature-single text-center">
                            <img src="front_end/img/2.png" alt="icon">
                            <h4><span class="p-color1">Effective</span> Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Feature Single-->

                    <!--Start Feature Single-->
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="feature-single text-center">
                            <img src="front_end/img/3.png" alt="icon">
                            <h4><span class="p-color1">Best</span> Promotion</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Feature Single-->
                </div>
                <!--End Features Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Features Section-->

        <!--Start About Section-->
        <section id="about"  class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start About Image-->
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="/probiz/admin/uploads/abouts/<?= $after_assoc4['about_image']?>" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <!--End About Image-->

                    <!--Start About Content-->
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h4 class="color-gray"><?= $after_assoc4['category']?></h4>
                            <h2><?= $after_assoc4['title']?></h2>
                            <p><?= $after_assoc4['description']?></p>
                        </div>
                    </div>
                    <!--End About Content-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End About Section-->

        <!--Start Services Section-->
        <section id="services">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray">What We Do</h4>
                            <h2>Our <span class="p-color">Services</span></h2>
                            <p>We work with you to build comprehensive, thoughtful, and purpose-driven identities and experiences. Let’s talk about job.</p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Services Row-->
                <div class="row">
                    <!--Start Service Single-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single text-center">
                            <img src="front_end/img/1.png" alt="icon">
                            <h4 class="p-color1">BRANDING</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Service Single-->

                    <!--Start Service Single-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single text-center">
                             <img src="front_end/img/2.png" alt="icon">
                            <h4 class="p-color1">FINANCE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Service Single-->

                    <!--Start Service Single-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single text-center">
                             <img src="front_end/img/3.png" alt="icon">
                            <h4 class="p-color1">ADVERTISING</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Service Single-->

                    <!--Start Service Single-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single text-center">
                             <img src="front_end/img/1.png" alt="icon">
                            <h4 class="p-color1">FINANCE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Service Single-->

                    <!--Start Service Single-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single text-center">
                             <img src="front_end/img/2.png" alt="icon">
                            <h4 class="p-color1">ADVERTISING</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Service Single-->

                    <!--Start Service Single-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single text-center">
                             <img src="front_end/img/3.png" alt="icon">
                            <h4 class="p-color1">SUPPORT</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.</p>
                        </div>
                    </div>
                    <!--End Service Single-->
                </div>
                <!--End Services Row-->


            </div>
            <!--End Container-->
        </section>
        <!--End Services Section-->

            <!-- Portfolio Section -->
        <section id="portfolios" class="bg-gray default-padding">
          <!-- Container Starts -->
          <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray">Work Sample</h4>
                            <h2>Our <span class="p-color">Portfolio</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.</p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->
                <div class="row">          
                  <div class="col-lg-12">
                    <!-- Portfolio Controller/Buttons -->
                    <div class="controls text-center">
                      <a class="control mixitup-control-active btn btn-primary" data-filter="all">
                        All 
                      </a>
                      <a class="control btn btn-outline-primary" data-filter=".marketing">
                        Design 
                      </a>
                      <a class="control btn btn-outline-primary" data-filter=".planning">
                        Development
                      </a>
                      <a class="control btn btn-outline-primary" data-filter=".research">
                        Print 
                      </a>
                    </div>
                    <!-- Portfolio Controller/Buttons Ends-->          

                    <!-- Portfolio Recent Projects -->
                    <div id="portfolio" class="row wow fadeInUp" data-wow-delay="0.8s">
                      <div class="col-md-6 col-lg-4 col-lg-4 col-xl-4 mix marketing planning">
                        <div class="portfolio-item">
                          <div class="shot-item">
                            <a class="overlay lightbox" href="img/port-01.jpg">
                              <img src="front_end/img/port-01.jpg" alt="" />  
                              <i class="fa fa-eye item-icon"></i>
                            </a>
                          </div>               
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-lg-4 col-xl-4 mix planning">
                        <div class="portfolio-item">
                          <div class="shot-item">
                            <a class="overlay lightbox" href="img/port-02.jpg">
                              <img src="front_end/img/port-02.jpg" alt="" />  
                              <i class="fa fa-eye item-icon"></i>
                            </a>
                          </div>               
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-lg-4 col-xl-4 mix research">
                        <div class="portfolio-item">
                          <div class="shot-item">
                            <a class="overlay lightbox" href="img/port-03.jpg">
                              <img src="front_end/img/port-03.jpg" alt="" />  
                              <i class="fa fa-eye item-icon"></i>
                            </a>
                          </div>               
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-lg-4 col-xl-4 mix marketing research">
                        <div class="portfolio-item">
                          <div class="shot-item">
                            <a class="overlay lightbox" href="img/port-04.jpg">
                              <img src="front_end/img/port-04.jpg" alt="" />  
                              <i class="fa fa-eye item-icon"></i>
                            </a>
                          </div>               
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-lg-4 col-xl-4 mix marketing planning">
                        <div class="portfolio-item">
                          <div class="shot-item">
                            <a class="overlay lightbox" href="img/port-05.jpg">
                              <img src="front_end/img/port-05.jpg" alt="" />  
                              <i class="fa fa-eye item-icon"></i>
                            </a>
                          </div>               
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-lg-4 col-xl-4 mix planning research">
                        <div class="portfolio-item">
                          <div class="shot-item">
                            <a class="overlay lightbox" href="img/port-06.jpg">
                              <img src="front_end/img/port-06.jpg" alt="" />  
                              <i class="fa fa-eye item-icon"></i>
                            </a>
                          </div>               
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <!-- Container Ends -->
        </section>
        <!-- Portfolio Section Ends --> 

        <!--Start Call To Action-->
        <section id="contact-now" style="background: url(/probiz/admin/uploads/contact_now/<?= $after_assoc5['contact_now_image']?>); background-attachment:fixed; background-size:cover;"  class="bg-cover position-relative">
            <div class="overlay"></div>
            <!--Start Container-->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="contact-now-content">
                            <h2 class="color-white"><?= $after_assoc5['title_01']?> <br><span class="p-color"> <?= $after_assoc5['title_02']?> </span></h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="contact-now-button">
                            <a href="#contact">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Container-->
        </section>
        <!--End Call To Action-->

        <!--Start Why Choose Us-->
        <section id="why-us" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Why Choose Content-->
                    <div class="col-lg-6">
                        <div class="why-us-content">
                            <h4 class="color-gray">Why Choose Our Company ?</h4>
                            <h2 class="p-color1">We Are Best <span class="p-color"> Service Provider Company Of The Industry</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum labore minus dolore ab itaque animi sit, quae non quas architecto quaerat fugit in temporibus sequi laboriosam, repellat tempore consequuntur voluptatem.</p>
                            <div class="why-us-features row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fas fa-check"></i> High Quality Service</li>
                                        <li><i class="fas fa-check"></i> No Extra Or Hidden Charge</li>
                                        <li><i class="fas fa-check"></i> 100% Satisfiction Gurantee</li>
                                        <li><i class="fas fa-check"></i> All Kinds Of Business Support</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fas fa-check"></i> Dedicated Customer Support</li>
                                        <li><i class="fas fa-check"></i> Great and Effective Tips</li>
                                        <li><i class="fas fa-check"></i> Special Promotion Technique</li>
                                        <li><i class="fas fa-check"></i> 24/7 Dedicated Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Why Choose Content-->

                    <!--Start Why Choose Image-->
                    <div class="col-lg-6">
                        <div class="why-us-img">
                            <img src="front_end/img/why-us-bg.jpg" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <!--End Why Choose Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Why Choose Us-->

        <!--Start Newsletter Section-->
        <section id="newsletter" class="default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $after_assoc6['category']?></h4>
                            <h2 class="p-color1"><?= $after_assoc6['title']?></span></h2>
                            <p><?= $after_assoc6['description']?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Newsletter Form-->
                <form action="admin/newsletter/newsletter_mail.php" method="POST">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-lg-4 col-md-6">
                            <div class="newsletter-form">
                                <input type="text" name="newsletter_mail" class="form-control" placeholder="Write Your Email">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="newsletter-btn">
                                <button type="submit">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--End Newsletter Form-->
            </div>
            <!--End Container-->
        </section>
        <!--End Newsletter Section-->

        <!--Start Pricing Section-->
        <section id="pricing" class="bg-gray default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray">Choose Best One</h4>
                            <h2 class="p-color1">Our<span class="p-color"> Pricing Plan </span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.</p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Pricing Table Row-->
                <div class="row">
                    <!--Start Pricing Table Single-->
                    <div class="col-md-4">
                        <div class="pricing-table-single fix text-center">
                            <div class="table-title">
                                <h2 class="p-color">Standard</h2>
                            </div>
                            <div class="price-amount">
                                <h2 class="color-white">$ 12.99</h2>
                            </div>
                            <div class="table-details">
                                <ul>
                                    <li>PDF Reports</li>
                                    <li>Basic Quota</li>
                                    <li>Five Brand Monitors</li>
                                    <li>24/7 Free Support</li>
                                    <li>Private Forums</li>
                                </ul>
                            </div>
                            <div class="table-btn">
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table Single-->

                    <!--Start Pricing Table Single-->
                    <div class="col-md-4">
                        <div class="pricing-table-single fix text-center">
                            <div class="table-title">
                                <h2 class="p-color">Standard</h2>
                            </div>
                            <div class="price-amount">
                                <h2 class="color-white">$ 12.99</h2>
                            </div>
                            <div class="table-details">
                                <ul>
                                    <li>PDF Reports</li>
                                    <li>Basic Quota</li>
                                    <li>Five Brand Monitors</li>
                                    <li>24/7 Free Support</li>
                                    <li>Private Forums</li>
                                </ul>
                            </div>
                            <div class="table-btn">
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table Single-->

                    <!--Start Pricing Table Single-->
                    <div class="col-md-4">
                        <div class="pricing-table-single fix text-center">
                            <div class="table-title">
                                <h2 class="p-color">Premium</h2>
                            </div>
                            <div class="price-amount">
                                <h2 class="color-white">$ 19.99</h2>
                            </div>
                            <div class="table-details">
                                <ul>
                                    <li>PDF Reports</li>
                                    <li>Basic Quota</li>
                                    <li>Five Brand Monitors</li>
                                    <li>24/7 Free Support</li>
                                    <li>Private Forums</li>
                                </ul>
                            </div>
                            <div class="table-btn">
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table Single-->
                </div>
                <!--End Pricing Table Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Pricing Section-->

        <!--Start Counter Section-->
        <section id="counter" class="bg-cover position-relative">
            <div class="overlay"></div>
            <!--Start Container-->
            <div class="container">
                <!--Start Counter Row-->
                <div class="row">
                    <!--Start Counter Single-->
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-single text-center">
                            <i class="fas fa-users"></i>
                            <h2 class="color-white">1,280</h2>
                            <h6 class="">Total Client</h6>
                        </div>
                    </div>
                    <!--End Counter Single-->

                    <!--Start Counter Single-->
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-single text-center">
                            <i class="far fa-star"></i>
                            <h2 class="color-white">1,020</h2>
                            <h6 class="">5 Star Rating</h6>
                        </div>
                    </div>
                    <!--End Counter Single-->

                    <!--Start Counter Single-->
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-single text-center">
                            <i class="fas fa-chess-pawn"></i>
                            <h2 class="color-white">560</h2>
                            <h6 class="">Won Award</h6>
                        </div>
                    </div>
                    <!--End Counter Single-->

                    <!--Start Counter Single-->
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-single text-center">
                            <i class="fas fa-flag-checkered"></i>
                            <h2 class="color-white">1,550</h2>
                            <h6 class="">Complete Project</h6>
                        </div>
                    </div>
                    <!--End Counter Single-->
                </div>
                <!--End Counter Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Counter Section-->

        <!--Start Team Section-->
        <section id="team" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $after_assoc7['category']?></h4>
                            <h2 class="p-color1"><?= $after_assoc7['title']?></h2>
                            <p><?= $after_assoc7['description']?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Team Members Row-->
                <div class="row">
                    <!--Start Team Member Single-->
                    <?php foreach($select_team_result as $team) {?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member-single fix position-relative text-center">
                            <img src="/probiz/admin/uploads/teams/<?= $team['profile_image']?>" class="img-fluid" alt="Image">
                            <div class="member-social-icons">
                                <ul>
                                    <li><a href="<?= $team['icon_01_link']?>"><i class="<?= $team['icon_01']?>"></i></a></li>
                                     <li><a href="<?= $team['icon_02_link']?>"><i class="<?= $team['icon_02']?>"></i></a></li>
                                    <li><a href="<?= $team['icon_03_link']?>"><i class="<?= $team['icon_03']?>"></i></a></li>
                                    <li><a href="<?= $team['icon_04_link']?>"><i class="<?= $team['icon_04']?>"></i></a></li>
                                </ul>
                            </div>
                            <div class="member-details position-relative">
                                <h4 class="font-600 color-white"><?= $team['name']?></h4>
                                <p class="color-white"><?= $team['job_post']?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!--End Team Member Single-->                    
                </div>
                <!--End Team Members Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Team Section-->

        <!-- testimonial Section Start -->
      <section class="clients_testimonial_area default-padding" id="testimonial">
          <div class="container">
            <!--Start Heading-->
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center">
                        <h4 class="color-gray">Our Client Reviews</h4>
                        <h2 class="p-color1">Our <span class="p-color">Testimonials</span></h2>
                    </div>
                </div>
            </div>
            <!--End Heading-->

            <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                      <div class="slider slider-for">
                          <!-- Client testimonial Text  -->
                          <div class="client-testimonial-text text-center">
                              <div class="client">
                                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                              </div>
                              <div class="client-description text-center">
                                  <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. ”</p>
                              </div>
                              <div class="star-icon text-center">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <div class="client-name text-center">
                                  <h5>Aigars Silkalns</h5>
                                  <p>Ceo Colorlib</p>
                              </div>
                          </div>
                          <!-- Client testimonial Text  -->
                          <div class="client-testimonial-text text-center">
                              <div class="client">
                                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                              </div>
                              <div class="client-description text-center">
                                  <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. ”</p>
                              </div>
                              <div class="star-icon text-center">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <div class="client-name text-center">
                                  <h5>Jennifer</h5>
                                  <p>Developer</p>
                              </div>
                          </div>
                          <!-- Client testimonial Text  -->
                          <div class="client-testimonial-text text-center">
                              <div class="client">
                                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                              </div>
                              <div class="client-description text-center">
                                  <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.”</p>
                              </div>
                              <div class="star-icon text-center">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <div class="client-name text-center">
                                  <h5>Helen</h5>
                                  <p>Marketer</p>
                              </div>
                          </div>
                          <!-- Client testimonial Text  -->
                          <div class="client-testimonial-text text-center">
                              <div class="client">
                                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                              </div>
                              <div class="client-description text-center">
                                  <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. ”</p>
                              </div>
                              <div class="star-icon text-center">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <div class="client-name text-center">
                                  <h5>Henry smith</h5>
                                  <p>Developer</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Client Thumbnail Area -->
                  <div class="col-12 col-lg-6">
                      <div class="slider slider-nav">
                          <div class="client-thumbnail">
                              <img src="front_end/img/customer.png" alt="Image">
                          </div>
                          <div class="client-thumbnail">
                              <img src="front_end/img/customer.png" alt="Image">
                          </div>
                          <div class="client-thumbnail">
                              <img src="front_end/img/customer.png" alt="Image">
                          </div>
                          <div class="client-thumbnail">
                              <img src="front_end/img/customer.png" alt="Image">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    
    <!-- testimonial Section Start -->

        <!--Start Latest Blog Section-->
        <section id="latest-blog" class="bg-gray default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray">Up To Date</h4>
                            <h2 class="p-color1">Our <span class="p-color">Latest Blog</span> </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.</p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Blog Post Row-->
                <div class="row">
                    <!--Start Latest Post Single-->
                    <div class="col-lg-6">
                        <div class="blog-post-single latest row fix">
                            <div class="col-md-6 p-0">
                                <div class="post-media position-relative">
                                    <a href="blog-details.html"><img src="front_end/img/blog-01.jpg" class="img-fluid" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-details">
                                    <div class="post-title">
                                        <h2><a href="blog-details.html">Group Discussion Benefits</a></h2>
                                    </div>
                                    <div class="post-fact">
                                        <p><a href="#"><i class="icofont icofont-user"></i> Admin</a><a href="#"><i class="icofont icofont-comment"></i> 15 Comments</a><a href="#"><i class="icofont icofont-like"></i> 22 Like</a></p>
                                    </div>
                                    <div class="post-content">
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                                        <p><span><a class="font-500 p-color" href="blog-details.html"><i class="icofont icofont-arrow-right p-color"></i> Read More</a></span><span class="float-right"><a class="font-500 p-color" href="#"><i class="icofont icofont-user p-color"></i> 26 Mar 2018</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Latest Post Single-->

                    <!--Start Latest Post Single-->
                    <div class="col-lg-6">
                        <div class="blog-post-single latest row fix">
                            <div class="col-md-6 p-0">
                                <div class="post-media position-relative">
                                    <a href="blog-details.html"><img src="front_end/img/blog-02.jpg" class="img-fluid" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-details">
                                    <div class="post-title">
                                        <h2><a href="blog-details.html">Business Development</a></h2>
                                    </div>
                                    <div class="post-fact">
                                        <p><a href="blog-details.html"><i class="icofont icofont-user"></i> Client</a><a href="#"><i class="icofont icofont-comment"></i> 11 Comments</a><a href="#"><i class="icofont icofont-like"></i> 19 Like</a></p>
                                    </div>
                                    <div class="post-content">
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                                        <p><span><a class="font-500 p-color" href="blog-details.html"><i class="icofont icofont-arrow-right p-color"></i> Read More</a></span><span class="float-right"><a class="font-500 p-color" href="#"><i class="icofont icofont-user p-color"></i> 28 Mar 2018</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Latest Post Single-->

                    <!--Start Latest Post Single-->
                    <div class="col-lg-6">
                        <div class="blog-post-single latest row fix">
                            <div class="col-md-6 p-0">
                                <div class="post-media position-relative">
                                    <a href="blog-details.html"><img src="front_end/img/blog-03.jpg" class="img-fluid" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-details">
                                    <div class="post-title">
                                        <h2><a href="blog-details.html">Product Promotion Tips</a></h2>
                                    </div>
                                    <div class="post-fact">
                                        <p><a href="#"><i class="icofont icofont-user"></i> Client</a><a href="#"><i class="icofont icofont-comment"></i> 23 Comments</a><a href="#"><i class="icofont icofont-like"></i> 18 Like</a></p>
                                    </div>
                                    <div class="post-content">
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                                        <p><span><a class="font-500 p-color" href="blog-details.html"><i class="icofont icofont-arrow-right p-color"></i> Read More</a></span><span class="float-right"><a class="font-500 p-color" href="#"><i class="icofont icofont-user p-color"></i> 12 Apr 2018</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Latest Post Single-->

                    <!--Start Latest Post Single-->
                    <div class="col-lg-6">
                        <div class="blog-post-single latest row fix">
                            <div class="col-md-6 p-0">
                                <div class="post-media position-relative">
                                    <a href="blog-details.html"><img src="front_end/img/blog-04.jpg" class="img-fluid" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-details">
                                    <div class="post-title">
                                        <h2><a href="blog-details.html">Effective Anlysis Ways</a></h2>
                                    </div>
                                    <div class="post-fact">
                                        <p><a href="#"><i class="icofont icofont-user"></i> Admin</a><a href="#"><i class="icofont icofont-comment"></i> 24 Comments</a><a href="#"><i class="icofont icofont-like"></i> 114 Like</a></p>
                                    </div>
                                    <div class="post-content">
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                                        <p><span><a class="font-500 p-color" href="blog-details.html"><i class="icofont icofont-arrow-right p-color"></i> Read More</a></span><span class="float-right"><a class="font-500 p-color" href="#"><i class="icofont icofont-user p-color"></i> 18 Apr 2018</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Latest Post Single-->

                    <!--Start Button-->
                    <div class="col-lg-12">
                        <div class="blog-btn text-center">
                            <a href="blog.html">Browse More</a>
                        </div>
                    </div>
                    <!--End Button-->
                </div>
                <!--End Blog Post Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Latest Blog Section-->

        <!--Start Contact Section-->
        <section id="contact" class="default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class=" color-gray">Need Any Help ?</h4>
                            <h2 class="p-color1">Contact <span class="p-color">With Us</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.</p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Contact Row-->
                <div class="row">
                    <!--Start Contact Info-->
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <!--Start Contact Info Single-->
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="contact-info-single text-center">
                                        <i class="fas fa-location-arrow"></i>
                                        <p class="font-500">23/4 Mount Avenue <br> New York, USA</p>
                                    </div>
                                    <!--End Contact Info Single-->
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <!--Start Contact Info Single-->
                                    <div class="contact-info-single text-center">
                                        <i class="far fa-envelope"></i>
                                        <p class="font-500">support@email.com <br> example@support.com</p>
                                    </div>
                                    <!--End Contact Info Single-->
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <!--Start Contact Info Single-->
                                    <div class="contact-info-single text-center">
                                        <i class="fas fa-mobile-alt"></i>
                                        <p class="font-500">+011 12345 67890 <br> +022 12345 67890</p>
                                    </div>
                                    <!--End Contact Info Single-->
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                     <!--Start Contact Info Single-->
                                    <div class="contact-info-single text-center">
                                        <i class="fas fa-phone"></i>
                                        <p class="font-500">+011 12345 67890 <br> +022 12345 67890</p>
                                    </div>
                                    <!--End Contact Info Single-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Info-->

                    <!--Start Contact Form-->
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name*" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email*" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="10" placeholder="Write Your Message" id="message" name="message" required></textarea>
                                </div>
                                <div class="contact-btn text-center">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                            <div id="form-messages"></div>
                        </div>
                    </div>
                    <!--End Contact Form-->
                </div>
                <!--End Contact Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Contact Section-->

        <!--Start Footer-->
        <footer id="footer">
            <!--Start Footer Top-->
            <div class="footer-top">
                <!--Start Container-->
                <div class="container">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Footer About-->
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="footer-about">
                                <h3 class="color-white">About Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quod quas tenetur accusantium nulla obcaecati ex veniam quia atque, necessitatibus.</p>
                            </div>
                            <div class="footer-newsletter">
                                <h4 class="color-white">Subscribe Now</h4>
                                <form>
                                  <input type="email" name="email"><input type="submit" value="Subscribe">
                                </form>
                            </div>
                        </div>
                        <!--End Footer About-->

                        <!--Start Footer Links-->
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="footer-links">
                                <h3 class="color-white">Important Links</h3>
                                <ul>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Terms and Condition</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Our Policy</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Copyright Notice</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Our Best Services</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Product Promotion Tips</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Business Financing</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Links-->

                        <!--Start Footer Latest News-->
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="footer-latest-news">
                                <h3 class="color-white">Latest News</h3>
                                <!--Start Recent Post Single-->
                                <div class="recent-post-single fix">
                                    <div class="post-img float-left">
                                        <a href="#"><img src="front_end/img/news-01.jpg" class="img-fluid" alt="Image"></a>
                                    </div>
                                    <div class="post-cont float-right">
                                        <h5><a class="color-white" href="#">Business Promotion Tips</a></h5>
                                        <p><span>15 Jun, 2017</span></p>
                                    </div>
                                </div>
                                <!--End Recent Post Single-->

                                <!--Start Recent Post Single-->
                                <div class="recent-post-single fix">
                                    <div class="post-img float-left">
                                        <a href="#"><img src="front_end/img/news-02.jpg" class="img-fluid" alt="Image"></a>
                                    </div>
                                    <div class="post-cont float-right">
                                        <h5><a class="color-white" href="#">Product Marketing Ways</a></h5>
                                        <p><span>26 Jun, 2017</span></p>
                                    </div>
                                </div>
                                <!--End Recent Post Single-->

                                <!--Start Recent Post Single-->
                                <div class="recent-post-single fix">
                                    <div class="post-img float-left">
                                        <a href="#"><img src="front_end/img/news-03.jpg" class="img-fluid" alt="Image"></a>
                                    </div>
                                    <div class="post-cont float-right">
                                        <h5><a class="color-white" href="#">Effective Marketing Ways</a></h5>
                                        <p><span>28 Jun, 2017</span></p>
                                    </div>
                                </div>
                                <!--End Recent Post Single-->
                            </div>
                        </div>
                        <!--End Footer Latest News-->

                        <!--Start Footer Instagram-->
                        <div class="col-lg-3 col-md-6 mb-3">
                           <div class="footer-social-area">
                                <h3 class="color-white">Follow Us</h3>
                                <p class="mb-3">We are happy to see you here.</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Instagram-->

                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Footer Top-->

            <!--Start Footer Bottom-->
            <div class="footer-bottom">
                <p class="color-white text-center"> &copy; Copy 2018. All Rights Reserved By <a class="p-color" href="https://themeforest.net/user/codeglamour">CodeGlamour.</a></p>
            </div>
            <!--End Footer Bottom-->

            <!--Start Click To Top-->
            <div class="click-to-top">
                <a href="#body-wrapper" class="js-scroll-trigger"><i class="fas fa-angle-double-up"></i></a>
            </div>
            <!--End Click To Top-->
        </footer>
        <!--End Footer-->
    </div>
    <!--End Body Wrap-->

    <!--jQuery JS-->
    <script src="front_end/js/jquery-min.js"></script>
    <!--Custom Google Map JS-->
    <script src="front_end/js/map-scripts.js"></script>
    <!--Slick Js-->
    <script src="front_end/js/slick.min.js"></script>
    <!--Counter JS-->
    <script src="front_end/js/waypoints.js"></script>
    <script src="front_end/js/counterup.min.js"></script>
    <!--Bootstrap JS-->
    <script src="front_end/js/bootstrap.min.js"></script>
    <!--Magnic PopUp JS-->
    <script src="front_end/js/jquery.magnific-popup.min.js"></script>
    <script src="front_end/js/mixitup.min.js"></script>
    <!--Owl Carousel JS-->
    <script src="front_end/js/owl.carousel.min.js"></script>
    <!--Jquery Easing Js -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <!--Scrolly JS-->
    <script src="front_end/js/scrolly.js"></script>
    <!--Ajax Contact JS-->
    <script src="front_end/js/ajax-contact-form.js"></script>
    <!--Main JS-->
    <script src="front_end/js/custom.js"></script>

</body>


<!-- Mirrored from codeglamour.com/html/18/probizz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 04:40:42 GMT -->
</html>

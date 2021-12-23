<?php
    session_start();
    require 'includes/header.php';
?>
        
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
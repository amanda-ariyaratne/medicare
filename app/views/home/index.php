<?php
use Core\Session;
use Core\FH;
use App\Models\Users;

$user = Users::currentUser()
?>


<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>MediCare</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>images/favicon.ico">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=PROOT?>css/bootstrap4/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?=PROOT?>css/fontawesome/css/all.min.css">
		
		<!-- Owl Carousel Css -->
        <link rel="stylesheet" href="<?=PROOT?>css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?=PROOT?>css/owl-carousel/owl.theme.default.min.css">
		
		<!-- Main Css -->
        <link rel="stylesheet" href="<?=PROOT?>css/dreamguys.main.css">
		
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
    </head>
    
    <body>
        <!-- Header -->
        <header class="header">
            <div class="header-top" style="background-color: #009ce7;">
                <div class="container">
                    <div class="row">
                         <div class="col-md-2 float-left">
                            <a href="" class="logo">
                                <img src="<?=PROOT?>images/logo.png" width="35" height="35" alt=""> <span style="color: white;">MediCare</span>
                            </a>
                        </div>
                        <div class="col-md-10">
							<nav class="navbar navbar-expand-md p-0">
								<div class="navbar-collapse collapse" id="navbar">
									<ul class="nav navbar-nav main-nav float-right ml-auto">

										<li class="nav-item">
											<a href="<?=PROOT?>home/newH" class="nav-link" style="color: white;">Home</a>
										</li>
										
										
									</ul>
								</div>
							</nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- Header /-->
		
        <!-- Mobile Header -->
        <header class="mobile-header">
            <div class="panel-control-left">
				<a class="toggle-menu" href="#side_menu"><i class="fa fa-bars"></i></a>
            </div>
            <div class="page_title">
				<a href="index.html"><img src="assets/img/logo.png" alt="Logo" class="img-fluid" width="60" height="60"></a>
            </div>
        </header>
		<!-- Mobile Header /-->
		
        <!-- Mobile Sidebar -->
        <div class="sidebar sidebar-menu" id="side_menu">
            <div class="sidebar-inner slimscroll">
				<a id="close_menu" href="#"><i class="fa fa-close"></i></a>

            </div>
        </div>
		<!-- Mobile Sidebar /-->
		
		 <!-- Content -->
        <div class="main-content">
            <section class="section home-banner row-middle">
                <div class="inner-bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="banner-content">
                                <h1>MediCare</h1>
                                <p>With more than two decades of tradition, excellence and quality in providing medical care in a comfortable and convenient environment, we bring peace of mind for the thousands of patients we care about every day with the help of our doctors</p> 
								




                                <a class="btn btn-primary consult-btn" href="<?php if (isset($user)) {echo PROOT . 'register/logout';} else {echo PROOT . 'register/login';} ?>" title="Register">
                      
                                  <i class="demo-icon icon-pencil-2"></i>

                                  <?php if (isset($user)) {
                                    echo 'Logout';
                                  } else {
                                    echo 'Login';
                                  } ?>
                                </a>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
 		<!-- Content /-->
		 
        <!-- Footer -->
        <footer class="footer">
            
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-12">
                                <div class="copy-text text-center">
                                    <p>&#xA9; 2019 <a href="#">MediCare</a>. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer /-->
		
		<!-- Sidebar Overlay -->
        <div class="sidebar-overlay" data-reff="#side_menu"></div>
		
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		
		<!-- Custom JS -->		
		<script src="assets/js/theme.js"></script>
				
    </body>

</html>
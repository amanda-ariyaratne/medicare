
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
            <div class="header-top">
                <div class="container">
                    <div class="row">
                         <div class="col-md-2 float-left">
                            <div class="logo">
								<a href="index.html"><img alt="Logo" src="assets/img/logo.png" width="56" height="50"></a>
                            </div>
                        </div>
                        <div class="col-md-10">
							<nav class="navbar navbar-expand-md p-0">
								<div class="navbar-collapse collapse" id="navbar">
									<ul class="nav navbar-nav main-nav float-right ml-auto">
										<li class="active nav-item">
											<a href="index.html" class="nav-link">Home</a>
										</li>
										<li class="nav-item">
											<a href="about-us.html" class="nav-link">About Us</a>
										</li>
										<li class="nav-item">
											<a href="departments.html" class="nav-link">Departments</a>
										</li>
										<li class="nav-item">
											<a href="services.html" class="nav-link">Services</a>
										</li>
										<li class="nav-item">
											<a href="doctors.html" class="nav-link">Doctors</a>
										</li>
										<li class="dropdown nav-item"> 
											<a class="dropdown-toggle nav-link" data-toggle="dropdown">Blog <b class="caret"></b></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="blog.html">Right Sidebar</a>
												<a class="dropdown-item" href="blog-left-sidebar.html">Left Sidebar</a>
												<a class="dropdown-item" href="blog-full-width.html">Full Width</a>
												<a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
												<a class="dropdown-item" href="blog-details.html">Blog Details</a>
											</div>
										</li>
										<li class="nav-item">
											<a href="contact-us.html" class="nav-link">Contact Us</a>
										</li>
										<li class="nav-item">
											<a class="btn btn-primary appoint-btn nav-link" href="appointment.html">Appointment</a>
										</li>
										<li class="dropdown nav-item"> 
											<a class="dropdown-toggle settings-icon nav-link" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="login.html">Login</a>
												<a class="dropdown-item" href="register.html">Register</a>
												<a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
												<a class="dropdown-item" href="404.html">404</a>
											</div>
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
                <ul class="mobile-menu-wrapper" style="display: block;">
                    <li class="active">
                        <div class="mobile-menu-item clearfix"> 
							<a href="index.html">Home</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="about-us.html">About Us</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="departments.html">Departments</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="services.html">Services</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="doctors.html">Doctors</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="" class="menu-toggle">Blog <i class="fa fa-chevron-down menu-toggle"></i></a>
                        </div>
                        <ul class="mobile-submenu-wrapper" style="display: none;">
                            <li>
								<a href="blog.html">Right Sidebar</a>
                            </li>
                            <li>
								<a href="blog-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li>
								<a href="blog-full-width.html">Full Width</a>
                            </li>
                            <li>
								<a href="blog-grid.html">Blog Grid</a>
                            </li>
                            <li>
								<a href="blog-details.html">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="contact-us.html">Contact Us</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="appointment.html">Appointment</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="login.html">Login</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="register.html">Register</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="forgot-password.html">Forgot Password</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="404.html">404</a>
                        </div>
                    </li>
                </ul>
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
								<a title="Consult" class="btn btn-primary consult-btn" href="<?=PROOT?>register/login">Login</a>
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
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
        <title>Key Quality Services</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- Custom stylesheet - for your changes-->
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/services_styles.css">		
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle blue-btn" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="images/logo.png" alt="Key Quality Services" title="Key Quality Services">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li <?php if($current_script == 'index.php'){echo 'class="active"';}?>>
                                <a href="index.php" >Home</a>
                            </li>
                            <li <?php if($current_script == 'about_us.php'){echo 'class="active"';}?>><a href="about_us.php">About Us</a></li>
                            <li class="dropdown <?php if($current_script == 'iso_foodsafety_consultants.php' || $current_script == 'waterproofing_services.php' ||$current_script == 'manpower_services.php' ||$current_script == 'it_projects.php' ||$current_script == 'stationary_housekeeping_supplies.php'){echo 'active';}?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="iso_foodsafety_consultants.php">ISO and Food Safety Consultants</a></li>
                                        <li><a href="waterproofing_services.php">Waterproofing</a></li>
										<li><a href="manpower_services.php">ManPower Services</a></li>
										<li><a href="it_projects.php">IT Projects</a></li>
										<li><a href="stationary_housekeeping_supplies.php">Stationary and Housekeeping Supplies</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li <?php if($current_script == 'contact.php'){echo 'class="active"';}?>><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
		
		
	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="alert-modal" role="dialog">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 id="modal-title" class="modal-title"></h4>
			</div>
			<div class="modal-body">
			  <p id="modal-body"></p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default btn-contact" data-dismiss="modal">OK</button>
			</div>
		  </div>
		</div>
	  </div>
	</div>

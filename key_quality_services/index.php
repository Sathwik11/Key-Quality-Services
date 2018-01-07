<?php 
$file_path = pathinfo($_SERVER["PHP_SELF"]);
$file_name = $file_path['filename'];
$extension = $file_path['extension'];
$current_script = "$file_name.$extension";

include 'header.php';
?>
		<!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span class="slider-title">Key Quality Services</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">ISO and Food Safety Consultants</b>
									<b>Manpower Services</b>
									<b>Stationary and <br>Housekeeping Supplies</b>
									<b>Waterproofing Services</b>
									<b>IT Projects</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".7s" >
                                   KEY QUALITY SERVICES IS A LEADING service providers and CONSULTANTS IN INDIA. We are specialized in ISO CONSULTANCY AND TRAINING SERVICES, Stationary AND HOUSEKEEPING SUPPLIES, MANPOWER PROVIDERS, IT PROJECTS AND WATER PROOFING SERVICES FOR VARIOUS SMALL, MEDIUM AND LARGE SCALE INDUSTRIES.
                                </h2>
                                <a class="btn-lines dark light wow fadeInUp animated btn btn-default btn-green blue-btn" data-wow-delay="1s" href="contact.php">Contact Us</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
			
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                ABOUT US
                                </h2>
                                <p class="text-justify">
                                    Key Quality Services is a well-established company specialized in HACCP (Hazard Analysis Critical Control Points) and managing food safety Hygiene, and also work with ISO quality and environmental management systems.
                                </p>
                                <p class="text-justify">
                                    Also we are specialized in sulpplying stationary and housekeeping needs, for office and corporate office needs, promotional products and gifting items.
                                </p>
								
								<div class="blog-content pull-right">
                                    <a href="about_us.php" class="btn btn-dafault btn-details">Read More..</a>
									<br><br><br>
                                </div>
								
					
				
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".5s" data-wow-duration="500ms">
                                <img src="images/consultant.jpg" alt="Key Quality Services">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
<?php 
include 'footer_1.php';
include 'footer_2.php';
?>

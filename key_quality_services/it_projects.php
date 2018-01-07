<?php 
$file_path = pathinfo($_SERVER["PHP_SELF"]);
$file_name = $file_path['filename'];
$extension = $file_path['extension'];
$current_script = "$file_name.$extension";

include 'header.php';
?>
        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Services</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li>Services</li>
								<li class="active">IT Projects</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#Page header-->


        <!-- 
        ================================================== 
            Service Page Section  Start
        ================================================== -->
        <section id="service-page" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">IT Projects</h2>
                            <p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".5s" data-wow-duration="500ms">Key Quality Services provides end-to-end Software development services like Web Designing, Android Mobile Applications, E-Commerce Applications, Billing softwares.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".7s" data-wow-duration="500ms">We confidently manage large and complex projects without slipping on delivery deadlines while maintaining the highest standards of quality and efficiency.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".9s" data-wow-duration="500ms">We leverage on technologies that are reliable, scalable, contribute to enhancing the bottom-line, and serve the clients immediate needs.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay="1.1s" data-wow-duration="500ms">Our team members have rich experience in building website designs which are rich in graphics, search engine friendly and also which will attract Customer from across the globe.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay="1.3s" data-wow-duration="500ms">We are successfully delivering projects like Responsive Websites, E-Commerce Portals, and Interactive Websites.</p>
					    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
							<h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"></h2>
                            <img class="img-responsive" src="images/Software-development_3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
<?php 
include 'footer_1.php';
include 'footer_2.php';
?>

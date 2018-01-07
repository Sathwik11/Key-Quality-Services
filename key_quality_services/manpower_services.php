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
								<li class="active">Manpower Services</li>
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
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">ManPower Services</h2>
                            <p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".5s" data-wow-duration="500ms">Key Quality services help organizations and individuals achieve their goals by presenting the right person for the right job.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".7s" data-wow-duration="500ms">We believe in our clients success leads to our success.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".9s" data-wow-duration="500ms">We specialize in providing fresh/trained manpower on contract as per the specific requirement of the client.</p>
							
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay="1.1s" data-wow-duration="500ms">Key Quality Services have adopted the international practices and procedures that are designed to attract and hire the best talent available in the market thereby offering the best employee recruitment.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay="1.3s" data-wow-duration="500ms">We are empowered with people having varied and vast experience in distinct fields. This not only enables us to relate ourselves with the requirements of different fields but also to provide them with the right solutions by providing highly skilled personnel full of positive and vibrant energy to benefit the company and it's objectives.</p>						
					    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <img class="img-responsive" src="images/manpower_2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php 
include 'footer_1.php';
include 'footer_2.php';
?>

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
								<li class="active">Waterproofing</li>
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
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Waterproofing Services</h2>
                            <p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".5s" data-wow-duration="500ms">Waterproofing is one of the most important aspects of building construction. If you want the building to last longer and deliver value for your investment, importance of professional waterproofing.</p>
                            <p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".7s" data-wow-duration="500ms">Our projects are carried out by trained and skilled professionals and we have capable of undertaking projects of any size and complexities.</p>
					    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
							<h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"></h2>
                            <img class="img-responsive" src="images/waterproofing.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clients</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s"></p>
                        <div id="clients-logo" class="owl-carousel"style="width:100%;margin:0 auto;">
                            <div>
                                <img src="images/clients/ashoka_liviano.jpg" alt="Park Hyatt Hyderabad">
                            </div>
							<div>
                                <img src="images/clients/cgr_school.jpg" alt="CGR School">
                            </div>
							<div>
                                <img src="images/clients/Dwaraka Builders.jpg" alt="Dwaraka Builders">
                            </div>
							<div>
                                <img src="images/clients/KRK Power Pvt.Ltd..jpg" alt="KRK Power Pvt.Ltd.">
                            </div>
							<div>
                                <img src="images/clients/UNM Realtors Pvt Ltd.jpg" alt="UNM Realtors Pvt Ltd.">
                            </div>
							<div>
                                <img src="images/clients/Actor Srikanth.jpg" alt="Actor Srikanth">
                            </div>
							<div>
                                <img src="images/clients/Ayyanna Infra.jpg" alt="Ayyanna Infra">
                            </div>
							<div>
                                <img src="images/clients/i5_infra.jpg" alt="i5 Infra Projects">
                            </div>
							<div>
                                <img src="images/clients/godrej_interio.jpg" alt="Godrej Interio">
                            </div>
							<div>
                                <img src="images/clients/Own Houses.jpg" alt="Own Houses">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php 
include 'footer_1.php';
include 'footer_2.php';
?>

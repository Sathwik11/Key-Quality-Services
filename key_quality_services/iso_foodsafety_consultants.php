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
								<li class="active">ISO and Food Safety Consultants</li>
								
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
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">ISO, Food Safety Consulting and Training</h2>
                            <p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".5s" data-wow-duration="500ms">Key Quality Services Specialized in HACCP (Hazard Analysis Critical Control Points) and managing food safety Hygiene, and also work with ISO quality and environmental management systems.</p>
                            <p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".7s" data-wow-duration="500ms">We conduct Client or Customer base includes all sizes of businesses in the food industry, Manufacturing, Warehousing Logistics, and Confectionary from small enterprises to multinational companies. The ISO training is also relevant to the non-food sector by our Certified Lead auditors.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".9s" data-wow-duration="500ms">One of the key aspects of the service we are offering is training, consultancy and food safety, ISO and Hygiene audits to the client's needs.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay="1.1s" data-wow-duration="500ms">We are specialized in Implementation of ISO 22000, HACCP standards. We are able to carry out programmed internal audits of Quality Management Systems, GMP and HACCP, ISO 22000 as required by various Standards.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
							<h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"></h2>
                            <img class="img-responsive" src="images/haccp_certification.jpg" alt="">
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
                                <img src="images/clients/park_hyatt_hyderabad.jpg" alt="Park Hyatt Hyderabad">
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

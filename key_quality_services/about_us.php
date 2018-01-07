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
                            <h2>About Us</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                        <img  -->
                    <div class="col-md-12">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">About Us</h3>
                            <p  class="wow fadeInUp text-justify" data-wow-delay=".5s" data-wow-duration="500ms">
                                Key Quality Services is a well-established company specialized in HACCP (Hazard Analysis Critical Control Points) and managing food safety Hygiene, and also work with ISO quality and environmental management systems.
                            </p>
							<p  class="wow fadeInUp text-justify" data-wow-delay=".7s" data-wow-duration="500ms">
                               We conduct Client or Customer base includes all sizes of businesses in the food industry, Manufacturing, Warehousing Logistics, and Confectionary from small enterprises to multinational companies. The ISO training is also relevant to the non-food sector by our Certified Lead auditors.
                            </p>
							<p  class="wow fadeInUp text-justify" data-wow-delay=".9s" data-wow-duration="500ms">
                               One of the key aspects of the service we are offering is training, consultancy and food safety, ISO and Hygiene audits to the client's needs.
                            </p>
							<p  class="wow fadeInUp text-justify" data-wow-delay="1.1s" data-wow-duration="500ms">
                               We are specialized in Implementation of ISO 22000, HACCP standards. We are able to carry out programmed internal audits of Quality Management Systems, GMP and HACCP, ISO 22000 as required by various Standards.
                            </p>
							
                            <p  class="wow fadeInUp text-justify" data-wow-delay="1.3s" data-wow-duration="500ms">
                                Also we are specialized in sulpplying stationary and housekeeping needs, for office and corporate office needs, promotional products and gifting items.
                            </p>
							<p  class="wow fadeInUp text-justify" data-wow-delay="1.5s" data-wow-duration="500ms">
                                Key Quality Services providing fresh/trained manpower on contract as per the specific requirement of the client.
                            </p>
                            <p  class="wow fadeInUp text-justify" data-wow-delay="1.7s" data-wow-duration="500ms">
                               Waterproofing is one of the most important aspects of building construction. If you want the building to last longer and deliver value for your investment, importance of professional waterproofing.
                            </p>
							 <p  class="wow fadeInUp text-justify" data-wow-delay="1.9s" data-wow-duration="500ms">
                              Our projects are carried out by trained and skilled professionals and we have capable of undertaking projects of any size and complexities.
                            </p>
							
							<br><br>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>


   
<?php 
include 'footer_1.php';
include 'footer_2.php';
?>
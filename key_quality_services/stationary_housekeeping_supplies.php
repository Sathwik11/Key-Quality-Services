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
                                <li class="active">Stationary and Housekeeping Supplies</li>
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
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Stationary and Housekeeping Supplies</h2>
                            <p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".5s" data-wow-duration="500ms">We are specialized in serving stationery needs, office and corporate office needs, promotional products and gifting items, etc.</p>
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".7s" data-wow-duration="500ms">
							We supply extensive range of office stationery including, books, pens, labels, envelops and notice board & accessories for any business, big or small.</p>
							
							<p class="subtitle-des wow fadeInUp animated text-justify" data-wow-delay=".9s" data-wow-duration="500ms">We are also specialized in serving a wide range of high-quality housekeeping products and needs.</p>
					    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
							<h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"></h2>
                            <img class="img-responsive" src="images/stationary.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php 
include 'footer_1.php';
include 'footer_2.php';
?>

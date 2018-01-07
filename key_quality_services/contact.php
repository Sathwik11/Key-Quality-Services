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
                            <h2>Contact Us</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#page-header-->

        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact Us</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                You can use the contact form below to provide feedback or to ask a question.
                            </p>
                            <div class="contact-form">
                                <form id="contact-form" method="POST" action="#" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name" pattern="^[a-zA-Z ]+\.?[a-zA-Z ]*$" required="required">
                                    </div>
                                    
									<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="text" placeholder="Your Mobile Number" class="form-control" name="mobileno" id="mobileno" pattern="^[789]\d{9}$" required="required">
                                    </div>
									
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="text" placeholder="Your Email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required="required">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                                    </div>
                                    
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="sub" name="sub" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                You can find us on map.
                                
                            </p>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.1440425414428!2d78.46425806403553!3d17.44592028869107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90a33d73cd5f%3A0x4d009381d21ca39b!2sMajestic+Mansion%2C+Begumpet%2C+Hyderabad%2C+Telangana+500016!5e0!3m2!1sen!2sin!4v1514736764517" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
					
                    <div class="col-md-4">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>Flat No. C-344, Majestic Mansion<br>Behind Shoper's Stop, Begumpet <br> Hyderabad - 500 016</h5>
							
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <p>info@keyqualityservices.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+91 998 961 5393<br>+91 800 888 4353</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<?php 
include 'footer_2.php';
?>
<script>
$(document).ready(function(){
  $("form").submit(function(event){
    event.preventDefault();

    var name = $("#name").val();
    var mobileno = $("#mobileno").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    var sub = $("#sub").val();

    var input = {name:name,mobileno:mobileno,email:email,subject:subject,message:message,sub:sub};
	
    $.ajax({
      type: "POST",
      url: "send_mail.php", 
      data: input,
      success: function(result){
        var obj = JSON.parse(result);
		alert(obj.status);
        if(obj.status == "success"){
          $('#modal-title').text('Success');
          $('#modal-body').text('Your message has been sent successfully!');
          $('#alert-modal').modal('show');
          $('form').find("input[type=text],input[type=number],input[type=email], textarea").val("");
        }else{
          $('#modal-title').text('Failed');
          $('#modal-body').text('Your message sent failed!');
          $('#alert-modal').modal('show');
        }
      }
    });
  });

});
</script>
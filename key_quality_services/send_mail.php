<?php

ini_set('display_errors', 'Off'); 

if(isset($_POST['sub'])){

	$name=trim($_POST['name']);
	$mobile=trim($_POST['mobileno']);
	$email=trim($_POST['email']);
	$subject=trim($_POST['subject']);
	$msg=trim($_POST['message']);

	// To send HTML mail, the Content-type header must be set
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	// Additional headers
	$headers[] = "Reply-To: $email";
	$headers[] = 'From: Key Quality Services<info@keyqualityservices.com>';

	$admin_mail='naresh.budda93@gmail.com, info@keyqualityservices.com';

	$contact_info = array();
	if(strlen($email) > 0){
		$contact_info[] = "Email: $email";
	}
	if(strlen($mobile) > 0){
		$contact_info[] = "Mobile No: $mobile";
	}
	$contact_info_str = implode(", ",$contact_info);

	$mobile_admin="9989615393";

	$text=$name.' with contact details '.$contact_info_str.' sent a message here, <br/>'.$msg;

	$text = wordwrap($text, 70, "\r\n");

	$res=mail($admin_mail, $subject, $text, implode("\r\n", $headers));

	if($res){
		echo '{ "status":"success"}';
	}
	else{
		echo '{ "status":"failed"}';
	}
}
?>
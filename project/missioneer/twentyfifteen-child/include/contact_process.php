<?php

//$site_url = "http://localhost/local_sites/wp-missioneer/";

$site_url = "http://www.missioneer.com/";		
		
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = 'From:noreply@missioneer.com'; 
$to = 'jonathandymond1@gmail.com'; 
$subject = 'Hello';
$human = $_POST['human'];
	
$body = "From: $name\n E-Mail: $email\n Message:\n $message";
$headers = $from;

if ($_POST['submit']) {
	

	
	if ($name != '' && $email != '') {
			if ($human == '4') {				 
	
					// Success
					/*if (true) { 
						//(mail ($to, $subject, $body, $headers)) {
						header("location:" . $site_url . "?email_sent=1&from=$from&body=$body");
					}
					// Mail fail
					else { 
						header("location:" . $site_url . "?email_sent=0");
					}*/
					
					header("location:$site_url?email_sent=1&from=$from");
			} 
	} 
	else if ($_POST['submit'] && $human != '4') {
			header("location:" . $site_url . "?email_sent=3");
			echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
  else {
			header("location:" . $site_url . "?email_sent=4");
			echo '<p>You need to fill in all required fields!!</p>';
	}

		
}
else {
	die("Page loaded statically.");
	error_log("Contact process loaded statically. Processing refused.");
}



/*
//require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "smtp.example.com"; // SMTP server

$mail->From     = "from@missioneer.com";
$mail->AddAddress("jonathandymond1@gmail.com");
$mail->AddAddress("jdymond1@uncc.edu");

$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;

if(!$mail->Send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}*/
/*
require("../../../../wp-includes/wp-settings.php");

if( wp_mail("jonathandymond1@gmail.com", "Test subject", "Test Message", "From: user@yourdomain.com") ) {
	echo "mail sent.";
}
else {
	echo "mail error.";
}*/

?>

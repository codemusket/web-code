<?php

if( $_POST['ct_submit'] ) {

	$to = "jonathandymond1@gmail.com";
	$subject = "Contact email sent...";
	$body = filter_var($_POST['ct_message'], FILTER_SANITIZE_STRING);
	$headers = filter_var($_POST['ct_email'], FILTER_SANITIZE_EMAIL);
	$human = filter_var($_POST['ct_human'], FILTER_SANITIZE_STRING);
	
	if($human == "4" ) {
		if( wp_mail ($to, $subject, $body, $headers) ) {
			echo "email_sent = true;";
		}
		else {
			echo "email_error = 1;";
		}
	}
	else {
		echo "email_error = 2;";
	}
}

?>
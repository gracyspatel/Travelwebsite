<?php

$to_email = "sakshizalavadia2002@gmail.com";
$subject = "Test Email";
$body = "Hii, This is a test email";
$headers = "From: gracyspatel@gmail.com";
if(mail($to_email, $subject, $body, $headers)){
	echo "Email sent successfully to $to_email";
}
else{
	echo "Email sending failed.";
}

?>
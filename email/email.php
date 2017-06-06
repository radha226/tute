<?php
	
	$to = 'rahulsharma841990@gmail.com';

	$subject = 'Website Change Request';

	$headers = "From: " . strip_tags('info@rahulasr.website') . "\r\n";
	$headers .= "Reply-To: ". strip_tags('info@rahulasr.website') . "\r\n";
	//$headers .= "CC: susan@example.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<b><i>Hello World!!</i></b>';

	mail($to, $subject, $message, $headers);

?>
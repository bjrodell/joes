<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Client Request</title>
</head>

<body>


<?php

$email_to = "bjrodell@gmail.com, maneely84@gmail.com";
$email_subject = "Customer Information Request";
 
// Escape user inputs for security - references the name attribute on the contact page in the POST 

$customer_name = $_POST['clientname'];
$customer_address = $_POST['clientaddress'];
$customer_email = $_POST['email'];
$customer_phone = $_POST['phone'];
	
$driveway_repair = $_POST['drivewayrepair'];
$emergency_roadside = $_POST['emergencyroadside'];
$other_reason = $_POST['other'];
	
$additional_comments = $_POST['comments'];

                        


//sends user an email with relevant information
$email_message = "
				 <html>
				 <head>
				 <title>Customer Form Submission</title>
				 <style>
				 .data {
					 display:inline;
					 font-size:11pt;
				 }
				 
				 h4 {
					display:inline;
					font-size:12pt;
				 }
				 
				 h2 {
					 font-size:16pt;
				 }
				 </style>
				 </head>
				 <body>".
				 "<div><h4>Name: </h4>". "<div class='data'>". $customer_name. "</div></div>".
				 "<div><h4>Address: </h4>". "<div class='data'>". $customer_address. "</div></div>".
				 "<div><h4>Email: </h4>". "<div class='data'>". $customer_email. "</div></div>".
				 "<div><h4>Phone: </h4>". "<div class='data'>". $customer_phone. "</div></div>".
	
				 "<div><h4>Driveway Repair: </h4>". "<div class='data'>". $driveway_repair. "</div></div>".
				 "<div><h4>Emergency Roadside: </h4>". "<div class='data'>". $emergency_roadside. "</div></div>".
				 "<div><h4>Other Reason: </h4>". "<div class='data'>". $other_reason. "</div></div>".
				 
	
				 "<div><h4>Comments: </h4>". "<div class='data'>". $additional_comments. "</div></div>".
				 "</body>
				  </html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$customer_email. "\r\n";
$headers .= 'Cc: bjrodell@gmail.com' . "\r\n";


mail($email_to, $email_subject, $email_message, $headers);
 


?>

</body>
</html>
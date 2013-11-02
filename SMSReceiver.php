<?php
    

 //$phone_number = $_POST['phone_number']; 
 $phone_number_array = array($_POST['phone_number'], $_POST['phone_number1'],$_POST['phone_number2']);  
 $message = $_POST['sms_message'];
 $feedback = array();
    
      // Include the Twilio PHP library.
require_once 'Services/Twilio.php';

// Library version.
$version = "2010-04-01";

// Set your account ID and authentication token
$sid = "AC23cb55d1f401495000c142f0473373b2";
$token = "b0190aa3e52cd40ac26a450a6c9dfb70";


$from_number = "4807255472"; // With trial account, texts can only be sent from this number.
$to_number = $phone_number_array;
$message = $message;

// Create the call client.
$client = new Services_Twilio($sid, $token, $version);

// Send the SMS message.
for($i=0;$i<3;$i++){
try
{
    $client->account->sms_messages->create($from_number, $to_number[$i], $message);
	$feedback[] = "SMS has successfully been sent to  ".$to_number[$i]."<br><br>";
	
}
catch (Exception $e) 
{
    $feedback[] = 'Error: ' . $e->getMessage().'<br><br>';
}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>SMS Feedback</title>
		<meta name="description" content="" />
		<meta name="author" content="Charles" />
		
		<!--Display the meta tags-->
		<meta name="keywords" content="Manny Bridals, Bridal wears for Nigerian Market, Nigerian Marriages, Buy UK wears for Nigeria" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
		<!-- To allow IE 8 and below to recognize html5 element-->
		<!--[if lt IE 9]>
		<script src="html5shiv.js"></script>
		<![endif]-->
		
		<!--stylesheet link-->
		<link rel="stylesheet" href="../css/main.css" />
		
		<!--JavaScripts Link-->
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		
	</head>
	
    <body>
    	
    	<h3>GLOBAL FIRE MINISTRIES SMS SENDER</h3>
    	
    	<?php 
    	
    	 foreach ($feedback as $variable) {
			 echo "<p>$variable</p><br>";
		 } ?>
    	
    	<a href='SMSFormSender.php'>Go Back</a>
    	
    	
    	
    	
   		
   
   
   
   </body>
   </html>
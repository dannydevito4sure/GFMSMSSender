<?php
session_start();
if(!isset($_SESSION['authenticated'])){
	header("Location: index.php");
	exit;
} 
if(isset($_POST['logout'])){
	$_SESSION = array();
	if(isset($_COOKIE['session_name()'])){
		setcookie(session_name(), ' ', time()-86400, '/');
	}
	
	session_destroy();
	header('Location:index.php');
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>GFM SMS Sender</title>
		<meta name="description" content="" />
		<meta name="author" content="Charles" />
		
		<!--Display the meta tags-->
		

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
		<style type="text/css">
		body{ font-family: "Trebuchet MS", Verdana, Arial; width:500px; background-color:#A0A0A0;}
		input,textarea { vertical-align:top; }
		label{ float:left; width:150px;}
		</style>
		
		
	</head>
	
    <body>
 		<form action="SMSReceiver.php" method="post">
 	  <fieldset>	
 	  	<legend><strong>GLOBAL FIRE MINISTRIES SMS SENDER</strong></legend>	
 		 <label for="phone_number">Recipient Number</label>&nbsp;
 		 <input type="text"  name="phone_number" />
 		 <input type="text"  name="phone_number1"/>
 		 <input type="text"  name="phone_number2"/><br>
 		 <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="phone_number3"/>
 		 <input type="text"  name="phone_number4"/>
 		 <input type="text"  name="phone_number5"/><br>-->
 		 <label for="sms_message">Message</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		 <textarea cols="30" rows="10" name="sms_message"></textarea><br>
 		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		 <input type="submit" name="submit_button" value="Send SMS" />	
 		 
 	  </fieldset>		
 			
 	  </form>		
 			
 			
 			
 			
 		<form id="formlogout" method="post">
 		<p>
		<input name="logout" type="submit" value="Log Out">
		</p>
		
	
		</form>
 
 
 
 
 
 
 
 
 
 </body>
 </html>
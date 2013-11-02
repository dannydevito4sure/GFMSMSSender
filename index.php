<?php
$error = "";

if(isset($_POST['login'])){
session_start();	
$username = $_POST['username'];
$password = $_POST['pwd'];
$url = 'SMSFormSender.php'; 
if(empty($username) || empty($password)){
	$error = "Login details cannot be empty";
}else{
 	

if($username=='gfmcommuser' && $password=='commdept'){
	$_SESSION['authenticated'] = 'Great One';
	
	
}
else{
	$error = "Invalid username and password";
}
}
if(isset($_SESSION['authenticated'])){
	header("Location: $url");
	exit;
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

		<title>Login Page</title>
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
    	
    	<?php echo "<p style='color:red;'>$error</p>"; ?>
    	
    	
   		<form id="form1" method="post" action="">
		<p>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		</p>
		<p>
		<label for="pwd">Password:</label>
		<input type="password" name="pwd" id="pwd">
		</p>
		<p>
		<input name="login" type="submit" id="login" value="Log in">
		</p>
		</form>
   
   
   
   </body>
   </html>
<?php 
$message = '';
include "writeinfile.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv = "Content-Type" content = "text.html; charset = UTF-8" />
	<meta nawm = "viewport" content = "width = device-width, initial-scale = 1.0" />
	<title>Signup Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href="style.css" type = "text/css" />
	
</head>


<body>

<div class = "login-form">
	<div class = "login-face">
		<img src = "login-face.png">
	</div>
	<section class = "form">
		<?php echo $message ?>
		<form method = "post">
			<div class = "input uname">
				<input type = "text" name = "username" id = "username" placeholder ="Username" required />
				<i class = "fa fa-user"></i>
			</div>
			<div class = "input pass">
				<input type = "password" name = "password" id = "password" placeholder ="Password" required />
				<i class = "fa fa-lock"></i>
			</div>
			<div class = "input email">
				<input type = "email" name = "email" id = "email" placeholder ="Email" required />
				<i class = "fa fa-envelope"></i>
			</div>
			<center><a href = "index.php" style = "color:gray; font-size:14px; text-decoration:none; font-family:sans-serif; margin-bottom:10px;">Login</a></center>
			<div>
				<input type = "submit" name = "signup" id = "signup" value = "Sign Up" />
			</div>

		</form>
	</section>

<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type = "text/javascript" src = "index.js"> </script>

</body>
</html>





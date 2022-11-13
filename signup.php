<?php
require_once "config.php";
$input_email = $user = $input_pass = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$input_email = $_POST["email"];
		
		$user = $_POST["uname"];
		
		$input_pass = $_POST["pass"];
		
		
		
	$query = "INSERT INTO user_info (email,username,pass) VALUES (?,?,?)";

	$stmt = mysqli_prepare($link, $query);
	// Bind variables to the prepared statement as parameters
		mysqli_stmt_bind_param($stmt, "sss", $param_id, $param_lname, $param_fname);
	
		$param_id = $input_email;
		$param_lname = $user;
		$param_fname = $input_pass;
		if (mysqli_stmt_execute($stmt)){// Records created successfully. Redirect to landing page
			header("location: index.php");
			exit();
			} else{
			echo "Oops! Something went wrong. Please try again later.";
				}

 
// Close statement
mysqli_stmt_close($stmt);


} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/logo.png">
		</div>
		<div class="login-content">
			<form method="POST" action="">
				<img src="img/avatar.svg">
				<h2 class="title">SIGN UP</h2>
           		<div class="input-div one">
					<div class="i">
						<i class="fas fa-solid fa-envelope"></i>
					</div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" required name="email">
           		   </div>
           		</div>
			
           		<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
				   	<div class="div">
					<h5>Username</h5>
					<input type="text" class="input" required name="uname">
					</div>
					</div>
				
           		<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" required name="pass">
            	   </div>
            	</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-thin fa-lock"></i>
					</div>
				<div class="div">
					<h5>Re-Confirm Password</h5>
					<input type="password" class="input" required name="rpass">
					</div>
				 </div>
            	<input type="submit" class="btn" value="SUBMIT">
        </div>
    </div>
	</form>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

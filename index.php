<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "hackwars";

$con = mysqli_connect($host,$user,$password, $db) or die ("Error connecting to database");

if (isset($_POST['username'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "select * from user_info where username = '".$uname."' AND password = '".$pass."' limit 1";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)==1){
        header('Location: HOME/homepage.html');
        exit();
    }
    else{
        echo "<script> alert ('You Have entered an Incorrect Password')
        window.location.href = 'index.php'
        </script>";
        exit();
    }
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
			<form action="" onsubmit="return checkforblank()" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Enter your username</h5>
                              <input type="text" name="username" id="user" placeholder="" class="input"/>
                            </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Enter your password</h5>
                           <input type="password" name="password" id="pass" placeholder=""  class="input"/>
                        </div>
            	</div>
            	<a href="signup.php">SIGN-UP</a>
            	<input type="submit" class="btn" value="Login" >
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
<script>
    function checkforblank()
    {
        var errormessage = "";
        if (document.getElementById('user').value == ""){
        errormessage += "Enter your Username\n";
        }
        if (document.getElementById('pass').value == ""){
        errormessage += "Enter your Password\n";
        }
        if (errormessage != ""){
        alert(errormessage)
        return false;}
    }
</script>
<div class = "bg">
</html>


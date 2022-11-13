<?php
include "config.php";


if (isset($_POST['username'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "select * from loginform where user = '".$uname."' AND pass = '".$pass."' limit 1";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)==1){
        header('Location: order.php');
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
<html lang="en">
<head>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <title> LOGIN </title>

</head>
<body>
    <script>
        function checkforblank()
		{
			var errormessage = "";
			if (document.getElementById('user').value == ""){
			errormessage += "Enter your Username\n";
			}
            if (document.getElementById('pass').value == ""){
			errormessage += "Enter your password\n";
			}
            if (errormessage != ""){
			alert(errormessage)
			return false;}
        }
    </script>
<div class = "bg">
        <img src="images/bg.jpg" id = "bg">
</div>
<div class = "square">
        <img src="images/logo.png" id = "log">
        <form method="POST" action="" onsubmit="return checkforblank()">
            <div class="input">
                <input type="text" name="username" id="user" placeholder="Enter your username"/>
            </div>
            <div class="input">
                <input type="password" name="password" id="pass" placeholder="Enter your password"/>
            </div>
            <a> <button type="submit" value="Submit" id="submitbutton"> Login </button></a>
        </form>
</div>


</body>
</html>

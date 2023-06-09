<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="dex.css">
</head>

<body>

	<div class="container" id="container">
		<div class="form-container login-container">
			<form action="auth.php" name="myform" method="post" onclick="return validate();">
				<h2>LOGIN</h2>
				<label>USERNAME:</label>
				<input type="text" id="user" name="user" />
				<LABEL>PASSWORD:</LABEL>
				<input type="password" id="pass" name="pass" />

				<button>Log In</button>
				<a href="dashboard.php"></a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">

				<div class="overlay-panel overlay-right">
					<h1>Hello!</h1>
					<p>Login to continue!</p>
				</div>
			</div>
		</div>
	</div>

	<script>

		function myFunction(){
			var un=document.forms["myform"]["user_name"].value;
			var pw=document.forms["myform"]["password"].value;
			if(un==user_name && pw == password)
			{
				window.location.href="http://127.0.0.1:5500/dashboard.html";
			}
			else{
				alert("INvalid user_name and password");
			}
		}

    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>

	


</body>

</html>
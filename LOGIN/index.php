<?php 
	session_start();
	$conn = new mysqli("localhost","root","","hr_side");
	$msg = "";
	if(isset($_POST['Login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$usertype=$_POST['usertype'];
		$query="SELECT * FROM `users` WHERE username=? and password=? and usertype=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sss",$username,$password,$usertype);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();

		session_regenerate_id();
		$_SESSION['username'] = $row['username'];
		$_SESSION['usertype'] = $row['usertype'];
		session_write_close();
		if($result->num_rows==1 && $_SESSION['usertype']=="HR/Manager"){
			echo '<script>alert("Logged in successfully as HR/Manager"); </script>';
			?>
			<script>window.location.href="../hr/html/light/index.php"</script>
            <?php
		}
		else if($result->num_rows==1 && $_SESSION['usertype']=="Employee"){
			echo '<script>alert("Logged in successfully as Employee"); </script>';
			?>
			<script>window.location.href="../EMPLOYEE/html/light/index.php"</script>
            <?php
		}
		else{
			$msg = "Username or/and Password is Incorrect. Please Retry.";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:#42e6f5">
	<h1 ><center>PROJECT MANAGEMENT SYSTEM WITH HUMAN RESOURCE MANAGEMENT</center></h1>
	<div class="container">
    
		<div class="img">

			<img src="img/OIP1.jpg">
		</div>
		<div class="login-content">
			<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
				<div class="input-div type">
					<label for="usertype">-></label>
					<select name="usertype" id="usertype">
						<option value="Blanck" disabled>Select user-type:</option>
						<option value="HR/Manager">HR/Manager</option>
						<option value="Employee">Employee</option>
					</select>
				</div>
            	<!--<a href="forget_password.php">Forgot Password?</a>-->
				<h4 style="color: red;"><?=$msg; ?></h4>
            	<input type="submit" class="btn" name="Login" value="Login">
            </form>
			
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

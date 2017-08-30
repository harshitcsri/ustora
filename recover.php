<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['Recover'])) {

	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$result = mysqli_query($con, "SELECT * FROM users WHERE mobile = '" . $mobile. "'");

	if ($row = mysqli_fetch_array($result)) {
							
							function random($length = 6)
								{      
					    		$chars = 'bcdfghjklmnprstvwxzaeiou0123456789';
					    			$result = '';

					   		 for ($p = 0; $p < $length; $p++)
					    {
					        $result .= ($p%2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];
					    }

					    return $result;
					}
					if(mysqli_query($con, "update users set rand='" . random() . "' where mobile=$mobile "))

					 {
					 	$rand=random();
					 	?><a href="send.php?id=<?php echo $mobile ?>" class="btn btn-info" role="button">Send OTP</a><?php
					}
		else 
			{
			echo"Failed While Generating OTP";
				}


	
	} else {
		$errormsg = "Incorrect Phone Number!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ustora| Recover</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="ccss/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Ustora</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Recover Account</legend>
					
					<div class="form-group">
						<label for="Contact">Mobile</label>
						<input type="text" name="mobile" placeholder="Enter Mobile Number" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="Recover" value="Recover" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="register.php">Sign Up Here</a>
		</div>
		<div class="col-md-4 col-md-offset-4 text-center">	
		Forger Password? <a href="recover.php">Reset Password</a>
		</div>
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already have OTP? <a href="otp.php">Enter OTP</a>
		</div>

	</div>
</div>

<script src="cjs/jquery-1.10.2.js"></script>
<script src="cjs/bootstrap.min.js"></script>
</body>
</html>

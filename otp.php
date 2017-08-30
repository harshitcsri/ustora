<?php

include_once 'dbconnect.php';
if (isset($_POST['Recover'])) {
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$otpenter = mysqli_real_escape_string($con, $_POST['otpenter']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE mobile = '" . $mobile. "' and rand = '" . $otpenter . "'");

	

	if ($row = mysqli_fetch_array($result)) {

?>
	<h1>Success</h1>
	<a href="changepassword.php?id=<?php echo $mobile; ?> & otp=<?php echo $otpenter; ?>" class="btn btn-info" role="button">Click here to Change Password</a>
<?php	
	} else {
		$errormsg = "Incorrect OTP!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ustora|Login</title>
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
					<legend>Recover</legend>
				
				<div class="form-group">
						<label for="name">Enter Mobile number</label>
						<input type="text" name="mobile" placeholder="Register Mobile number" required class="form-control" />
					</div>


					<div class="form-group">
						<label for="name">Enter OTP</label>
						<input type="text" name="otpenter" placeholder="One Time Password" required class="form-control" />
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
	</div>
</div>

<script src="cjs/jquery-1.10.2.js"></script>
<script src="cjs/bootstrap.min.js"></script>
</body>
</html>

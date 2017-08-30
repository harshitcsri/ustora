<?php

include_once 'dbconnect.php';
	$mobile=$_GET['id'];
	$otp=$_GET['otp'];
	$password = mysqli_real_escape_string($con, $_POST['password']);
?>
<?php
	
$error = false;

	if (!$error) {
		if(mysqli_query($con, "update users set password='" . md5($password) . "'  where rand='$otp'")) {
			echo "<script>alert('Succesfully Changed Password! Please Login');location.href='login.php'; </script>";
		} else {
			echo "<script>alert('Some thing went Wrong! Please try later')</script>";
	}

}
?>
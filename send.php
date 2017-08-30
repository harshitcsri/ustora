<?php 
include "dbconnect.php";
$number=$_GET['id'];
if(isset($number))
{
		$result=mysqli_query($con,"select rand from users where mobile='$number' limit 0,1");
		$data=$result->fetch_assoc();
		$message=$data['rand'];
		$username="harshit945";
$password="harshit@1101";
$sender="Ustora"; 
error_reporting (E_ALL ^ E_NOTICE);

		$url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($number)."&sender=".urlencode($sender)."&message=".urlencode($message)."&type=".urlencode('3'); 
			$ch = curl_init($url);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			echo $curl_scraped_page = curl_exec($ch);

			curl_close($ch); 

}
?>


<a href="otp.php">Enter OTP</a>


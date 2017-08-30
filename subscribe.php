<?php
include 'include/connect2.php';

	$sub=$_POST['subscribe'];
   $insert_query="INSERT into subscribers(subscribers) values('$sub')";
   

      
  $run_query=mysqli_query($con,$insert_query) or die ("Error while Inserting");
  if( $run_query)
  {
	  echo "<script>alert('Succesfully Subscribed');location.href='index.php'; </script>";
  }
  else{
  	echo "<script>alert('Oops Some Error Occured')</script>";
  }  



?>
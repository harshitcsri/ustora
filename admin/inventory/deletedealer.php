<?php
include"config.php";
$id=$_GET['did'];
if(isset($id)){
	$query=$mysqli->query("delete from profile where did='$id'");
	if($query)
	{
		echo"<script>alert('Deleted');location.href='index.php'; </script>";
	}
	else
	{
		header('location:index.php');
	}
}
?>
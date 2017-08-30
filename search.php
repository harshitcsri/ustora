<?php
include 'include/connect.php';

if(isset($_POST['text'])){
	
	$product_title=$_POST['text'];

$gt_product="select * from product WHERE product_title like '%$product_title%' ";
$run_product=mysqli_query($con,$gt_product)or die("error query");

while($row_product=mysqli_fetch_array($run_product))
{
	$pro_id=$row_product['product_id'];
	$pro_title=$row_product['product_title'];
	$pro_cat=$row_product['cat_id'];
	$pro_brand=$row_product['brand_id'];
	$pro_price=$row_product['product_price'];
	$pro_desc=$row_product['product_desc'];
	$pro_img=$row_product['product_img1'];
	
	echo 
	"
	<div style='display:inline-block;padding:10px'>
	<h3>$pro_title</h3>
	<img src='admin/pic/$pro_img' width='150' height='180'/><br>
	<p><b>price :$pro_price</b></p>
	<a href='detailes.php?pro_id=$pro_id' style='floate:left;'>Buy Now</a>
	<a href='index.php?add_card=$pro_id'><button style='float:right;'>BuyNow</button></a>
	
	</div>
	
	";
	
}
}
?>
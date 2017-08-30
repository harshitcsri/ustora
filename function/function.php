<?php

$db=mysqli_connect("localhost","root","","myshop") or die("Error while connecting to Database");



function getpro()
{
	global $db;
	
	if(!isset($_GET['cat'])){
		
		if(!isset($_GET['brand'])){

$get_product="select * from product order by rand() LIMIT 0,8";
$run_product=mysqli_query($db,$get_product)or die("error query");

while($row_product=mysqli_fetch_array($run_product))
{
	$pro_id=$row_product['product_id'];
	$pro_title=$row_product['product_title'];
	$pro_cat=$row_product['cat_id'];
	$pro_brand=$row_product['brand_id'];
	$pro_price=$row_product['product_price'];
	$pro_desc=$row_product['product_desc'];
	$pro_img=$row_product['product_img1'];
	$a=$pro_title;
	
	echo 
	"
	<div style='display:inline-block;padding:10px'>
	<h3>$pro_title</h3>
	<img src='admin/onlinemanagement/productadd/pic/$pro_img' width='150' height='180'/><br>
	<p><b>price :$pro_price</b></p>
	<a href='detailes.php?pro_id=$pro_id' style='floate:left;'>Details</a>
	<a href='buynow.php?msg=$a&price=$pro_price'>Buy Now </a>
	
	</div>
	
	
	";
	
	
	
}
		}
}
}


function get_cat_pro()
{
	global $db;
	
	if(isset($_GET['cat'])){
		
	$cat_id=$_GET['cat'];	

$get_cat_pro="select * from product WHERE cat_id=$cat_id";
$get_run_pro=mysqli_query($db,$get_cat_pro)or die("error query");

$count =mysqli_num_rows($get_run_pro);
if($count==0)
{
	echo"<h3> No product found for this categories</h3>";
}

while($get_cat_pro=mysqli_fetch_array($get_run_pro))
{
	$pro_id=$get_cat_pro['product_id'];
	$pro_title=$get_cat_pro['product_title'];
	$pro_cat=$get_cat_pro['cat_id'];
	$pro_brand=$get_cat_pro['brand_id'];
	$pro_price=$get_cat_pro['product_price'];
	$pro_desc=$get_cat_pro['product_desc'];
	$pro_img=$get_cat_pro['product_img1'];
	
	echo 
	"
	<div style='display:inline-block;padding:10px'>
	<h3>$pro_title</h3>
	<img src='admin/onlinemanagement/productadd/pic/$pro_img' width='150' height='180'/><br>
	<p><b>price :$pro_price</b></p>
	<a href='detailes.php?pro_id=$pro_id' style='floate:left;'>Details</a>
	<a href='buynow.php?add_card=$pro_id'><button style='float:right;'>Buy Now</button></a>
	
	</div>
	
	";
	
}
		
}
}


function get_brand_pro()
{
	global $db;
	
	if(isset($_GET['brand'])){
		
	$brand_id=$_GET['brand'];	

$get_brand_pro="select * from product WHERE brand_id=$brand_id";
$get_run_pro=mysqli_query($db,$get_brand_pro)or die("error query");

$count=mysqli_num_rows($get_run_pro);
if($count==0)
{
echo"<h3> No product found for this brand</h3>";	
}

while($get_brand_pro=mysqli_fetch_array($get_run_pro))
{
	$pro_id=$get_brand_pro['product_id'];
	$pro_title=$get_brand_pro['product_title'];
	$pro_cat=$get_brand_pro['cat_id'];
	$pro_brand=$get_brand_pro['brand_id'];
	$pro_price=$get_brand_pro['product_price'];
	$pro_desc=$get_brand_pro['product_desc'];
	$pro_img=$get_brand_pro['product_img1'];
	
	echo 
	"
	<div style='display:inline-block;padding:10px'>
	<h3>$pro_title</h3>
	<img src='admin/onlinemanagement/productadd/pic/$pro_img' width='150' height='180'/><br>
	<p><b>price :$pro_price</b></p>
	<a href='detailes.php?pro_id=$pro_id' style='floate:left;'>Details</a>
	<a href='buynow.php?add_card=$pro_id'><button style='float:right;'>Buy Now</button></a>
	
	</div>
	
	";
	
}
		
}
}





function cat()
{
	global $db;
	
$get_cats="select * from categories";
$run_cats=mysqli_query($db,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
	$cat_id=$row_cats['cat_id'];
	$cat_title=$row_cats['cat_title'];

echo "<li><a href='products.php?cat=$cat_id'>$cat_title</a></li>";
}
}

function brand()
{
global $db;	
	
$get_brand="select * from brand";
$run_brand=mysqli_query($db,$get_brand);
while($row_brand=mysqli_fetch_array($run_brand))
{
	$brand_id=$row_brand['brand_id'];
	$brand_title=$row_brand['brand_title'];

echo "<li><a href='products.php?brand=$brand_id'>$brand_title</a></li>";
 
}
	
}


?>
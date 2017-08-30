<!DOCTYPE html>
<?php
session_start();
include_once 'dbconnect.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
      <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><h3>Ustora</h3></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<script src="cjs/jquery-1.10.2.js"></script>
<script src="cjs/bootstrap.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="ccss/bootstrap.min.css" type="text/css" />
   <div>
        
   </div>
   </div>
   <div>
        <div>
                <form class="navbar-form" role="search">
                <div align="right">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Search" name="srch-term" type="text" style="height: 42px; width:230px;">
                    <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
                </form>
      </div>
   </div>


    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="randm.php">Repair and Maintaince</a></li>
                        <li><a href="Warranty.php">Warranty Status</a></li>
                          <li><a href="cart.php">Cart</a></li>
                        <li><a href="otherservices.php">Other Services</a></li>
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    <br>
    <br>
    <br>
        <div align="center">
        <div class="container"> <?php
          include("include/connect.php");
			include("function/function.php");

		?>
		<link rel="stylesheet" href="style/style.css" media="all"/>

<div id="left">
<div id="title">Categories</div>
<ul id="cats">
<?php cat();?>

</ul>


<div id="left_middile">Brand</div>
<ul id="middle">

<?php brand();?>

</ul>
</div>

		<?php

if(isset($_GET['pro_id']))
{
    $product_id=$_GET['pro_id'];

$get_product="select * from product WHERE product_id='$product_id'";
$run_product=mysqli_query($db,$get_product)or die("error query");

while($row_product=mysqli_fetch_array($run_product))
{
    $pro_id=$row_product['product_id'];
    $pro_title=$row_product['product_title'];
    $pro_cat=$row_product['cat_id'];
    $pro_brand=$row_product['brand_id'];
    $pro_price=$row_product['product_price'];
    $pro_desc=$row_product['product_desc'];
    $pro_img1=$row_product['product_img1'];
    $pro_img2=$row_product['product_img2'];
    $pro_img3=$row_product['product_img3'];
    
    echo 
    "
    <div style='display:inline-block;padding:10px margin:10px;'>
    <h3>$pro_title</h3>
    <img src='admin/onlinemanagement/productadd/pic/$pro_img1' width='160px' height='160px''/><br>
    <img src='admin/onlinemanagement/productadd/pic/$pro_img2' width='200px' height='200px''/><br>
    <img src='admin/onlinemanagement/productadd/pic/$pro_img3' width='240px' height='240px''/><br><br>
    <p><b>price :$pro_price</b></p>
    <p><b>Detail:$pro_desc</b></p>
    <a href='index.php' style='floate:left;'>go back</a>
    <a href='buynow.php?msg=$pro_title&price=$pro_price'><button style='float:right;'>Buy Now</button></a>
    
    </div>
    
    ";
    
}
        
}
?>
</div>


</div>



</body>
</head>
</html>        
        </div>

        </div>
        <br>
        <br>
        <br>
    
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>
    <div>
        <?php
            include 'ustorafoot.php'
        ?>
    </div>
  </body>

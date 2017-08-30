
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
    <div>
    <?php 
    $error = false;
        if (isset($_POST['signup'])) {
    $rname = mysqli_real_escape_string($con, $_POST['rname']);
    $remail = mysqli_real_escape_string($con, $_POST['remail']);
    $raddress = mysqli_real_escape_string($con, $_POST['raddress']);
    $rtag = mysqli_real_escape_string($con, $_POST['rtag']);
    $rcontact = mysqli_real_escape_string($con, $_POST['rcontact']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$rname)) {
        $error = true;
        $rname_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($remail,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $remail_error = "Please Enter Valid Email ID";
    }
    if (!preg_match("/^[0-9]+$/",$rcontact)) {
        $error = true;
        $rcontact_error = "Enter numbers only";
    }
    if (!preg_match("/^[a-zA-Z0-9 ]+$/",$rtag)) {
        $rerror = true;
        $rtag_error = "Name must contain only alphabets or number";
    }
     if (!preg_match("/^[a-zA-Z0-9 ]+$/",$raddress)) {
        $error = true;
        $raddress_error = "Name must contain only alphabets and space";
    }

   
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO repair(name,email,contact,tag,address,date) VALUES('" . $rname . "', '" . $remail . "','". $rcontact . "', '" . $rtag . "', '" . $raddress . "',curdate())")){
            $successmsg = "Successfully Registered! <a href='index.php'>We will contact you soon</a>";
        } else {
            $errormsg = "Oops error occured...Please try again later!";
        }
    }
}
?>


    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Register for Repair and Maintaince</legend>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="rname" placeholder="Enter Full Name" required value="<?php if($error) echo $rname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($rname_error)) echo $rname_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="remail" placeholder="Email" required value="<?php if($error) echo $remail; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($remail_error)) echo $remail_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Contact no</label>
                        <input type="text" name="rcontact" placeholder="Contact number" required class="form-control" />
                        <span class="text-danger"><?php if (isset($rcontact_error)) echo $rcontact_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Product name or Tag no</label>
                        <input type="text" name="rtag" placeholder="Product name" required class="form-control" />
                        <span class="text-danger"><?php if (isset($rtag_error)) echo $rtag_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="raddress" placeholder="Address" required class="form-control" />
                        <span class="text-danger"><?php if (isset($raddress_error)) echo $raddress_error; ?></span>
                    </div>
    
                    <div class="form-group">
                        <input type="submit" name="signup" value="Submit" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">  
        Already Registered? <a href="check.php">Check status now</a>
        </div>
    </div>
</div>
            


        <br>
        <br>
        <br>
            
        </div>
        
    
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

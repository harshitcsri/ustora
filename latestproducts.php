<html>
<body>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <div>
    <?php

include 'include/connect.php';
    global $con;
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
}
?>


       <div>
       <div class="container">
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Model:xyz</a></h2>
                                
                                <div class="product-carousel-price">
        
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-2.jpg" alt="">
                                    <div class="product-hover">
                                    </div>
                                </div>
                                
                                <h2>Model:xyz</h2>
                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-2.jpg" alt="">
                                    <div class="product-hover">
                                    </div>
                                </div>
                                
                                <h2>Model:xyz</h2>
                             </div><div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                    </div>
                                </div>
                                
                                <h2>Model:xyz</h2>
                              </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-3.jpg" alt="">
                                    <div class="product-hover">
                                    </div>
                                </div>
                                
                                <h2>Model:xyz</h2>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-2.jpg" alt="">
                                    <div class="product-hover">
                                    </div>
                                </div>
                                
                                <h2>Model:xyz</h2>
                              </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
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
    </body>
    </html>
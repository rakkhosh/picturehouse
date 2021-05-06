<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Our Shows</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/category.css">
    <link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
</head>
<body>
<div class="super_container">

    <!-- Header -->
    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="index.html">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="images/logo1.png" alt=""></div><!--logo will be here-->
                        <div><font face="Comic sans MS" size="6">Picture House</font></div>
                    </div>
                </a>
            </div>


            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                <!-- User -->
              <!--  <div class="user"><a href="login.php"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a><div><strong>Log In</strong></div></div> -->
                <!-- Phone -->
                <div class="user"><a href="profile.php"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a><div>Profile</div></div>
                <div class="user"><a href="about.html"><div><i class="fa fa-info-circle" style="font-size:24px"></i></div></a><div>About Us</div></div>
                <div class="user"><a href="c.html"><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></a><div>Contact Us</div></div>

            </div>
        </div>
    </header>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->

        <div class="home">
            <div class="home_container d-flex flex-column align-items-center justify-content-end">
                <div class="home_content text-center">
                    <div class="home_title">Our Shows</div>
                    <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <?php  if (isset($_SESSION['username'])) : ?>
                                <li>Welcome <strong><?php echo $_SESSION['username']; ?></strong></li> <br>
                                <li> <a href="index.html?logout='1'" style="color: red;">logout</a> </li>
                            <?php endif ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="container">
                <div class="row products_bar_row">
                    <div class="col">
                        <div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                            <div class="products_bar_links">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="last.html">Last week's show</a></li>
                                    <li class="active"><a href="#">Running Shows</a></li>
                                    <li><a href="next.html">Next week's show</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row products_row products_container grid">

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item new">
                        <div class="product">
                            <div class="product_image"><img src="images/home_2.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product.html">Joker</a></div>
                                            <div class="product_category">Running</div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>

                                        <div class="product_price text-right">7.9/10</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><a href="checkout.html"><img src="images/cart.svg" class="svg" alt=""><div>+</div></a></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 grid-item hot">
                        <div class="product">
                            <div class="product_image"><img src="images/home_3.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product4.html">Jumanji</a></div>
                                            <div class="product_category">Running</div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">8.8/10</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 grid-item hot">
                        <div class="product">
                            <div class="product_image"><img src="images/home_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product3.html">Avengers:End Game</a></div>
                                            <div class="product_category">Running</div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">8.8/10</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><a href="checkout.html"><img src="images/cart.svg" class="svg" alt=""><div>+</div></a></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 grid-item hot">
                        <div class="product">
                            <div class="product_image"><img src="images/home_4.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product2.html">Spider:Far From Home</a></div>
                                            <div class="product_category">Running</div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">8.8/10</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><a href="checkout.html"><img src="images/cart.svg" class="svg" alt=""><div>+</div></a></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 grid-item hot">
                        <div class="product">
                            <div class="product_image"><img src="images/loading.png" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product.html">Coming Very SOON</a></div>
                                            <div class="product_category">Stay Tuned</div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 grid-item hot">
                        <div class="product">
                            <div class="product_image"><img src="images/loading.png" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product.html">Coming Very SOON</a></div>
                                            <div class="product_category">Stay Tuned</div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">


        <div class="footer_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                            <div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                This website is created by <strong>Group 2</strong> of CSE300 with <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="terms.html">Terms and Condition</a></li>
                                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


























<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->


</div>
</body>
</html>
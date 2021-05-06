<?php
require('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/checkout.css">
    <link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

    <div class="menu_nav">
        <ul>
            <li><h2><font face="Algerian" color="black">User Feedback</font></h2></li><br>
            <li><a href="#">Aedib95:</a></li>
            <li><p><font face="Berlin Sans FB">"good services and fast response"</font></p></li>
            <li><a href="#">Haddi:</a></li>
            <li><p><font face="Berlin Sans FB">"i can purchase easily from here"</font></p></li>
            <li><a href="#">Zeshan420:</a></li>
            <li><p><font face="Berlin Sans FB">"payment is super easy"</font></p></li>
            <li><a href="#">Ezzam:</a></li>
            <li><p><font face="Berlin Sans FB">"the site operates smoothly and i'm satisfied"</font></p></li>
            <li><a href="#">Ib.tanjeb:</a></li>
            <li><p><font face="Berlin Sans FB">"good movies with reasonable ticket prices"</font></p></li>
        </ul>
    </div>
    <!-- Contact Info -->
    <div class="menu_contact">
        <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
            <div class="user"><a href="contact.html"><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></a>Contact Us</div>
        </div>

    </div>

</div>

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

            <nav class="main_nav">

            </nav>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                <!-- User -->

                <!-- Phone -->
                <div class="user"><a href="#"><div><i class="fa fa-info-circle" style="font-size:24px"></i></div></a><div><strong>About Us</strong></div></div>
                <div class="user"><a href="contact.html"><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></a><div><strong>Contact Us</strong></div></div>

            </div>
        </div>
    </header>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->

        <div class="home">
            <div class="home_container d-flex flex-column align-items-center justify-content-end">
                <div class="home_content text-center">
                    <div class="home_title">User Profile</div>
                    <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">

                            <?php
                            $a= $_SESSION['username'];
                            echo $_SESSION['username'];?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkout -->

        <div class="checkout">
            <div class="container">
                <div class="row">

                    <!-- Billing -->
                    <div class="col-lg-6">
                        <div class="billing">
                            <div class="checkout_title">Details</div>
                            <div class="checkout_form_container">
                                <form action="#" id="checkout_form" class="checkout_form">
                                    <font color="black"> <div class="row">
                                        <div class="col-lg-6">
                                            <h3> First name:         </h3>
                                        </div>
                                        <div class="col-lg-6">
                                            <h3>Tahmid</h3>
                                        </div>
                                    <div class="col-lg-6">
                                        <h3> Last name:        </h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>Asile</h3>
                                    </div>

                                        <?php
                                        $count=1;
                                        $sel_query="Select * from users ORDER BY id desc;";
                                        $result = mysqli_query($db,$sel_query);
                                        while($row = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-lg-6">
                                        <!-- Last Name -->


                                        <!-- Company -->
                                       <h3> Username:         </h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Last Name -->


                                        <!-- Company -->
                                        <h3><?php echo $row["username"]; ?></h3>
                                    </div>

                                    <div class="col-lg-6">
                                        <!-- Last Name -->


                                        <!-- Company -->
                                        <h3> Email:         </h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Last Name -->


                                        <!-- Company -->
                                        <h3><?php echo $row["email"]; ?> (<a href="">Edit</a>)</h3>
                                    </div>

                                    <?php $count++; } ?>

                                    <div class="col-lg-6">
                                        <h3> Phone:         </h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>01516117333</h3>
                                    </div></div> </font>







                                    <!--<div class="checkout_extra">
                                        <ul>
                                            <li class="billing_info d-flex flex-row align-items-center justify-content-start">
                                                <label class="checkbox_container">
                                                    <input type="checkbox" id="cb_1" name="billing_checkbox" class="billing_checkbox">
                                                    <span class="checkbox_mark"></span>
                                                    <span class="checkbox_text">Terms and conditions</span>
                                                </label>
                                            </li>
                                            <li class="billing_info d-flex flex-row align-items-center justify-content-start">
                                                <label class="checkbox_container">
                                                    <input type="checkbox" id="cb_2" name="billing_checkbox" class="billing_checkbox">
                                                    <span class="checkbox_mark"></span>
                                                    <span class="checkbox_text">Create an account</span>
                                                </label>
                                            </li>
                                            <li class="billing_info d-flex flex-row align-items-center justify-content-start">
                                                <label class="checkbox_container">
                                                    <input type="checkbox" id="cb_3" name="billing_checkbox" class="billing_checkbox">
                                                    <span class="checkbox_mark"></span>
                                                    <span class="checkbox_text">Subscribe to our newsletter</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>-->
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Total -->

                </div>
            </div>
        </div>

        <!-- Footer -->

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
                                        <li><a href="privacy.html">Privacy Policy</a></li>
                                        <li><a href="terms.html">Terms and Condition</a></li>
                                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/checkout.js"></script>

<style>

.checkout{
    background-image: url('appetizer/images/c4.jpg');




}
</style>


</body>
</html>
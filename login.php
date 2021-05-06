<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

    <title>Login Form</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" href="style.css">
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





        </div>
    </header>
</div>



<form class="box" method="post" action="login.php">
    <?php include('errors.php'); ?>

   <!-- <font face="Comic sans MS" size="4"> -->


            <label>Username</label>
            <input type="text" name="username" placeholder="Enter username" >


            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">


            <button type="submit" class="btn" name="login_user">Login</button>

        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>



</form>
</body>
</html>


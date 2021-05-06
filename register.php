<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>َAnimated Login Form</title>
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
    <link rel="stylesheet" href="style1.css">
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




<form class="box" method="post" action="register.php">
    <?php include('errors.php'); ?>
   <!-- <font face="Comic sans MS" size="4"> -->

        <label>First Name</label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Enter firstname">


    <label>Last Name</label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Enter lastname">


    <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter username">


    <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter email">


    <label>Mobile</label>
        <input type="tel" name="phone" pattern="[0]{1}[1]{1}[0-9]{9}" value="<?php echo $cell; ?>" placeholder="Enter mobile no [01*-********]">


    <label>Password</label>
        <input type="password" name="password_1" placeholder="Enter password">


    <label>Confirm Password</label>
        <input type="password" name="password_2" placeholder="Confirm password">


        <button type="submit" class="btn" name="reg_user">Register</button>

    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>
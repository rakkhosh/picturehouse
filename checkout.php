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
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">

			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- User -->
				<div class="user"><a href="login.php"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a><div><strong>Log In</strong></div></div>
				<!-- Phone -->
				<div class="user"><a href="about.html"><div><i class="fa fa-info-circle" style="font-size:24px"></i></div></a><div><strong>About Us</strong></div></div>
				<div class="user"><a href="c.html"><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></a><div><strong>Contact Us</strong></div></div>

			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Checkout</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Checkout</li>
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
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" class="checkout_form">
									<div class="row">
										<div class="col-lg-6">
											<!-- Name -->
											<input type="text" id="checkout_name" class="checkout_input" placeholder="First Name" required="required">
										</div>
										<div class="col-lg-6">
											<!-- Last Name -->
											<input type="text" id="checkout_last_name" class="checkout_input" placeholder="Last Name" required="required">
										</div>
									</div>
									<div>
										<!-- Company -->
										<input type="text" id="checkout_company" placeholder="<?php
										$a= $_SESSION['username'];
										echo $_SESSION['username'];?>" class="checkout_input">
									</div>
									<div>
										<!-- Country -->
										<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
											<option>Seat</option>
											<option>Front</option>
											<option>Back</option>
										</select>
									</div>

									<div>
										<!-- City / Town -->
										<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
											<option>Number of Seats</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>

									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone" class="checkout_input" placeholder="Phone No." required="required">
									</div>
									<div>
										<!-- Email -->
										<input type="email" id="checkout_email" class="checkout_input" placeholder="Email" required="required">
									</div>
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
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Total Cost</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">BDT. 500.0 </div>
									</li>
									<!--<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>-->

								</ul>
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_1" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Bkash</span>
											</label>
										</li>

										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="payment_radio" class="payment_radio">

												<span class="radio_mark"></span>
												<span class="radio_text">Credit Card</span>
											</label>

											<div id="action">
												<div class="row">
													<div class="col-75">
														<div class="container">
															<form action="/action_page.php">

																<div class="row">


																	<div class="col-50">

																		<label for="fname">Accepted Cards</label>
																		<div class="icon-container">
																			<i class="fa fa-cc-visa" style="color:navy;"></i>
																			<i class="fa fa-cc-amex" style="color:blue;"></i>
																			<i class="fa fa-cc-mastercard" style="color:red;"></i>
																			<i class="fa fa-cc-discover" style="color:orange;"></i>
																		</div>
																		<label for="cname">Name on Card</label>
																		<input type="text" id="cname" name="cardname" placeholder="">
																		<label for="ccnum">Credit card number</label>
																		<input type="text" id="ccnum" name="cardnumber" placeholder="">
																		<label for="expmonth">Exp Month</label>
																		<input type="text" id="expmonth" name="expmonth" placeholder="">
																		<div class="row">
																			<div class="col-50">
																				<label for="expyear">Exp Year</label>
																				<input type="text" id="expyear" name="expyear" placeholder="">
																			</div>
																			<div class="col-50">
																				<label for="cvv">CVV</label>
																				<input type="text" id="cvv" name="cvv" placeholder="">
																			</div>
																		</div>
																	</div>

																</div>


															</form>
														</div>
													</div>

												</div>
											</div>
										</li>
									</ul>
								</div>

								<div class="checkout_button trans_200"><a href="ticket.php">Confirm order</a></div>
							</div>
						</div>
					</div>
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




	.col-25 {
		-ms-flex: 25%; /* IE10 */
		flex: 25%;
	}

	.col-50 {
		-ms-flex: 50%; /* IE10 */
		flex: 50%;
	}

	.col-75 {
		-ms-flex: 75%; /* IE10 */
		flex: 75%;
	}

	.col-25,
	.col-50,
	.col-75 {
		padding: 0 16px;
	}



	input[type=text] {
		width: 100%;
		margin-bottom: 20px;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 3px;
	}

	label {
		margin-bottom: 10px;
		display: block;
	}

	.icon-container {
		margin-bottom: 20px;
		padding: 7px 0;
		font-size: 24px;
	}

	.btn {
		background-color: #4CAF50;
		color: white;
		padding: 12px;
		margin: 10px 0;
		border: none;
		width: 100%;
		border-radius: 3px;
		cursor: pointer;
		font-size: 17px;
	}

	.btn:hover {
		background-color: #45a049;
	}

	a {
		color: #2196F3;
	}

	hr {
		border: 1px solid lightgrey;
	}

	span.price {
		float: right;
		color: grey;
	}
	</style>


</body>
</html>
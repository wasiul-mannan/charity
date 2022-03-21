<?php
include("includes/db.php");
session_start();

?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Charity &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 text-left fh5co-link">
							<a href="#">FAQ</a>
							<a href="#">Forum</a>
							<a href="#">Contact</a>
						</div>
						<div class="col-md-6 col-sm-6 text-right fh5co-social">
							<a href="#" class="grow"><i class="icon-facebook2"></i></a>
							<a href="#" class="grow"><i class="icon-twitter2"></i></a>
							<a href="#" class="grow"><i class="icon-instagram2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Charity</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Get Involved</a>
									<ul class="fh5co-sub-menu">
										<li><a href="donate_page.php">Donate</a></li>
										<li><a href="volunteer.php">Volunteer</a></li>
									</ul>
								</li>
								<li class="active">
									<a href="fundraise.php" class="fh5co-sub-ddown">Fundraise</a>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>



			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/new.png);">
					<div class="desc animate-box">
						<h2> <strong>RAISING FUNDS</strong></h2>

						<span><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Donate Now</button></span>
					</div>
				</div>
			</div>

			<div id="fh5co-blog-section" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Read. Learn. Share</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row row-bottom-padded-md">
						<?php
						$total_amount = 0;
						$run_blogs = mysqli_query($con, "select * from funds ");
						while ($row_run_blogs = mysqli_fetch_array($run_blogs)) {
							$id = $row_run_blogs['id'];
						?>

							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/<?php echo $row_run_blogs['banner_path']; ?>" alt=""></a>
									<div class="blog-text">
										<div class="prod-title">
											<h3><a href=""><?php echo $row_run_blogs['title']; ?></a></h3>
											<span class="posted_by"><?php echo $row_run_blogs['date_created']; ?></span>
											<span class="comment"><a href=""><?php echo $row_run_blogs['date_created']; ?><i class="icon-bubble2"></i></a></span>
											<p><?php
												$id = $row_run_blogs['id'];
												$string = strip_tags($row_run_blogs['content']);
												if (strlen($string) > 500) {

													// truncate string
													$stringCut = substr($string, 0, 500);
													$endPoint = strrpos($stringCut, ' ');

													//if the string doesn't contain any space then it will cut without word basis.
													$string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
													$string .= "... <a href='fund_donate.php?id=$id'>Donate</a>";
												}
												echo $string;

												$amount=0;
												$run_f_amount = mysqli_query($con, "select * from donations where fund_id='$id' ");
												
												while ($row_run_f_amount = mysqli_fetch_array($run_f_amount)) {
													$amount = $amount + $row_run_f_amount['amount'];
													
												}

												$parcentage = $amount / 100000;
												?>
											</p>
											<p>

											<div class="skills" style="width: <?php echo $parcentage ?>%; background-color: #ff4119;"><?php echo $parcentage ?>%</div>
											</p>

										</div>
									</div>
								</div>
							</div>

							<div class="clearfix visible-sm-block"></div>

						<?php
						}
						?>
						<div class="row">
							<div class="col-md-4 col-md-offset-4 text-center animate-box">
								<a href="blog.php" class="btn btn-primary btn-lg">Our Blog</a>
							</div>
						</div>

					</div>
				</div>
				<!-- fh5co-blog-section -->


				<footer>
					<div id="footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center">
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter2"></i></a>
										<a href="#"><i class="icon-facebook2"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
										<a href="#"><i class="icon-dribbble2"></i></a>
										<a href="#"><i class="icon-youtube"></i></a>
									</p>
									<!-- <p>Copyright 2016 Free Html5 <a href="#">Charity</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</footer>


			</div>
			<!-- END fh5co-page -->

		</div>
		<!-- END fh5co-wrapper -->

		<!-- jQuery -->


		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/sticky.js"></script>

		<!-- Stellar -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>






		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Donate here</h4>
					</div>

					<form method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="form-group">
								<label for="pwd">Select Payment Method</label>
								<select rows="3" class="form-control" name="payment_method">
									<option value="Bkash">Bkash</option>
									<option value="Nagad">Nagad</option>
									<option value="Rocket">Rocket</option>
									<option value="Ucash">Ucash</option>
								</select>
							</div>

							<div class="form-group">
								<label for="pwd">Enter transaction mobile number</label>
								<input type="text" rows="3" class="form-control" name="mobile_number">
							</div>

							<div class="form-group">
								<label for="pwd">Enter TRXID</label>
								<input type="text" rows="3" class="form-control" name="trxid">
							</div>

							<div class="form-group">
								<label for="pwd">Enter Amount</label>
								<input type="text" rows="3" class="form-control" name="amount">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" name="save">Save changes</button>
						</div>
					</form>

					<?php
					if (isset($_POST['save'])) {

						$payment_method = $_POST['payment_method'];
						$mobile_number = $_POST['mobile_number'];
						$trxid = $_POST['trxid'];
						$amount = $_POST['amount'];

						if ($_SESSION['email'] != null &&  $_SESSION['password'] != null) {
							$volunteer_id = $_SESSION['volunteer_id'];
							$run_donation = mysqli_query($con, "insert into donations (payment_method,mobile_number,trxid,amount,volunteer_id) 
						values ('$payment_method','$mobile_number','$trxid','$amount','$volunteer_id')");
						} else {
							$run_donation = mysqli_query($con, "insert into donations (payment_method,mobile_number,trxid,amount) 
						values ('$payment_method','$mobile_number','$trxid','$amount')");
						}

						if ($run_donation) {
							echo "<script>alert('Donated successfully')</script>";
							echo "<script> window.open('index.php','_self')</script>";
						} else {
							echo '<script>alert("Try again")</script>';
						}
					}

					?>
				</div>
			</div>
		</div>









</body>

</html>
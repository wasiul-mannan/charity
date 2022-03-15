<?php
include("includes/db.php");session_start();

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
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Get Involved</a>
									<ul class="fh5co-sub-menu">
										<li><a href="donate_page.php">Donate</a></li>
										<li><a href="volunteer.php">Volunteer</a></li>
									</ul>
								</li>
								<li>
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
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5">

					<div class="slideshow-container">

						<div class="mySlides fade">
							<div class="numbertext">1 / 3</div>
							<img src="images/cover_bg_1.jpg" style="width:100%">

						</div>

						<div class="mySlides fade">
							<div class="numbertext">2 / 3</div>
							<img src="images/cover_bg_2.jpg" style="width:100%">

						</div>

						<div class="mySlides fade">
							<div class="numbertext">3 / 3</div>
							<img src="images/cover_bg_3.jpg" style="width:100%">

						</div>

					</div>
					<br>

					<div style="text-align:center">
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>

					<div class="desc animate-box">
						<h2><strong>Donate</strong> for the <strong>Poor Children</strong></h2>

						<span><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Donate Now</button></span>
						
					</div>
				</div>

			</div>
			<!-- end:header-top -->
			<div id="fh5co-features">
				<div class="container">
					<div class="row">
						<div class="col-md-4">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-profile-male"></i>
								</span>
								<div class="feature-copy">
									<h3>Become a volunteer</h3>
									<p>People choose to volunteer for a variety of reasons. For some it offers the chance to give something back to the community or make a difference to the people around them. For others it provides an opportunity to develop new skills or build on existing experience and knowledge.</p>
									<p><a href="#">Learn More</a></p>
								</div>
							</div>

						</div>

						<div class="col-md-4">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-happy"></i>
								</span>
								<div class="feature-copy">
									<h3>Happy Giving</h3>
									<p>Donating is a selfless act, so giving to charity will improve your self-esteem and self-worth. By donating money to charity, you will achieve a greater sense of satisfaction and growth as it feels good to help others and provide them with all the essential resources.</p>
									<p><a href="#">Learn More</a></p>
								</div>
							</div>

						</div>
						<div class="col-md-4">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-wallet"></i>
								</span>
								<div class="feature-copy">
									<h3>Donation</h3>
									<p>A donation is a gift for charity, humanitarian aid, or to benefit a cause. A donation may take various forms, including money, alms, services, or goods such as clothing, toys, food, or vehicles. A donation may satisfy medical needs such as blood or organs for transplant.</p>
									<p><a href="#">Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-feature-product" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-section">
							<h3>Giving is Virtue.</h3>
							<p>This all means that giving is a much more important element of happiness than receiving. Being able to give makes us feel like we're making a big impact on someone's life, encouraging us to do more good and uncover a different perspective of happiness.Donating money to charity, you will achieve a greater sense of satisfaction and growth as it feels good to help others and provide them with all the essential resources.</p>
						</div>
					</div>

					<div class="row row-bottom-padded-md">
						<div class="col-md-12 text-center animate-box">
							<p><img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						</div>
						<div class="col-md-6 text-center animate-box">
							<p><img src="images/cover_bg_2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						</div>
						<div class="col-md-6 text-center animate-box">
							<p><img src="images/cover_bg_3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="feature-text">
								<h3>Love</h3>
								<p>Love for Children Development Charitable Organization
									 is a nonprofit charitable and development organization.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-text">
								<h3>Compassion</h3>
								<p>Delivers children equity, independence, social inclusion,
									 mobility and self-esteem by funding and delivering equipment and services.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-text">
								<h3>Charity</h3>
								<p>A charitable organization is a nonprofit organization that seeks to advance some public benefit. 
									Public benefit includes a broad range of areas such as education, 
									poverty alleviation, scientific research, environment, diversity, religion, and health.</p>
							</div>
						</div>
					</div>


				</div>
			</div>


			<div id="fh5co-portfolio">
				<div class="container">

					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
							<h3>Our Gallery</h3>
							<p>This is the gallery of our children charity organization, 
								we are trying to capture the best moment of our kids
								.</p>
						</div>
					</div>


					<div class="row row-bottom-padded-md">
						<div class="col-md-12">
							<ul id="fh5co-portfolio-list">

								<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_1.jpg); ">
									<a href="#" class="color-3">
										<div class="case-studies-summary">
											<span>Give Love</span>
											<h2>Donation is caring</h2>
										</div>
									</a>
								</li>

								<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_2.jpg); ">
									<a href="#" class="color-4">
										<div class="case-studies-summary">
											<span>Give Love</span>
											<h2>Donation is caring</h2>
										</div>
									</a>
								</li>

								<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_3.jpg); ">
									<a href="#" class="color-5">
										<div class="case-studies-summary">
											<span>Give Love</span>
											<h2>Donation is caring</h2>
										</div>
									</a>
								</li>
								<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Gallery_4.jpg); ">
									<a href="#" class="color-6">
										<div class="case-studies-summary">
											<span>Give Love</span>
											<h2>Donation is caring</h2>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4 col-md-offset-4 text-center animate-box">
							<a href="#" class="btn btn-primary btn-lg">See Gallery</a>
						</div>
					</div>


				</div>
			</div>



			<div id="fh5co-content-section" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Our Leadership</h3>
							<p>Leadership is a more strategic process of giving that seeks to identify the root causes of systemic issues and make the world a better place by tackling societal problems at their roots.</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="fh5co-testimonial text-center animate-box">
								<figure>
									<img src="images/person_1.jpg" alt="user">
								</figure>
								<blockquote>
									<p>&ldquo;Mr. jhon deo is a CEO of our charity organization.He donates a lot of time and thousans dollar money also give his icrediable talet for making our organization.&rdquo;</p>
								</blockquote>
								<span>Jean Doe, XYZ Co.</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-testimonial text-center animate-box">
								<figure>
									<img src="images/person_2.jpg" alt="user">
								</figure>
								<blockquote>
									<p>&ldquo;Mr. jhon deo is a CEO of our charity organization.He donates a lot of time and thousans dollar money also give his icrediable talet for making our organization.&rdquo;</p>
								</blockquote>
								<span>John Doe, XYZ Co.</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-testimonial text-center animate-box">
								<figure>
									<img src="images/person_3.jpg" alt="user">
								</figure>
								<blockquote>
									<p>&ldquo;Mr. jhon deo is a CEO of our charity organization.He donates a lot of time and thousands dollar money also give his icrediable talet for making our organization.&rdquo;</p>
								</blockquote>
								<span>John Doe, XYZ Co.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- fh5co-content-section -->

			<div id="fh5co-services-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Our Projects. Support Us</h3>
							<p>This charity organization help in lots of different ways but the main ways are by providing direct help,giving information,or raising awareness of an issue..</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row text-center">
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-heart"></i></span>
								<h3>Education to every child            </h3>
								<p>Every child has the right to an education.Education is a powerful tool.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-heart"></i></span>
								<h3>Dedicating to helping kids</h3>
								<p>This is a commitment that you will, by the grace given to you.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-heart"></i></span>
								<h3>Make life easier for them</h3>
								<p>Making them feel good early on in life about helping others will build up their character.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-heart"></i></span>
								<h3>Promoting The Rights of Children  </h3>
								<p>. Child Rights are fundamental freedoms and the inherent rights of all human beings below the age of 18.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-heart"></i></span>
								<h3>Raise Fund for Healthy Food </h3>
								<p>Planning, researching, or preparing to ask for support,
									 along with related activities such as profile raising.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-heart"></i></span>
								<h3>Safe Zone for children  </h3>
								<p>Safe spaces are places where children can go to calm down, be alone,
									 and recharge so they are ready to learn.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- END What we do -->


			<div id="fh5co-blog-section" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Recent From Blog</h3>
							<p>This is the recent blog of our charity organazation.we observed and celebrated diffrent occasion.</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<a href="#"><img class="img-responsive" src="images/giving.jpg" alt=""></a>
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="" #>Giving food for the children in rural areas</a></h3>
										<span class="posted_by">Sep. 15th</span>
										<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
										<p>Recently we visited different rural areas in our country and we try to giving food for the children and making smile on their face.</p>
										<p><a href="#">Learn More...</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<a href="#"><img class="img-responsive" src="images/health.png" alt=""></a>
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="" #>Medical Mission for the children</a></h3>
										<span class="posted_by"> january 12</span>
										<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
										<p>We started medical mission for our children and providing individual telemedicine consultations and implementing education programs also.</p>
										<p><a href="#">Learn More...</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<a href="#"><img class="img-responsive" src="images/tree.jpg" alt=""></a>
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="" #>Tree Plantation for saving the nature</a></h3>
										<span class="posted_by"> june 22</span>
										<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
										<p>Tree plantation is also the remarkable work of our charity organization.Everyone can join in this program and our volunteers helps us.</p>
										<p><a href="#">Learn More...</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-md-block"></div>
					</div>

					<div class="row">
						<div class="col-md-4 col-md-offset-4 text-center animate-box">
							<a href="#" class="btn btn-primary btn-lg">Our Blog</a>
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
								<!-- <p>Copyright 2016 Free Html5 <a href="#">Charity</a>. All Rights Reserved. <br>Made with
									<i class="icon-heart3"></i> by <a href="http://freehtml5.co/"
										target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/"
										target="_blank">Unsplash</a>
								</p> -->
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









	<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Add Notes</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">


					<div class="form-group">
						<label for="pwd">Select Payment Method</label>
						<select rows="3" class="form-control" id="payment_method" name="payment_method">
							<option value="Bkash">Bkash</option>
							<option value="Nagad">Nagad</option>
							<option value="Rocket">Rocket</option>
							<option value="Ucash">Ucash</option>
						</select>
					</div>

					<div class="form-group">
						<label for="pwd">Enter transaction mobile number</label>
						<input type="text" rows="3" class="form-control" id="mobile_number" name="mobile_number">
					</div>

					<div class="form-group">
						<label for="pwd">Enter TRXID</label>
						<input type="text" rows="3" class="form-control" id="trxid" name="trxid">
					</div>

					<div class="form-group">
						<label for="pwd">Enter Amount</label>
						<input type="text" rows="3" class="form-control" id="amount" name="amount">
					</div>


					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="add_data" class="btn btn-primary" value="Add">Add</button>
				</div>
			</div>
		</div>
	</div>






	<!-- Modal -->
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
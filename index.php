<?php
include_once "connection.php";
$con = OpenCon();

if(empty($_GET)) {
	$msg = " ";
}else{
	$msg = $_GET['result'];
}

?>

<?php  include_once 'inc/head.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Apna Prachar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

	<link rel="stylesheet" type="text/css" href="icomoon/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<!-- <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"> -->
	<!-- <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css"> -->

	

	<script src="js/buy_now.js"></script>
</head>
<body>




	<?php include_once 'inc/header.php'; ?>
	
	<section>
		<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/first.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/second.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/third.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/fourth.jpg" alt="fourth slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/fifth.jpg" alt="fifth slide">
				</div>
				
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<section class="top-banner">
		<a href="package_form.php?price=999" >
			<h5 class="mb-0">30 posters at only <strike >&#8377; 7999</strike> &#8377;999  - Festival Pack | hurry up</h5>
		</a>
		<span class="h6 btn btn-danger btn-sm mb-0 ml-3">Click Here</span>
	</section>


	<section class="banner">
		<div class="container">
			<?php 
			if($msg == "Registered Successfully|" || $msg == "Login Successfully!" || $msg == 'Successfully saved!'){
				print '<h2 class="text-success" style="text-align: center;margin-bottom:1rem">'.$msg.'</h2>';
			}else{
				print '<h2 class="text-danger" style="text-align: center;margin-bottom:1rem"">'.$msg.'</h2>';
			}
			?>
			<div class="row">
				<div class="col-md p-0 pb-5">
					<?php 
					if(isset($_SESSION['message'])){ 
						if($_SESSION['message'] == "Successfully Saved!" || $_SESSION['message'] == "Successfully Booked your package!"){ ?>
							<p class="text-success text-center"><?php  echo $_SESSION['message'];  ?></p>
						<?php }else{ ?>
							<p class="text-danger text-center"><?php  echo $_SESSION['message'];  ?></p>
						<?php } ?>
						<?php unset($_SESSION['message']);
					}
					?>
				</div>
			</div>
			
			<div class="row">

				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="graphic_design.php">
						<span class="icon-display"></span>	
						<p class="mt-3">Graphic Design</p>
					</a>
				</div>
				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="video.php">
						<span class="icon-file-video"></span>
						<p class="mt-3">Video</p>
					</a>
				</div>
				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="message_call.php">
						<span class="icon-mail4"></span>	
						<p class="mt-3">Messages/Calls</p>
					</a>
				</div>
				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="advertisement.php">
						<span class="icon-bullhorn">	</span>	
						<p class="mt-3">Advertisment</p>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="celebrity.php">
						<span class="icon-film"></span>
						<p class="mt-3 ">Celebrity Shorts</p>
					</a>
				</div>
				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="election_material.php">
						<span class="icon-newspaper"></span>	
						<p class="mt-3 ">Election Materials</p>
					</a>
				</div>
				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="election_management.php">
						<span class="icon-nature_people"></span>
						<p class="mt-3 ">Election Management</p>
					</a>
				</div>
				<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6 text-center mb-5">
					<a href="webdevelopment.php">
						<span class="icon-embed2"></span>	
						<p class="mt-3 ">Web/App Developments</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="our-packages py-5">
	<div class="container">
		<h2 class="text-center mb-5">Our Packages</h2>
		<!-- <div class="row">
			<div class="col-md mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3>1999/-</h3>
					</div>

					<div class="card-body ">
						<p>4 pages</p>
						<p>Mobile Responsive</p>
						<p>Slider</p>
						<p>Contact Us Form</p>
						<p>Social Media Integration</p>
						<p>5 Revision</p>
						<a href="" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>

			<div class="col-md mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3>2999/-</h3>
					</div>

					<div class="card-body ">
						<p>7 pages</p>
						<p>Mobile Responsive</p>
						<p>Slider</p>
						<p>Contact Us Form</p>
						<p>Social Media Integration</p>
						<p>5 Revision</p>
						<a href="" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>

			<div class="col-md mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3>4999/-</h3>
					</div>

					<div class="card-body ">
						<p>10 pages</p>
						<p>Mobile Responsive</p>
						<p>Slider</p>
						<p>Contact Us Form</p>
						<p>Social Media Integration</p>
						<p>5 Revision</p>
						<a href="" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>

			<div class="col-md mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3>9999/-</h3>
					</div>

					<div class="card-body ">
						<p>15 pages</p>
						<p>Mobile Responsive</p>
						<p>Slider</p>
						<p>Basic Admin Panel</p>
						<p>Contact Us Form</p>
						<p>Social Media Integration</p>
						<p>7 Revision</p>
						<a href="" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>
		</div> -->

		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg col-xl mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3 class="mb-0">&#8377;999/y</h3>
						<p class="mb-0">Normally <strike>&#8377;7999/y</strike></p>
					</div>

					<div class="card-body ">
						<p>30 Facebook Posters</p>
						<p>Festial Pack</p>
						<p>Calendar Year Pack</p>
					</div>
					<div class="card-footer">
						<a href="package_form.php?price=999&service_for=facebook" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-lg col-xl mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3 class="mb-0">&#8377;2999/y</h3>
						<p class="mb-0">Normally <strike>&#8377;12999/y</strike></p>
					</div>

					<div class="card-body ">
						<p>50 Facebook Posters</p>
						<p>Wth Insagram & Twitter Sizes</p>
						<p>Free Profile Picture & Cover Picutre (Insatgram,Facebook and Twitter)</p>
					</div>
					<div class="card-footer">
						<a href="package_form.php?price=2999&service_for=facebook" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-lg col-xl mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3 class="mb-0">&#8377;2999</h3>
						<p class="mb-0">Normally <strike>&#8377;10999</strike></p>
					</div>

					<div class="card-body ">
						<p>5 pages</p>
						<p>Mobile Responsive</p>
						<p>Slider</p>
						<p>Login</p>
						<p>Signup</p>
						<p>Contact Us Form</p>
					</div>
					<div class="card-footer">
						<a href="package_form.php?price=2999&service_for=youtube" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-lg col-xl mb-3">
				<div class="card text-center">
					<div class="card-header">
						<h3 class="mb-0">&#8377;9999</h3>
						<p class="mb-0">Normally <strike>&#8377;20999</strike></p>
					</div>

					<div class="card-body ">
						<p>15 pages</p>
						<p>Mobile Responsive</p>
						<p>Slider</p>
						<p>Basic Admin Panel</p>
						<p>Contact Us Form</p>
						<p>Social Media Integration</p>
						<p>7 Revision</p>
					</div>
					<div class="card-footer">
						<a href="package_form.php?price=2999&service_for=youtube" class="btn btn-primary mt-2">BUY NOW</a>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="row">
			<div class="col-md text-center mt-4">
				<a href="package.php" class="btn btn-primary">MORE PACKAGES</a>
			</div>
		</div>
	</div> -->

</section>



<section class="our-services">
	<div class="container py-5">
		<h2 class="text-center">Our Services</h2>
		<p class="text-center pb-3">We Provides Best Services At Resionable Price</p>
		<div class="row">
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="graphic_design.php">
					<!-- <i class="fab fa-facebook-f fa-2x"></i> -->
					<span class="icon-facebook fa-2x">	</span>	
					<p>Facebook Graphics Design</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="graphic_design.php">
					<!-- <i class="fab fa-instagram fa-2x"></i> -->
					<span class="icon-instagram fa-2x"></span>	
					<p>Instagram Graphics Design</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="graphic_design.php">
					<!-- <i class="fab fa-twitter fa-2x"></i> -->	
					<span class="icon-twitter fa-2x"></span>
					<p>Twitter Graphic Design</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="graphic_design.php">
					<!-- <i class="fab fa-youtube fa-2x"></i> -->
					<span class="icon-youtube fa-2x"></span>	
					<p>Youtube Graphic Design</p>
				</a>
			</div>

			
		</div>

		<div class="row">
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="video.php">
					<!-- <i class="fas fa-film fa-2x"></i>	 -->
					<span class="icon-film fa-2x"></span>
					<p>Documentary Video</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="">
					<!-- <i class="fas fa-images fa-2x"></i> -->
					<span class="icon-images fa-2x"></span>
					<p>Photoshoot </p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="video.php">
					<!-- <i class="fas fa-file-video fa-2x"></i>	 -->
					<span class="icon-file-video fa-2x"></span>
					<p>Shorts Video</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="message_call.php">
					<!-- <i class="fab fa-whatsapp fa-2x"></i> -->
					<span class="icon-whatsapp fa-2x"></span>	
					<p>Bulk Whatsapp Messages</p>
				</a>
			</div>			
		</div>

		<div class="row">
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="message_call.php">
					<!-- <i class="fas fa-microphone-alt fa-2x"></i> -->
					<span class="icon-mic fa-2x"></span>	
					<p>Bulk Voice Messages</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="message_call.php">
					<!-- <i class="fas fa-phone-volume fa-2x"></i> -->
					<span class="icon-phone fa-2x"></span>	
					<p>Bulk Voice Calls</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="advertisement.php">
					<!-- <i class="fab fa-facebook fa-2x"></i> -->
					<span class="icon-facebook fa-2x"></span>	
					<p>Facebook Ad.</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="advertisement.php">
					<!-- <i class="fab fa-instagram  fa-2x"></i> -->
					<span class="icon-instagram fa-2x"></span>
					<p>Instagram Ad</p>
				</a>
			</div>
			
		</div>
		<div class="row">
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="advertisement.php">
					<!-- <i class="fab fa-youtube fa-2x"></i> -->
					<span class="icon-youtube fa-2x"></span>	
					<p>Youtube Ad.</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="advertisement.php">
					<!-- <i class="fas fa-ad fa-2x"></i> -->
					<span class="icon-newspaper fa-2x"></span>
					<p>News Channel Ad</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="celebrity.php">
					<!-- <i class="fas fa-play-circle fa-2x"></i>	 -->
					<span class="icon-file-video fa-2x"></span>
					<p>Celebrity Shorts</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="#">
					<!-- <i class="fas fa-poll fa-2x"></i> -->
					<span class="icon-address-book fa-2x"></span>	
					<p>Survey For Your Area</p>
				</a>
			</div>
			
			
		</div>
		<div class="row">
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="#">
					<!-- <i class="fas fa-book-open fa-2x"></i>	 -->
					<span class="icon-notebook-list fa-2x"></span>
					<p>Plan Election Strategy</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="#">
					<!-- <i class="fas fa-address-card fa-2x"></i> -->
					<span class="icon-file-text2 fa-2x"></span>
					<p>Political Resume</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="#">
					<!-- <i class="fas fa-users fa-2x"></i>	 -->
					<span class="icon-users fa-2x"></span>
					<p>Crowd Management</p>
				</a>
			</div>

			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="#">
					<!-- <i class="fas fa-bullhorn fa-2x"></i> -->
					<span class="icon-bullhorn fa-2x"></span>	
					<p>Design Slogan</p>
				</a>
			</div>
			
		</div>
		<div class="row">
			
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="#">
					<!-- <i class="fas fa-flag fa-2x"></i>	 -->
					<span class="icon-flag fa-2x"></span>
					<p>Print Banner</p>
				</a>
			</div>

			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="#">
					<!-- <i class="fas fa-clipboard fa-2x"></i> -->
					<span class="icon-notebook-list fa-2x"></span>	
					<p>Election Material</p>
				</a>
			</div>
			<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
				<a href="webdevelopment.php">
					<!-- <i class="fas fa-code fa-2x"></i> -->
					<span class="icon-embed2 fa-2x"></span>	
					<p>Web & App Develpment</p>
				</a>
			</div>				
		</div>
	</div>
</section>


























<section class="about-us">
	<div class="container ">
		<h2 class="text-center py-3">About Us</h2>
		<div class="row">
			<div class="col-md-6">
				<p class="text-justify">Let Apna Prachar handle all of your digital hurdles like political campaign, advertisement, graphics designing, election management, promotional messages & calls, videos, celebrity shorts, election materials, and web development. </p>

				<a href="about.php" class="btn btn-primary">Read More..</a>

			</div>
			<div class="col-md-6 img-part">
				<img src="images/team.svg">
			</div>
		</div>
	</div>
</section>



<section class="what_next">
	<div class="container ">
		<h2 class="text-center py-3">What's Next</h2>
		<h5 class="mb-3">Upcoming Elections</h5>
		<div class="row">
			<div class="col-md-6">
				<div class="what_next_content">
					<div class="left_part">
						<h6>Feb-March</h6>
						<p>2022</p>
					</div>
					<div class="right_part">
						<h6>Delhi Election</h6>
						<h6>Delhi MCD Election 2022</h6>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="what_next_content">
					<div class="left_part">
						<h6>Feb-March</h6>
						<p>2022</p>
					</div>
					<div class="right_part">
						<h6>UP Election</h6>
						<h6>UP Assembly Election 2022</h6>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="what_next_content">
					<div class="left_part">
						<h6>Feb-March</h6>
						<p>2022</p>
					</div>
					<div class="right_part">
						<h6>Punjab Election</h6>
						<h6>Punjab Assembly Election 2022</h6>
					</div>
				</div>
			</div>

			<div class="col-md-6 ">
				<div class="what_next_content">
					<div class="left_part">
						<h6>Feb-March</h6>
						<p>2022</p>
					</div>
					<div class="right_part">
						<h6>Goa Election</h6>
						<h6>Goa Assembly Election 2022</h6>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-md-6 what_next_content">
				<div class="left_part">
					<h6>Feb-March</h6>
					<p>2022</p>
				</div>
				<div class="right_part">
					<h6>Delhi Election</h6>
					<h6>Delhi MCD ( Municipal Corporation of Delhi )Election 2022</h6>
				</div>
			</div>
			<div class="col-md-6 what_next_content">
				<div class="left_part">
					<h6>Feb-March</h6>
					<p>2022</p>
				</div>
				<div class="right_part">
					<h6>Uttar Pradesh Election</h6>
					<h6>Uttar Pradesh Assembly Election 2022</h6>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 what_next_content">
				<div class="left_part">
					<h6>Feb-March</h6>
					<p>2022</p>
				</div>
				<div class="right_part">
					<h6>Goa Election</h6>
					<h6>Goa Legislative Assembly Election 2022</h6>
				</div>
			</div>

			<div class="col-md-6 what_next_content">
				<div class="left_part">
					<h6>Feb-March</h6>
					<p>2022</p>
				</div>
				<div class="right_part">
					<h6>Punjab Election</h6>
					<h6>Punjab Legislative Assembly Election 2022</h6>
				</div>
			</div>
		</div> -->
	</div>
</section>





<div class="modal fade h-100" id="lightbox" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/101123/close.png" />
				</button>
			</div>
			<div class="modal-body">
				<div id="lightbox-gallery" class="carousel slide" data-ride="carousel" data-interval="false">

					<ol class="carousel-indicators">
						<li data-target="#lightbox-gallery" data-slide-to="0"></li>
						<li data-target="#lightbox-gallery" data-slide-to="1"></li>
						<li data-target="#lightbox-gallery" data-slide-to="2"></li>
						<li data-target="#lightbox-gallery" data-slide-to="3"></li>
						<li data-target="#lightbox-gallery" data-slide-to="4"></li>
						<li data-target="#lightbox-gallery" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item">
							<img class="d-block w-100" src="http://placehold.it/1400x920?text=1">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="http://placehold.it/1400x920?text=2">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="http://placehold.it/1400x920?text=3">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="http://placehold.it/1400x920?text=4">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="http://placehold.it/1400x920?text=5">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="http://placehold.it/1400x920?text=6">
						</div>
					</div>
				</div>

				<a class="carousel-control-prev" href="#lightbox-gallery" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#lightbox-gallery" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>



<section>
	
</section>








<?php include_once 'inc/footer.php'; ?>



<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$("#testimonial-slider").owlCarousel({
			items:2,
			itemsDesktop:[1000,2],
			itemsDesktopSmall:[979,2],
			itemsTablet:[768,1],
			pagination:false,
			navigation:true,
			navigationText:["",""],
			autoPlay:true
		});
	});

</script>







</body>
</html>
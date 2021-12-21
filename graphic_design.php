<?php
if(empty($_GET)) {
	$msg = " ";
}else{
	$msg = $_GET['result'];
}

?>

<?php include_once 'inc/head.php';  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Graphic Design</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/graphic_design.css">
	<script src="js/buy_now.js"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

	<?php include_once 'inc/header.php'; ?>
	<?php include_once 'inc/navbar.php'; ?>

	<section class="garphics_banner">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h2>Graphics Design</h2>
					<p>Welcome To The World Of Graphics Design</p>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Graphic Design</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="garphics_content">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<?php 
					if($msg == "Successfully saved!"){
						print '<h2 class="text-success" style="text-align: center">'.$msg.'</h2>';
					}else{
						print '<h2 class="text-danger" style="text-align: center">'.$msg.'</h2>';
					}
					?>
					<ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Facebook</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Instagram</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Youtube</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">Twitter</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="Linked" data-toggle="tab" href="#linked" role="tab" aria-controls="linked" aria-selected="false">Linked In</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Facebook Graphic Design</h5>
									<a href="#form" class="btn btn-dark btn-sm float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Facebook Graphics Design</p>
									<p><span><i class="far fa-check-circle"></i></span> Facebook Profile Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Facebook Cover Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Facebook Graphic Post</p>
								</div>
							</div>

							<div class="card mb-3 facebook_package">
								<div class="card-header">
									<h5>Facebook Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>999/-</h5>
													<p class="mb-2"> 30 Facebook Posters <br>
														1 Free Profile Picture
													</p>
													<a href="package_form.php?price=999&service_for=facebook" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>1999/-</h5>
													<p class="mb-2">60 Facebook Posters <br>
													1 Free Profile Picture</p>

													<a href="package_form.php?price=1999&service_for=facebook" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>2999/-</h5>
													<p class="mb-2">100 Facebook Posters <br>1 Free Profile Picture</p>
													<a href="package_form.php?price=2999&service_for=facebook" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>4999/-</h5>
													<p class="mb-2">150 Facebook Posters <br>1 Free Profile Picture</p>
													<a href="package_form.php?price=4999&service_for=facebook" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card" id="form">
								<div class="card-header">
									<h5 class="mb-0">Book Services</h5>
								</div>
								<div class="card-body">
									<form action="services.php" method="post" enctype="multipart/form-data">
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " name="name" id="service_name" placeholder="Name" required>
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="tel" class="form-control " name="phone" id="service_mobile" placeholder="Mobile" required>
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="email" class="form-control " name="email" id="service_email" placeholder="Enter Email">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Which Party You Belong*</label>
												<input type="text" class="form-control " name="belong" id="service_belong" placeholder="First name" required>
											</div>
											<div class="col-md mb-3">
												<label>Select Services*</label>
												<select class="form-control " id="service_package" name="price" required>
													<option value="50">Facebook Profile Picture</option>
													<option value="99">Facebook Cover Picture</option>
													<option value="89">Facebook Post</option>
													<option value="200">All of the Above</option>

												</select>
											</div>
											<div class="col-md mb-3">
												<label>Occasion</label>
												<input type="text" class="form-control" name="occasion" id="service_occasion" placeholder="Last name">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Upload Your Pictures*</label>
												<input type="file" class="form-control " name="photo" id="service_pictures" placeholder="First name" required>
											</div>

											<div class="col-md mb-3">
												<label>Upload Belogning Pictures*</label>
												<input type="file" name="pictures" class="form-control-file" id="Upload" required="">
												<span id="dynamictag"></span>
												<a type="button" class="btn btn- btn-sm font-weight-bold" id="addmore">Add More +</a>
											</div>

										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description*</label>
												<textarea class="form-control" name="desc" id="service_desc" rows="3"></textarea>
											</div>
										</div>
										<input type="hidden" name="service_for" value="facebook">
										<div class="form-row">
											<div class="col-md mb-3">
												<button type="submit" class="btn btn-dark float-right">SUBMIT</button>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Instagram Graphic Design</h5>
									<a href="#form1" class="btn btn-dark float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Insatagram Graphics Design</p>
									<p><span><i class="far fa-check-circle"></i></span> Instagram Profile Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Instagram Cover Picture</p>
									<p><span><i class="far fa-check-circle"></i></span> Instagram Graphic Post</p>
								</div>
							</div>


							<div class="card mb-3 instagram_package">
								<div class="card-header">
									<h5>Instagram Packeges</h5>
								</div>
								<div class="card-body p-4">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>999/-</h5>
													<p class="mb-2">30 Instagram Posters <br>
														1 Free Profile Picture
													</p>
													<a href="package_form.php?price=999&service_for=instagram" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>1999/-</h5>
													<p class="mb-2">60 Instagram Posters <br>
													1 Free Profile Picture</p>
													<a href="package_form.php?price=1999&service_for=instagram" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>2999/-</h5>
													<p class="mb-2">100 Instagram Posters <br>1 Free Profile Picture</p>
													<a href="package_form.php?price=2999&service_for=instagram" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6  mb-2">
											<div class="card">
												<div class="card-body text-center">
													<h5>4999/-</h5>
													<p class="mb-2">150 Instagram Posters <br>1 Free Profile Picture</p>
													<a href="package_form.php?price=4999&service_for=instagram" class="btn btn-primary mt-2">BUY NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="card" id="form1">
								<div class="card-header">
									<h5 class="mb-0">Book Services</h5>

								</div>
								<div class="card-body">

									<form action="services.php" method="post" enctype="multipart/form-data">
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " name="name" id="service_name" placeholder="First name" required>
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="tel" class="form-control " name="phone" id="service_mobile" placeholder="Last name" required>
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="email" class="form-control " name="email" id="service_email" placeholder="Last name">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Which Party You Belong*</label>
												<input type="text" class="form-control " name="belong" id="service_belong" placeholder="First name" required>
											</div>
											<div class="col-md mb-3">
												<label>Select Services*</label>
												<select class="form-control " id="service_package" name="price" required>
													<option value="50">Facebook Profile Picture</option>
													<option value="99">Facebook Cover Picture</option>
													<option value="89">Facebook Post</option>
													<option value="200">All of the Above</option>

												</select>
											</div>
											<div class="col-md mb-3">
												<label>Occasion</label>
												<input type="text" class="form-control" name="occasion" id="service_occasion" placeholder="Last name">
											</div>
										</div>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Upload Your Pictures*</label>
												<input type="file" class="form-control " name="photo" id="service_pictures" placeholder="First name" required>
											</div>

											<div class="col-md mb-3">
												<label>Upload Belogning Pictures*</label>
												<input type="file" name="pictures" class="form-control-file" id="Upload" required="">
												<span id="dynamictag1"></span>
												<a type="button" class="btn btn- btn-sm font-weight-bold" id="addmore1">Add More +</a>
											</div>

										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description*</label>
												<textarea class="form-control" name="desc" id="service_desc" rows="3"></textarea>
											</div>
										</div>
										<input type="hidden" name="service_for" value="instagram">
										<div class="form-row">
											<div class="col-md mb-3">
												<button type="submit" class="btn btn-dark float-right">SUBMIT</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="mb-0">Youtube Graphic Design</h5>
									<a href="#form2" class="btn btn-dark float-right">BOOK NOW</a>
								</div>
								<div class="card-body">
									<p>Service Provided In Insatagram Graphics Design</p>
									<p><span><i class="far fa-check-circle"></i></span> Youtube Thumbnail</p>
									<p><span><i class="far fa-check-circle"></i></span> Youtube Profile Picture</p>
									<!-- <p><span><i class="far fa-check-circle"></i></span> Youtube Cover Picture</p>
										<p><span><i class="far fa-check-circle"></i></span> Youtube Graphic Post</p> -->
									</div>
								</div>





								<div class="card" id="form2">
									<div class="card-header">
										<h5 class="mb-0">Book Services</h5>

									</div>
									<div class="card-body">

										<form action="services.php" method="post" enctype="multipart/form-data">
											<div class="form-row">
												<div class="col-md mb-3">
													<label>Name*</label>
													<input type="text" class="form-control " name="name" id="service_name" placeholder="First name" required>
												</div>
												<div class="col-md mb-3">
													<label>Mobile*</label>
													<input type="tel" class="form-control " name="phone" id="service_mobile" placeholder="Last name" required>
												</div>
												<div class="col-md mb-3">
													<label>Email Id*</label>
													<input type="email" class="form-control " name="email" id="service_email" placeholder="Last name">
												</div>
											</div>

											<div class="form-row">
												<div class="col-md mb-3">
													<label>Which Party You Belong*</label>
													<input type="text" class="form-control " name="belong" id="service_belong" placeholder="First name" required>
												</div>
												<div class="col-md mb-3">
													<label>Select Services*</label>
													<select class="form-control " id="service_package" name="price" required>
														<option value="50">Youtube Profile Picture</option>
														<option value="99">youtube Cover Picture</option>
														<option value="89">Youtube Post</option>
														<option value="200">All of the Above</option>

													</select>
												</div>
												<div class="col-md mb-3">
													<label>Occasion</label>
													<input type="text" class="form-control" name="occasion" id="service_occasion" placeholder="Last name">
												</div>
											</div>
											<div class="form-row">
												<div class="col-md mb-3">
													<label>Upload Your Pictures*</label>
													<input type="file" class="form-control " name="photo" id="service_pictures" placeholder="First name" required>
												</div>

												<div class="col-md mb-3">
													<label>Upload Belogning Pictures*</label>
													<input type="file" name="pictures" class="form-control-file" id="Upload" required="">
													<span id="dynamictag2"></span>
													<a type="button" class="btn btn- btn-sm font-weight-bold" id="addmore2">Add More +</a>
												</div>

											</div>

											<div class="form-row">
												<div class="col-md mb-4">
													<label>Write Description*</label>
													<textarea class="form-control" name="desc" id="service_desc" rows="3"></textarea>
												</div>
											</div>
											<input type="hidden" name="service_for" value="youtube">
											<div class="form-row">
												<div class="col-md mb-3">
													<button type="submit" class="btn btn-dark float-right">SUBMIT</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="mb-0">Twitter Graphic Design</h5>
										<a href="#form3" class="btn btn-dark float-right">BOOK NOW</a>
									</div>
									<div class="card-body">
										<p>Service Provided In Insatagram Graphics Design</p>
										<p><span><i class="far fa-check-circle"></i></span> Twitter Profile Picture</p>
										<!-- <p><span><i class="far fa-check-circle"></i></span> Twitter Cover Picture</p> -->
										<p><span><i class="far fa-check-circle"></i></span> Twitter Graphic Post</p>
									</div>
								</div>


								<div class="card mb-3 twitter_package">
									<div class="card-header">
										<h5>Twitter Packeges</h5>
									</div>
									<div class="card-body p-4">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>999/-</h5>
														<p class="mb-2">30 Twitter Posters <br>
															1 Free Profile Picture
														</p>
														<a href="package_form.php?price=999&service_for=twitter" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>1999/-</h5>
														<p class="mb-2">60 Twitter Posters <br>
														1 Free Profile Picture</p>
														<a href="package_form.php?price=1999&service_for=twitter" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>2999/-</h5>
														<p class="mb-2">100 Twitter Posters <br>1 Free Profile Picture</p>
														<a href="package_form.php?price=2999&service_for=twitter" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>4999/-</h5>
														<p class="mb-2">150 Twitter Posters <br>1 Free Profile Picture</p>
														<a href="package_form.php?price=4999&service_for=twitter" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>



								<div class="card" id="form3">
									<div class="card-header">
										<h5 class="mb-0">Book Services</h5>

									</div>
									<div class="card-body">

										<form action="services.php" method="post" enctype="multipart/form-data">
											<div class="form-row">
												<div class="col-md mb-3">
													<label>Name*</label>
													<input type="text" class="form-control " name="name" id="service_name" placeholder="First name" required>
												</div>
												<div class="col-md mb-3">
													<label>Mobile*</label>
													<input type="tel" class="form-control " name="phone" id="service_mobile" placeholder="Last name" required>
												</div>
												<div class="col-md mb-3">
													<label>Email Id*</label>
													<input type="email" class="form-control " name="email" id="service_email" placeholder="Last name">
												</div>
											</div>

											<div class="form-row">
												<div class="col-md mb-3">
													<label>Which Party You Belong*</label>
													<input type="text" class="form-control " name="belong" id="service_belong" placeholder="First name" required>
												</div>
												<div class="col-md mb-3">
													<label>Select Services*</label>
													<select class="form-control " id="service_package" name="price" required>
														<option value="50">Facebook Profile Picture</option>
														<option value="99">Facebook Cover Picture</option>
														<option value="89">Facebook Post</option>
														<option value="200">All of the Above</option>

													</select>
												</div>
												<div class="col-md mb-3">
													<label>Occasion</label>
													<input type="text" class="form-control" name="occasion" id="service_occasion" placeholder="Last name">
												</div>
											</div>
											<div class="form-row">
												<div class="col-md mb-3">
													<label>Upload Your Pictures*</label>
													<input type="file" class="form-control " name="photo" id="service_pictures" placeholder="First name" required>
												</div>

												<div class="col-md mb-3">
													<label>Upload Belogning Pictures*</label>
													<input type="file" name="pictures" class="form-control-file" id="Upload" required="">
													<span id="dynamictag3"></span>
													<a type="button" class="btn btn- btn-sm font-weight-bold" id="addmore3">Add More +</a>
												</div>

											</div>

											<div class="form-row">
												<div class="col-md mb-4">
													<label>Write Description*</label>
													<textarea class="form-control" name="desc" id="service_desc" rows="3"></textarea>
												</div>
											</div>
											<input type="hidden" name="service_for" value="twitter">
											<div class="form-row">
												<div class="col-md mb-3">
													<button type="submit" class="btn btn-dark float-right">SUBMIT</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="linked" role="tabpanel" aria-labelledby="linked-tab">
								<div class="card mb-3">
									<div class="card-header">
										<h5 class="mb-0">Linked In Graphic Design</h5>
										<a href="#form4" class="btn btn-dark float-right">BOOK NOW</a>
									</div>
									<div class="card-body">
										<p>Service Provided In Insatagram Graphics Design</p>
										<ul class="nav flex-column">
											<p><i class="far fa-check-circle"></i></span> LInked In Profile Picture</p>
											<p><i class="far fa-check-circle"></i></span> LInked In Cover Picture</p>
											<p><i class="far fa-check-circle"></i></span> LInked In Graphic Post</p>

										</ul>
									</div>
								</div>


								<div class="card mb-3 linkedin_package">
									<div class="card-header">
										<h5>Linked In Packeges</h5>
									</div>
									<div class="card-body p-4">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>999/-</h5>
														<p class="mb-2">30 Linked in Posters <br>
															1 Free Profile Picture
														</p>
														<a href="package_form.php?price=999&service_for=linkedin" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>1999/-</h5>
														<p class="mb-2">60 Linked in Posters <br>
														1 Free Profile Picture</p>
														<a href="package_form.php?price=1999&service_for=linkedin" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>2999/-</h5>
														<p class="mb-2">100 Linked in Posters <br>1 Free Profile Picture</p>
														<a href="package_form.php?price=2999&service_for=linkedin" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-6  mb-2">
												<div class="card">
													<div class="card-body text-center">
														<h5>4999/-</h5>
														<p class="mb-2">150 Linked in Posters <br>1 Free Profile Picture</p>
														<a href="package_form.php?price=4999&service_for=linkedin" class="btn btn-primary mt-2">BUY NOW</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>



								<div class="card" id="form4">
									<div class="card-header">
										<h5 class="mb-0">Book Services</h5>

									</div>
									<div class="card-body">

										<form action="services.php" method="post" enctype="multipart/form-data">
											<div class="form-row">
												<div class="col-md mb-3">
													<label>Name*</label>
													<input type="text" class="form-control " name="name" id="service_name" placeholder="First name" required>
												</div>
												<div class="col-md mb-3">
													<label>Mobile*</label>
													<input type="tel" class="form-control " name="phone" id="service_mobile" placeholder="Last name" required>
												</div>
												<div class="col-md mb-3">
													<label>Email Id*</label>
													<input type="email" class="form-control " name="email" id="service_email" placeholder="Last name">
												</div>
											</div>

											<div class="form-row">
												<div class="col-md mb-3">
													<label>Which Party You Belong*</label>
													<input type="text" class="form-control " name="belong" id="service_belong" placeholder="First name" required>
												</div>
												<div class="col-md mb-3">
													<label>Select Services*</label>
													<select class="form-control " id="service_package" name="price" required>
														<option value="50">Facebook Profile Picture</option>
														<option value="99">Facebook Cover Picture</option>
														<option value="89">Facebook Post</option>
														<option value="200">All of the Above</option>

													</select>
												</div>
												<div class="col-md mb-3">
													<label>Occasion</label>
													<input type="text" class="form-control" name="occasion" id="service_occasion" placeholder="Last name">
												</div>
											</div>
											<div class="form-row">
												<div class="col-md mb-3">
													<label>Upload Your Pictures*</label>
													<input type="file" class="form-control " name="photo" id="service_pictures" placeholder="First name" required>
												</div>

												<div class="col-md mb-3">
													<label>Upload Belogning Pictures*</label>
													<input type="file" name="pictures" class="form-control-file" id="Upload" required="">
													<span id="dynamictag4"></span>
													<a type="button" class="btn btn- btn-sm font-weight-bold" id="addmore4">Add More +</a>
												</div>

											</div>

											<div class="form-row">
												<div class="col-md mb-4">
													<label>Write Description*</label>
													<textarea class="form-control" name="desc" id="service_desc" rows="3"></textarea>
												</div>
											</div>
											<input type="hidden" name="service_for" value="linkedin">
											<div class="form-row">
												<div class="col-md mb-3">
													<button type="submit" class="btn btn-dark float-right">SUBMIT</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Modal -->
		





		<?php include_once 'inc/footer.php'; ?>






		<script type="text/javascript">

			stickyElem =
			document.querySelector(".flex-column");

        /* Gets the amount of height
        of the element from the
        viewport and adds the
        pageYOffset to get the height
        relative to the page */
        currStickyPos = 
        stickyElem.getBoundingClientRect().top + window.pageYOffset;

        window.onscroll = function() {

            /* Check if the current Y offset
            is greater than the position of
            the element */
            if (window.pageYOffset > currStickyPos) {
            	stickyElem.style.position = "sticky";
            	stickyElem.style.top = "10px";

            } else {
            	stickyElem.style.position = "relative";
            	stickyElem.style.top = "initial";
            }
        }





         // Script for add more button starts here
         $(document).ready(function () {
         	var i = 0;
         	$('#addmore').on('click', function (e) {
         		e.preventDefault();
         		if (i == 4) {
         			alert("you are allowed to add only 5 images");
         			return;
         		}
         		i++;
         		$('#dynamictag').append('<div  id="row' + i + '"><input type="file" name="pictures'+i+'" class="form-control-file" id="Upload" required> <span class="btn btn-danger btn_remove" id="' + i + '">DELETE</span></div>')
         	});

         	$(document).on('click', '.btn_remove', function () {
         		i--;
         		var button_id = $(this).attr("id");
         		$("#row" + button_id + "").remove();
         	});

         });
    // Script for add more button ends here




     // Script for add more button starts here
     $(document).ready(function () {
     	var i = 0;
     	$('#addmore1').on('click', function (e) {
     		e.preventDefault();
     		if (i == 4) {
     			alert("you are allowed to add only 5 images");
     			return;
     		}
     		i++;
     		$('#dynamictag1').append('<div  id="row' + i + '"><input type="file" name="pictures'+i+'" class="form-control-file" id="Upload" required> <span class="btn btn-danger btn_remove" id="' + i + '">DELETE</span></div>')
     	});

     	$(document).on('click', '.btn_remove', function () {
     		i--;
     		var button_id = $(this).attr("id");
     		$("#row" + button_id + "").remove();
     	});

     });
    // Script for add more button ends here





     // Script for add more button starts here
     $(document).ready(function () {
     	var i = 0;
     	$('#addmore2').on('click', function (e) {
     		e.preventDefault();
     		if (i == 4) {
     			alert("you are allowed to add only 5 images");
     			return;
     		}
     		i++;
     		$('#dynamictag2').append('<div  id="row' + i + '"><input type="file" name="pictures'+i+'" class="form-control-file" id="Upload" required> <span class="btn btn-danger btn_remove" id="' + i + '">DELETE</span></div>')
     	});

     	$(document).on('click', '.btn_remove', function () {
     		i--;
     		var button_id = $(this).attr("id");
     		$("#row" + button_id + "").remove();
     	});

     });
    // Script for add more button ends here




    // Script for add more button starts here
    $(document).ready(function () {
    	var i = 0;
    	$('#addmore3').on('click', function (e) {
    		e.preventDefault();
    		if (i == 4) {
    			alert("you are allowed to add only 5 images");
    			return;
    		}
    		i++;
    		$('#dynamictag3').append('<div  id="row' + i + '"><input type="file" name="pictures'+i+'" class="form-control-file" id="Upload" required> <span class="btn btn-danger btn_remove" id="' + i + '">DELETE</span></div>')
    	});

    	$(document).on('click', '.btn_remove', function () {
    		i--;
    		var button_id = $(this).attr("id");
    		$("#row" + button_id + "").remove();
    	});

    });
    // Script for add more button ends here



     // Script for add more button starts here
     $(document).ready(function () {
     	var i = 0;
     	$('#addmore4').on('click', function (e) {
     		e.preventDefault();
     		if (i == 4) {
     			alert("you are allowed to add only 5 images");
     			return;
     		}
     		i++;
     		$('#dynamictag4').append('<div  id="row' + i + '"><input type="file" name="pictures'+i+'" class="form-control-file" id="Upload" required> <span class="btn btn-danger btn_remove" id="' + i + '">DELETE</span></div>')
     	});

     	$(document).on('click', '.btn_remove', function () {
     		i--;
     		var button_id = $(this).attr("id");
     		$("#row" + button_id + "").remove();
     	});

     });
    // Script for add more button ends here


</script>
<script src="js/payment.js"></script>
</body>
</html>
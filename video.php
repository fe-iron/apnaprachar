<?php
include("connection.php");
$conn = OpenCon();

if(isset($_POST['mobile'])){
   $maxsize = 10485760; // 10MB
   $flag1 = false;
   $flag2 = false;
   if(isset($_FILES['video']['name']) && $_FILES['video']['name'] != ''){
   	$name = $_FILES['video']['name'];
   	$target_dir = "admin-panel/upload/videos/";
   	$target_file = $target_dir . $_FILES["video"]["name"];

       // Select file type
   	$extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
   	$extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
   	if( in_array($extension,$extensions_arr) ){

          // Check file size
   		if(($_FILES['video']['size'] >= $maxsize) || ($_FILES["video"]["size"] == 0)) {
   			$_SESSION['message'] = "File too large. File must be less than 5MB.";
   		}else{
             // Upload
   			if(move_uploaded_file($_FILES['video']['tmp_name'],$target_file)){
               // Insert record
   				$flag1 = true;
   			}
   		}

   	}else{
   		$_SESSION['message'] = "Invalid video file extension.";
   	}
   }else{
   	$name = '';
    //    $_SESSION['message'] = "Please select a video file.";
   }


   if(isset($_FILES['picture']['name']) && $_FILES['picture']['name'] != ''){
   	$target_dir_pic = "admin-panel/upload/";
   	$pictures = $_FILES['picture']['name'];
   	$target_file2 = $target_dir_pic . basename($_FILES["picture"]["name"]);
				// Select file type
   	$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
   	$extensions_arr = array("jpg","jpeg","png");
				// Check extension
   	if(in_array($imageFileType2,$extensions_arr)){
				// Upload file
   		if(move_uploaded_file($_FILES['picture']['tmp_name'],$target_dir_pic.$pictures)){
						// Insert record
   			$flag2 = true;
   		}
   	}else{
   		$_SESSION['message'] = "Invalid photo file extension.";
					// header("Location: graphic_design.php?result=Image Saving Failed!".$pictures);
   	}
   }else{
   	$pictures = '';
		// $_SESSION['message'] = "Please select a photo .";
   }

   if($flag1 || $flag2){
   	$flag1 = true;
   	$flag2 = true;
   }else{
   	$_SESSION['message'] = "Please select atleast a photo or video.";
   }
   $fname = $_POST['name'];
   $mobile = $_POST['mobile'];
   if(isset($_POST['email'])){
   	$email  = $_POST['email'];
   }else{
   	$email = '';
   }

   $desc = $_POST['desc'];
   $service_for = $_POST['service_for'];

   if($flag2 && $flag1){
   	$query = "INSERT INTO book_services (name, mobile, email, video, pictures, description, service_for)
   	VALUES('$fname', '$mobile', '$email', '$name', '$pictures', '$desc', '$service_for')";
   	$result = mysqli_query($conn,$query);
   	if($result){
			  // $_SESSION['loan_id'] = mysqli_insert_id($conn);
   		$_SESSION['message'] = "Successfully Saved!";
   	}else{
			//   echo mysqli_error($conn);
   		$_SESSION['message'] = "Update Failed!";
   	}

   }
} 
?>



<?php  include_once 'inc/head.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Video</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/buy_now.js"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<link rel="stylesheet" type="text/css" href="css/video.css">
</head>
<body>

	<?php include_once 'inc/header.php'; ?>
	<?php include_once 'inc/navbar.php'; ?>


	<section class="garphics_banner">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h2>Video</h2>
					<p>Welcome To The World Of Video Creation</p>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Video</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<section class="garphics_content">
		<div class="container py-5">
			<div class="row">
				<div class="col-md">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Short Video</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Documentry Video</a>
						<!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Packages</a> -->
						<!-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Twitter</a>
						<a class="nav-link" id="v-pills-settings-tab-1" data-toggle="pill" href="#v-pills-settings-1" role="tab" aria-controls="v-pills-settings-1" aria-selected="false">Linked In</a>
						<a class="nav-link" id="v-pills-settings-tab-2" data-toggle="pill" href="#v-pills-settings-2" role="tab" aria-controls="v-pills-settings-2" aria-selected="false">Google</a> -->
					</div>
				</div>

				<div class="col-md-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="container  fb-inner-content">
								<div class="row">
									<div class="col-md p-0">
										<?php 
										if(isset($_SESSION['message'])){ 
											if($_SESSION['message'] == "Successfully Saved!"){ ?>
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
									<div class="col-md p-0">
										<div class="card mb-3">
											<div class="card-header">
												<h5 class="mb-0">Short Video</h5>
												<a href="" class="btn btn-dark float-right">BOOK NOW</a>
											</div>
											<div class="card-body">
												<p class="mb-0">We create the best videos for occasion and festivals <br><br><span class="font-weight-bold">Video Duration: 30 Seccond</span></p>
											</div>
										</div>

										<div class="card mb-3">
											<div class="card-header">
												<h5>Video Packeges</h5>
											</div>
											<div class="card-body p-4">
												<div class="row">
													<div class="col-md-3 col-6  mb-3">
														<div class="card">
															<div class="card-body text-center">
																<h5>999/-</h5>
																<p class="mb-2">5 Short Videos <br> 30 Second
																</p>
																<a href="package_form.php?price=999" class="btn btn-primary mt-2">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-3 col-6  mb-3">
														<div class="card">
															<div class="card-body text-center">
																<h5>1999/-</h5>
																<p class="mb-2">10 Short Videos <br> 30 Second
																</p>
																<a href="package_form.php?price=1999" class="btn btn-primary mt-2">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-3 col-6  mb-3">
														<div class="card">
															<div class="card-body text-center">
																<h5>2999/-</h5>
																<p class="mb-2">15 Short Videos <br> 30 Second
																</p>
																<a href="package_form.php?price=2999" class="btn btn-primary mt-2">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-3 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>4999/-</h5>
																<p class="mb-2">25 Short Videos <br> 30 Second
																</p>
																<a href="package_form.php?price=4999" class="btn btn-primary mt-2">BUY NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<h5 class="mb-0">Book Services</h5>

											</div>
											<div class="card-body">

												<form method="post" action="video.php" enctype="multipart/form-data" name="video_services">
													<div class="form-row">
														<div class="col-md mb-9">
															<label class="text-danger font-weight-bold" id="error_msg"></label>
														</div>
														
													</div>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Name*</label>
															<input type="text" class="form-control " placeholder="Enter name" id="video_name" name="name" required>
														</div>
														<div class="col-md mb-3">
															<label>Mobile*</label>
															<input type="tel" class="form-control " placeholder="Mobile Number" name="mobile" id="video_mobile" required>
														</div>
														<div class="col-md mb-3">
															<label>Email Id</label>
															<input type="email" class="form-control " placeholder="email Id" name="email">
														</div>
													</div>

													
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Upload Video</label>
															<input type="file" class="form-control " placeholder="First name" name="video" id="video_video" required>
														</div>

														<div class="col-md mb-3">
															<label>Upload Pictures</label>
															<input type="file" placrholder="Upload Pictures" class="form-control" name="picture" id="video_picture" required>
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-4">
															<label>Write Description*</label>
															<textarea class="form-control" name="desc" id="video_desc" rows="3" required></textarea>
														</div>
													</div>
													<input type="hidden" name="service_for" value="video">
													<div class="form-row">
														<div class="col-md mb-3">
															<input type="button" class="btn btn-dark" value="Submit" name="but_upload" onclick="check_video_picture()">
														</div>
													</div>
												</form>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="container  insta-inner-content">
								<div class="row">
									<div class="col-md p-0">
										<div class="card mb-3">
											<div class="card-header">
												<h5 class="mb-0">Documentry Video</h5>
												<a href="" class="btn btn-dark float-right">BOOK NOW</a>
											</div>
											<div class="card-body">
												<p>We can create Best Documentry Video For the Person or or any Politcal Parties.</p>
												
											</div>
										</div>


										



										<div class="card">
											<div class="card-header">
												<h5 class="mb-0">Book Services</h5>
												
											</div>
											<div class="card-body">
												
												<form action="service_documentary.php" method="post">
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Name*</label>
															<input type="text" class="form-control " placeholder="Enter name" name="name" required>
														</div>
														<div class="col-md mb-3">
															<label>Mobile*</label>
															<input type="tel" class="form-control " placeholder="Mobile Number" name="mobile" required>
														</div>
														<div class="col-md mb-3">
															<label>Email Id</label>
															<input type="email" class="form-control " placeholder="email Id" name="email">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<label>Select Budget*</label>
															<select class="form-control" id="exampleFormControlSelect1" name="budget" required>
																<option>Select Between</option>
																<option value="50000-750000">Between 50000 to 750000</option>
																<option value="7500-100000">Between 75000 to 100000</option>
																<option value="100000-150000">Between 100000 to 150000</option>
																<option value="150000-300000">Between 150000 to 300000</option>
																<option value="300000-500000">Between 300000 to 500000</option>
															</select>
														</div>
														
													</div>

													

													<div class="form-row">
														<div class="col-md mb-4">
															<label>Write Description*</label>
															<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required></textarea>
														</div>
													</div>
													<input type="hidden" name="service_for" value="documentary">

													<div class="form-row">
														<div class="col-md mb-3">
															<input type="submit" class="btn btn-dark" value="Submit" name="s">
														</div>
													</div>
												</form>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="container  yout-inner-content">
								<div class="row">
									<div class="col-md p-0">
										<div class="card mb-3">
											<div class="card-header">
												<h5 class="mb-0">Packages</h5>
												<a href="" class="btn btn-dark float-right">BOOK NOW</a>
											</div>
											<div class="card-body">
												<p>Service Provided In Facebook Graphics Design</p>
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link active" href="#"><span><i class="far fa-check-circle"></i></span>Youtube Thumbnail</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Youtube Profile Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Youtube Cover Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Youtube Graphic Post</a>
													</li>
													
												</ul>
											</div>
										</div>

										<div class="card mb-3">
											<div class="card-header">
												<h5>Facebook Packeges</h5>
											</div>
											<div class="card-body p-4">
												<div class="row">
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>999/-</h5>
																<p class="mb-2">10 Facebook Posters <br>
																	1 Free Profile Picture
																</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>1999/-</h5>
																<p class="mb-2">20 Facebook Posters <br>
																1 Free Profile Picture</p>

																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>2999/-</h5>
																<p class="mb-2">30 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>4999/-</h5>
																<p class="mb-2">40 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<h5 class="mb-0">Book Services</h5>
												
											</div>
											<div class="card-body">
												
												<form>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Name*</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Mobile*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
														<div class="col-md mb-3">
															<label>Email Id*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<label>Which Party You Belong</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Select Services</label>
															<select class="form-control " id="exampleFormControlSelect1">
																<option>Youtube Profile Picture</option>
																<option>Youtube Cover Picture</option>
																<option>Youtube Thumbnail</option>
																<option>Youtube Post</option>
																<option>All of the Above</option>
																
															</select>
														</div>
														<div class="col-md mb-3">
															<label>Occasion</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Upload Pictures*</label>
															<input type="file" class="form-control " placeholder="First name">
														</div>

														<div class="col-md mb-3">
															<label>Upload Beloning Pictures</label>
															<input type="file" placrholder="Upload Pictures" name="" class="form-control">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-4">
															<label>Write Description</label>
															<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<a href="" class="btn btn-dark float-right">SUBMIT</a>
														</div>
													</div>
												</form>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="container  twit-inner-content">
								<div class="row">
									<div class="col-md p-0">
										<div class="card mb-3">
											<div class="card-header">
												<h5 class="mb-0">Twitter Graphic Design</h5>
												<a href="" class="btn btn-dark float-right">BOOK NOW</a>
											</div>
											<div class="card-body">
												<p>Service Provided In Facebook Graphics Design</p>
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link active" href="#"><span><i class="far fa-check-circle"></i></span>Twitter Profile Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Twitter Cover Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Twitter Graphic Post</a>
													</li>
													
												</ul>
											</div>
										</div>

										<div class="card mb-3">
											<div class="card-header">
												<h5>Facebook Packeges</h5>
											</div>
											<div class="card-body p-4">
												<div class="row">
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>999/-</h5>
																<p class="mb-2">10 Facebook Posters <br>
																	1 Free Profile Picture
																</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>1999/-</h5>
																<p class="mb-2">20 Facebook Posters <br>
																1 Free Profile Picture</p>

																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>2999/-</h5>
																<p class="mb-2">30 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>4999/-</h5>
																<p class="mb-2">40 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<h5 class="mb-0">Book Services</h5>
												
											</div>
											<div class="card-body">
												
												<form>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Name*</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Mobile*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
														<div class="col-md mb-3">
															<label>Email Id*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<label>Which Party You Belong</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Select Services</label>
															<select class="form-control " id="exampleFormControlSelect1">
																<option>Twitter Profile Picture</option>
																<option>Twitter Cover Picture</option>
																<option>Twitter Post</option>
																<option>All of the Above</option>
																
															</select>
														</div>
														<div class="col-md mb-3">
															<label>Occasion</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Upload Pictures*</label>
															<input type="file" class="form-control " placeholder="First name">
														</div>

														<div class="col-md mb-3">
															<label>Upload Beloning Pictures</label>
															<input type="file" placrholder="Upload Pictures" name="" class="form-control">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-4">
															<label>Write Description</label>
															<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<a href="" class="btn btn-dark float-right">SUBMIT</a>
														</div>
													</div>
												</form>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings-1" role="tabpanel" aria-labelledby="v-pills-settings-tab-1">
							<div class="container  linked-inner-content">
								<div class="row">
									<div class="col-md p-0">
										<div class="card mb-3">
											<div class="card-header">
												<h5 class="mb-0">Linked In Graphic Design</h5>
												<a href="" class="btn btn-dark float-right">BOOK NOW</a>
											</div>
											<div class="card-body">
												<p>Service Provided In Facebook Graphics Design</p>
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link active" href="#"><span><i class="far fa-check-circle"></i></span>Linked In Profile Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Linked In Cover Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Linked In Graphic Post</a>
													</li>
													
												</ul>
											</div>
										</div>

										<div class="card mb-3">
											<div class="card-header">
												<h5>Facebook Packeges</h5>
											</div>
											<div class="card-body p-4">
												<div class="row">
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>999/-</h5>
																<p class="mb-2">10 Facebook Posters <br>
																	1 Free Profile Picture
																</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>1999/-</h5>
																<p class="mb-2">20 Facebook Posters <br>
																1 Free Profile Picture</p>

																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>2999/-</h5>
																<p class="mb-2">30 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>4999/-</h5>
																<p class="mb-2">40 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<h5 class="mb-0">Book Services</h5>
												
											</div>
											<div class="card-body">
												
												<form>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Name*</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Mobile*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
														<div class="col-md mb-3">
															<label>Email Id*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<label>Which Party You Belong</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Select Services</label>
															<select class="form-control " id="exampleFormControlSelect1">
																<option>Linked In Profile Picture</option>
																<option>Linked In Cover Picture</option>
																<option>Linked In Post</option>
																<option>All of the Above</option>
																
															</select>
														</div>
														<div class="col-md mb-3">
															<label>Occasion</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Upload Pictures*</label>
															<input type="file" class="form-control " placeholder="First name">
														</div>

														<div class="col-md mb-3">
															<label>Upload Beloning Pictures</label>
															<input type="file" placrholder="Upload Pictures" name="" class="form-control">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-4">
															<label>Write Description</label>
															<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<a href="" class="btn btn-dark float-right">SUBMIT</a>
														</div>
													</div>
												</form>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-settings-2" role="tabpanel" aria-labelledby="v-pills-settings-tab-2">
							<div class="container  linked-inner-content">
								<div class="row">
									<div class="col-md p-0">
										<div class="card mb-3">
											<div class="card-header">
												<h5 class="mb-0">Google Graphic Design</h5>
												<a href="" class="btn btn-dark float-right">BOOK NOW</a>
											</div>
											<div class="card-body">
												<p>Service Provided In Facebook Graphics Design</p>
												<ul class="nav flex-column">
													<li class="nav-item">
														<a class="nav-link active" href="#"><span><i class="far fa-check-circle"></i></span>Linked In Profile Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Linked In Cover Picture</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#"><span><i class="far fa-check-circle"></i></span>Linked In Graphic Post</a>
													</li>
													
												</ul>
											</div>
										</div>

										<div class="card mb-3">
											<div class="card-header">
												<h5>Facebook Packeges</h5>
											</div>
											<div class="card-body p-4">
												<div class="row">
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>999/-</h5>
																<p class="mb-2">10 Facebook Posters <br>
																	1 Free Profile Picture
																</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>1999/-</h5>
																<p class="mb-2">20 Facebook Posters <br>
																1 Free Profile Picture</p>

																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>2999/-</h5>
																<p class="mb-2">30 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-6  mb-2">
														<div class="card">
															<div class="card-body text-center">
																<h5>4999/-</h5>
																<p class="mb-2">40 Facebook Posters <br>1 Free Profile Picture</p>
																<a href="" class="btn btn-dark btn-sm">BUY NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header">
												<h5 class="mb-0">Book Services</h5>
												
											</div>
											<div class="card-body">
												
												<form>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Name*</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Mobile*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
														<div class="col-md mb-3">
															<label>Email Id*</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<label>Which Party You Belong</label>
															<input type="text" class="form-control " placeholder="First name">
														</div>
														<div class="col-md mb-3">
															<label>Select Services</label>
															<select class="form-control " id="exampleFormControlSelect1">
																<option>Linked In Profile Picture</option>
																<option>Linked In Cover Picture</option>
																<option>Linked In Post</option>
																<option>All of the Above</option>
																
															</select>
														</div>
														<div class="col-md mb-3">
															<label>Occasion</label>
															<input type="text" class="form-control " placeholder="Last name">
														</div>
													</div>
													<div class="form-row">
														<div class="col-md mb-3">
															<label>Upload Pictures*</label>
															<input type="file" class="form-control " placeholder="First name">
														</div>

														<div class="col-md mb-3">
															<label>Upload Beloning Pictures</label>
															<input type="file" placrholder="Upload Pictures" name="" class="form-control">
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-4">
															<label>Write Description</label>
															<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>

													<div class="form-row">
														<div class="col-md mb-3">
															<a href="" class="btn btn-dark float-right">SUBMIT</a>
														</div>
													</div>
												</form>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>


	



	<?php include_once 'inc/footer.php'; ?>


	<script type="text/javascript">
		
		// stickyElem =
		// document.querySelector(".flex-column");

        /* Gets the amount of height
        of the element from the
        viewport and adds the
        pageYOffset to get the height
        relative to the page */
        //currStickyPos = 
        //stickyElem.getBoundingClientRect().top + window.pageYOffset;

        //window.onscroll = function() {

            /* Check if the current Y offset
            is greater than the position of
            the element */
        //     if (window.pageYOffset > currStickyPos) {
        //     	stickyElem.style.position = "sticky";
        //     	stickyElem.style.top = "10px";

        //     } else {
        //     	stickyElem.style.position = "relative";
        //     	stickyElem.style.top = "initial";
        //     }
        // }







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




    
</script>
<script src="js/payment.js"></script>
<script src="js/upload.js"></script>
</body>
</html>
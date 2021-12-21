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
	<link rel="stylesheet" type="text/css" href="css/advertisement.css">
</head>
<body>

	<?php include_once 'inc/header.php'; ?>
	<?php include_once 'inc/navbar.php'; ?>

	<section class="garphics_banner">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h2>Advertisement</h2>
					<p>Welcome To The World Of Video Creation</p>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Advertisement</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<br>
	<br>

	<?php 
	if($msg == "Successfully saved!" || $msg == "Login Successfully!"){
		print '<h2 class="text-success" style="text-align: center">'.$msg.'</h2>';
	}else{
		print '<h2 class="text-danger" style="text-align: center">'.$msg.'</h2>';
	}
	?>
	<section class="garphics_content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h4 class="mb-4 pb-2 border-bottom">Media & News Advertisement</h4>
					<ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Print Media</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">News Channel</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Youtube News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab-1" data-toggle="tab" href="#facebook" role="tab" aria-controls="facebook" aria-selected="false">Facebook News</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="card mb-3" id="bulk_message">
								<div class="card-header">
									<h5 class="mb-0">Print Media</h5>

								</div>
								<div class="card-body">
									<form action="advertisement_service.php" method="post">
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " placeholder="Enter Name" name="name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="email" class="form-control " placeholder=" Enter Email" name="email">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
											</div>
										</div>

										<input type="hidden" name="service_for" value="print media">

										<div class="form-row">
											<div class="col-md mb-2">
												<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
												<input type="submit" name="submit" value="submit" class="float-right btn btn-dark">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="card mb-3" id="bulk_whatsapp_message">
								<div class="card-header">
									<h5 class="mb-0">News Channel</h5>

								</div>
								<div class="card-body">
									<form action="advertisement_service.php" method="post">
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control " placeholder="Enter Name" name="name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="email" class="form-control " placeholder=" Enter Email" name="email">
											</div>
										</div>



										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
											</div>
										</div>

										<input type="hidden" name="service_for" value="news channel">

										<div class="form-row">
											<div class="col-md mb-2">
												<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
												<input type="submit" name="submit" value="submit" class="float-right btn btn-dark">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><div class="card mb-3" id="Bulk_voice_call">
							<div class="card-header">
								<h5 class="mb-0">Youtube News</h5>

							</div>
							<div class="card-body">
								<form action="advertisement_service.php" method="post">
									<div class="form-row">
										<div class="col-md mb-3">
											<label>Name*</label>
											<input type="text" class="form-control " placeholder="Enter Name" name="name">
										</div>
										<div class="col-md mb-3">
											<label>Mobile*</label>
											<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
										</div>
										<div class="col-md mb-3">
											<label>Email Id*</label>
											<input type="email" class="form-control " placeholder=" Enter Email" name="email">
										</div>
									</div>

									<div class="form-row">
										<div class="col-md mb-4">
											<label>Write Description</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
										</div>
									</div>

									<input type="hidden" name="service_for" value="youtube news">

									<div class="form-row">
										<div class="col-md mb-2">
											<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
											<input type="submit" name="submit" value="submit" class="float-right btn btn-dark">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="facebook" role="tabpanel" aria-labelledby="contact-tab"><div class="card mb-3" id="Bulk_voice_call">
						<div class="card-header">
							<h5 class="mb-0">Facebook News</h5>

						</div>
						<div class="card-body">
							<form action="advertisement_service.php" method="post">
								<div class="form-row">
									<div class="col-md mb-3">
										<label>Name*</label>
										<input type="text" class="form-control " placeholder="Enter Name" name="name">
									</div>
									<div class="col-md mb-3">
										<label>Mobile*</label>
										<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
									</div>
									<div class="col-md mb-3">
										<label>Email Id*</label>
										<input type="email" class="form-control " placeholder=" Enter Email" name="email">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-4">
										<label>Write Description</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
									</div>
								</div>

								<input type="hidden" name="service_for" value="facebook news">

								<div class="form-row">
									<div class="col-md mb-2">
										<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
										<input type="submit" name="submit" value="submit" class="float-right btn btn-dark">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center mb-5">
		<div class="col-md-10">
			<h4 class="mb-4 pb-2 border-bottom">Social Media Advertisement</h4>
			<ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">facebook Sponsored Post</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Instagram Sponsored Post</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Youtube Ads.</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab-1" data-toggle="tab" href="#facebook1" role="tab" aria-controls="facebook" aria-selected="false">Google Ads.</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
					<div class="card mb-3" id="bulk_message">
						<div class="card-header">
							<h5 class="mb-0">facebook Sponsored Post</h5>

						</div>
						<div class="card-body">
							<form action="advertisement_service.php" method="post">
								<div class="form-row">
									<div class="col-md mb-3">
										<label>Name*</label>
										<input type="text" class="form-control " placeholder="Enter Name" name="name">
									</div>
									<div class="col-md mb-3">
										<label>Mobile*</label>
										<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
									</div>
									<div class="col-md mb-3">
										<label>Email Id*</label>
										<input type="email" class="form-control " placeholder=" Enter Email" name="email">
									</div>
								</div>


								<div class="form-row">
									<div class="col-md mb-3">
										<label>Enter Your Budget*</label>
										<select class="form-control" id="exampleFormControlSelect1" name="budget">
											<option>Select Budget</option>
											<option value="500">500</option>
											<option value="1000">1000</option>
											<option value="3000">3000</option>
											<option value="5000">5000</option>
											<option value="8000">8000</option>
											<option value="10000+">More Than 10K</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-4">
										<label>Write Description</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
									</div>
								</div>

								<input type="hidden" name="service_for" value="facebook Sponsored Post">

								<div class="form-row">
									<div class="col-md mb-2">
										<input type="submit" name="submit" value="Submit" class="btn btn-dark float-right">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
					<div class="card mb-3" id="bulk_whatsapp_message">
						<div class="card-header">
							<h5 class="mb-0">Instagram Sponsored Post</h5>

						</div>
						<div class="card-body">
							<form action="advertisement_service.php" method="post">
								<div class="form-row">
									<div class="col-md mb-3">
										<label>Name*</label>
										<input type="text" class="form-control " placeholder="Enter Name" name="name">
									</div>
									<div class="col-md mb-3">
										<label>Mobile*</label>
										<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
									</div>
									<div class="col-md mb-3">
										<label>Email Id*</label>
										<input type="email" class="form-control " placeholder=" Enter Email" name="email">
									</div>
								</div>


								<div class="form-row">
									<div class="col-md mb-3">
										<label>Enter Your Budget*</label>
										<select class="form-control" id="exampleFormControlSelect1" name="budget">
											<option>Select Budget</option>
											<option value="500">500</option>
											<option value="1000">1000</option>
											<option value="3000">3000</option>
											<option value="5000">5000</option>
											<option value="8000">8000</option>
											<option value="10000+">More Than 10K</option>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-4">
										<label>Write Description</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
									</div>
								</div>

								<input type="hidden" name="service_for" value="instagram sponsored post">

								<div class="form-row">
									<div class="col-md mb-2">
										<input type="submit" name="submit" value="Submit" class="btn btn-dark">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab"><div class="card mb-3" id="Bulk_voice_call">
					<div class="card-header">
						<h5 class="mb-0">Youtube Advertisement</h5>

					</div>
					<div class="card-body">
						<form action="advertisement_service.php" method="post">
							<div class="form-row">
								<div class="col-md mb-3">
									<label>Name*</label>
									<input type="text" class="form-control " placeholder="Enter Name" name="name">
								</div>
								<div class="col-md mb-3">
									<label>Mobile*</label>
									<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
								</div>
								<div class="col-md mb-3">
									<label>Email Id*</label>
									<input type="email" class="form-control " placeholder=" Enter Email" name="email">
								</div>
							</div>


							<div class="form-row">
								<div class="col-md mb-3">
									<label>Enter Your Budget*</label>
									<select class="form-control" id="exampleFormControlSelect1" name="budget">
										<option>Select Budget</option>
										<option value="2000">2000</option>
										<option value="5000">5000</option>
										<option value="20000">20000</option>
										<option value="50000">50000</option>
										<option value="80000">80000</option>
										<option value="100000+">More Than 1 Lakhs</option>
									</select>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md mb-4">
									<label>Write Description</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
								</div>
							</div>

							<input type="hidden" name="service_for" value="youtube advertisement">

							<div class="form-row">
								<div class="col-md mb-2">
									<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
									<input type="submit" name="submit" value="Submit" class="btn btn-dark">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="facebook1" role="tabpanel" aria-labelledby="contact-tab"><div class="card mb-3" id="Bulk_voice_call">
				<div class="card-header">
					<h5 class="mb-0">Google Advertisement</h5>

				</div>
				<div class="card-body">
					<form action="advertisement_service.php" method="post">
						<div class="form-row">
							<div class="col-md mb-3">
								<label>Name*</label>
								<input type="text" class="form-control " placeholder="Enter Name" name="name">
							</div>
							<div class="col-md mb-3">
								<label>Mobile*</label>
								<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
							</div>
							<div class="col-md mb-3">
								<label>Email Id*</label>
								<input type="email" class="form-control " placeholder=" Enter Email" name="email">
							</div>
						</div>


						<div class="form-row">
							<div class="col-md mb-3">
								<label>Enter Your Budget*</label>
								<select class="form-control" id="exampleFormControlSelect1" name="budget">
									<option>Select Budget</option>
									<option value="2000">2000</option>
									<option value="5000">5000</option>
									<option value="20000">20000</option>
									<option value="50000">50000</option>
									<option value="80000">80000</option>
									<option value="100000+">More Than 1 Lakhs</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md mb-4">
								<label>Write Description</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
							</div>
						</div>

						<input type="hidden" name="service_for" value="google advertisement">

						<div class="form-row">
							<div class="col-md mb-2">
								<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
								<input type="submit" name="submit" value="Submit" class="btn btn-dark">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="row justify-content-center mb-5">
	<div class="col-md-10">
		<h4 class="mb-4 pb-2 border-bottom">Grow You Social Media Audience</h4>
		<ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Increase Facebook Page Likes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Increase Instagram Followers</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact" aria-selected="false">We Can Help You To Verify Your Social Account( facebook/Instagram/Twitter )</a>
			</li>

		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
				<div class="card mb-3" id="bulk_message">
					<div class="card-header">
						<h5 class="mb-0">Increase Facebook Page Likes</h5>

					</div>
					<div class="card-body">
						<form action="advertisement_service.php" method="post">
							<div class="form-row">
								<div class="col-md mb-3">
									<label>Name*</label>
									<input type="text" class="form-control " placeholder="Enter Name" name="name">
								</div>
								<div class="col-md mb-3">
									<label>Mobile*</label>
									<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
								</div>
								<div class="col-md mb-3">
									<label>Email Id*</label>
									<input type="email" class="form-control " placeholder=" Enter Email" name="email">
								</div>
							</div>

							<div class="form-row">
								<div class="col-md mb-4">
									<label>Write Description</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
								</div>
							</div>

							<input type="hidden" name="service_for" value="Increase Facebook Page Likes"> 

							<div class="form-row">
								<div class="col-md mb-2">
									<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
									<input type="submit" name="submit" value="Submit" class="btn btn-dark">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
				<div class="card mb-3" id="bulk_whatsapp_message">
					<div class="card-header">
						<h5 class="mb-0">Increase Instagram Followers</h5>

					</div>
					<div class="card-body">
						<form action="advertisement_service.php" method="post">
							<div class="form-row">
								<div class="col-md mb-3">
									<label>Name*</label>
									<input type="text" class="form-control " placeholder="Enter Name" name="name">
								</div>
								<div class="col-md mb-3">
									<label>Mobile*</label>
									<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
								</div>
								<div class="col-md mb-3">
									<label>Email Id*</label>
									<input type="email" class="form-control " placeholder=" Enter Email" name="email">
								</div>
							</div>

							<div class="form-row">
								<div class="col-md mb-4">
									<label>Write Description</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
								</div>
							</div>

							<input type="hidden" name="service_for" value="Increase instagram followers"> 

							<div class="form-row">
								<div class="col-md mb-2">
									<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
									<input type="submit" name="submit" value="Submit" class="btn btn-dark">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab"><div class="card mb-3" id="Bulk_voice_call">
				<div class="card-header">
					<h5 class="mb-0">Verify Social Account With Us ( facebook/Instagram/Twitter )</h5>

				</div>
				<div class="card-body">
					<form action="advertisement_service.php" method="post">
						<div class="form-row">
							<div class="col-md mb-3">
								<label>Name*</label>
								<input type="text" class="form-control " placeholder="Enter Name" name="name">
							</div>
							<div class="col-md mb-3">
								<label>Mobile*</label>
								<input type="tel" class="form-control " placeholder=" Enter Mobile" name="phone">
							</div>
							<div class="col-md mb-3">
								<label>Email Id*</label>
								<input type="email" class="form-control " placeholder=" Enter Email" name="email">
							</div>
						</div>


						<div class="form-row">
							<div class="col-md mb-4">
								<label>Write Description</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
							</div>
						</div>

						<input type="hidden" name="service_for" value="verify social account"> 

						<div class="form-row">
							<div class="col-md mb-2">
								<!-- <a href="" class="btn btn-dark float-right">SUBMIT</a> -->
								<input type="submit" name="submit" value="Submit" class="btn btn-dark">
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

	<?php include_once 'inc/footer.php'; ?>


<script type="text/javascript">

	function myfunction(){
		x=document.getElementById('message');

		if (x.style.display==="none") {

			x.style.display = "block";
		}

		else
		{
			x.style.display = "none";
		}
	}


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
    </script>

</body>
</html>
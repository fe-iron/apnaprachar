
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
	<title>Messages & Calls</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/message_call.css">
</head>
<body>

	<?php include_once 'inc/header.php'; ?>
	<?php include_once 'inc/navbar.php'; ?>

	<section class="garphics_banner">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h2>Messages and Calls</h2>
					<p>Welcome To The World Of Video Creation</p>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Messages & Calls</li>
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
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Bulk Messages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bulk Whatsapp Msg.</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bulk Voice Calls</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="card mb-3" id="bulk_message">
								<div class="card-header">
									<h5 class="mb-0">Bulk Message</h5>
								</div>
								<div class="card-body">
									<form action="message_call_service.php" method="post">
										<h6 class="mb-3">Fill Below Form To Book Services</h6>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control" name="name" required placeholder="Name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="tel" class="form-control" name="phone" required placeholder="Mobile">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="email" class="form-control" name="email" required placeholder="Email">
											</div>
										</div>


										<div class="form-row">
											<div class="col-md mb-3">
												<label>Number of Messages you want*</label>
												<select class="form-control" id="exampleFormControlSelect1" name="msg_no" required="">
													<option>Select Number of Messages</option>
													<option value="1000">1000</option>
													<option value="5000">5000</option>
													<option value="30000">30000</option>
													<option value="50000">50000</option>
													<option value="80000">80000</option>
													<option value="100000">100000</option>
												</select>
											</div>

											<div class="col-md mb-3">
												<label>Message Characters you wnat*</label>
												<select class="form-control" id="exampleFormControlSelect1" name="msg_character" required="">
													<option>Select Number of Characters</option>
													<option value="300">300</option>
													<option value="500">500</option>

												</select>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
											</div>
										</div>

										<input type="hidden" name="service_for" value="bulk_message">

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
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="card mb-3" id="bulk_whatsapp_message">
								<div class="card-header">
									<h5 class="mb-0">Bulk Whatsapp Message</h5>

								</div>
								<div class="card-body">
									<form action="message_call_service.php" method="post">
										<h6 class="mb-3">Fill Below Form To Book Services</h6>
										<div class="form-row">
											<div class="col-md mb-3">
												<label>Name*</label>
												<input type="text" class="form-control" name="name" required placeholder="Name">
											</div>
											<div class="col-md mb-3">
												<label>Mobile*</label>
												<input type="tel" class="form-control" name="phone" required placeholder="Mobile">
											</div>
											<div class="col-md mb-3">
												<label>Email Id*</label>
												<input type="email" class="form-control" name="email" required placeholder="Email">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-3">
												<label>Number of Messages you want*</label>
												<select class="form-control" id="exampleFormControlSelect1" name="msg_no" required="">
													<option>Select Number of Messages</option>
													<option value="1000">1000</option>
													<option value="5000">5000</option>
													<option value="30000">30000</option>
													<option value="50000">50000</option>
													<option value="80000">80000</option>
													<option value="100000">100000</option>
												</select>
											</div>

											<div class="col-md mb-3">
												<label>Message Characters you wnat*</label>
												<select class="form-control" id="exampleFormControlSelect1" name="msg_character" required="">
													<option>Select Number of Characters</option>
													<option value="300">300</option>
													<option value="500">500</option>

												</select>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-4">
												<label>Write Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
											</div>
										</div>

										<input type="hidden" name="service_for" value="bulk_Whatsapp_message">

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
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><div class="card mb-3" id="Bulk_voice_call">
							<div class="card-header">
								<h5 class="mb-0">Bulk Voice Call</h5>

							</div>
							<div class="card-body">
								<form action="message_call_service.php" method="post">
									<h6 class="mb-3">Fill Below Form To Book Services</h6>
									<div class="form-row">
										<div class="col-md mb-3">
											<label>Name*</label>
											<input type="text" class="form-control" name="name" required placeholder="Name">
										</div>
										<div class="col-md mb-3">
											<label>Mobile*</label>
											<input type="tel" class="form-control" name="phone" required placeholder="Mobile">
										</div>
										<div class="col-md mb-3">
											<label>Email Id*</label>
											<input type="email" class="form-control" name="email" required placeholder="Email">
										</div>
									</div>


									<div class="form-row">
										<div class="col-md mb-3">
											<label>Number of Messages you want*</label>
											<select class="form-control" id="exampleFormControlSelect1" name="msg_no" required="">
												<option>Select Number of Messages</option>
												<option value="1000">1000</option>
												<option value="5000">5000</option>
												<option value="30000">30000</option>
												<option value="50000">50000</option>
												<option value="80000">80000</option>
												<option value="100000">100000</option>
											</select>
										</div>

										<div class="col-md mb-3">
											<label>Message Characters you wnat*</label>
											<select class="form-control" id="exampleFormControlSelect1" name="msg_character" required="">
												<option>Select Number of Characters</option>
												<option value="300">300</option>
												<option value="500">500</option>

											</select>
										</div>
									</div>

									<div class="form-row">
										<div class="col-md mb-4">
											<label>Write Description</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
										</div>
									</div>

									<input type="hidden" name="service_for" value="Bulk_voice_call">

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
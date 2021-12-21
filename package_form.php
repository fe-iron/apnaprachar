
<?php include_once 'inc/head.php';  ?>
<?php 

if (isset($_GET['price'])) {
	$price=$_GET['price'];
	$price1 = $_GET['price'];
}

else {
	$price='';
}

if (isset($_GET['service_for'])) {
	$service_for = $_GET['service_for'];
}

else {
	$service_for = '';
}

 $gst = ($price * 18 ) / 100;
 $price = $price + $gst;

	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Package</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/graphic_design.css">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>




	<?php include_once 'inc/header.php'; ?>

	<?php include_once 'inc/navbar.php'; ?>

	

	<section class="garphics_content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 py-5">
					<div class="card" id="form">
						<div class="card-header">
							<h5 class="mb-0">Buy <?php echo $service_for; ?> Package <span class="text-success">( ₹<?php echo $price1 ?> )</span> </h5>
						</div>
						<div class="card-body">
							<form action="post_payment_success.php" method="post" name="service_submit" enctype="multipart/form-data">
								<div class="form-row">
									<div class="col-md mb-3">
										<label>Name*</label>
										<input type="text" class="form-control" placeholder="Enter Full Name" name="fname" id="fname" required>
									</div>
									<div class="col-md mb-3">
										<label>Mobile*</label>
										<input type="tel" class="form-control" placeholder="Enter Mobile Number" name="mobile" id="mobile" required>
									</div>

									<div class="col-md mb-3">
										<label>Email ( Optional )</label>
										<input type="email" class="form-control" name="email" placeholder="Enter Email" id="email">
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-3">
										<label>Your City</label>
										<input type="text" class="form-control" placeholder="Enter Yout City" name="city" id="city" required>
									</div>
									<div class="col-md mb-3">
										<label>Package Price <small class="text-info">( 18% GST included )</small></label>
										<input type="number" class="form-control" readonly id="package_price" name="amount" value="<?php echo $price;  ?>">
									</div>
									
								</div>
								<div class="form-row">
									<div class="col-md mb-3">
										<label>Upload Your Picture*</label>
										<input type="file" class="form-control" name="photo" placeholder="Upload Your Picture" required>
									</div>
									
									<div class="col-md mb-3">
										<label>Upload Belonging Pictures ( Optional )</label>
										<input type="file" class="form-control" name="belonging" placeholder="Upload Belonging Pictures">
									</div>
								</div>
								
								<input type="hidden" name="service_for" value="<?php echo $service_for; ?>">
								<input type="hidden" name="payment_id" id="payment_id" value="">
								<div class="form-row">
									<div class="col-md mb-3">
										<button type="button" class="btn btn-dark float-right" onclick="payment();">SUBMIT</button>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	









	<!-- Modal -->
	<!-- <div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-labelledby="edit_dataLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Update </h5>

				</div>
				<div class="modal-body">
					<form class="form-horizontal form-material" action="" method="post">



						<div class="form-group mb-4">
							<label class="col-md-12 p-0">Full Name</label>
							<div class="col-md-12 border-bottom p-0">
								<input type="text" class="form-control p-0 border-0" name="fname" required>
							</div>
						</div>


						<div class="form-group mb-4">
							<label class="col-md-12 p-0">Your City</label>
							<div class="col-md-12 border-bottom p-0">
								<input type="text" class="form-control p-0 border-0" name="city" required>
							</div>
						</div>



						<div class="form-group mb-4">
							<label class="col-md-12 p-0">Mobile Number</label>
							<div class="col-md-12 border-bottom p-0">
								<input type="tel" class="form-control p-0 border-0" required>
							</div>
						</div>
						<div class="form-group mb-4">
							<label class="col-md-12 p-0">Package Price</label>
							<div class="col-md-12 border-bottom p-0">
								<input type="number" class="form-control p-0 border-0" id="package_price" readonly>
							</div>
						</div>


						<div class="form-group mb-4">
							<div class="col-sm-12">
								<button class="btn btn-success" type="submit">Submit</button>
							</div>
						</div>
						<p></p>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="close_modal('edit_data')">Close</button>

				</div>
			</div>
		</div>
	</div> -->









	<?php include_once 'inc/footer.php'; ?>
	<script src="js/payment.js"></script>


</body>
</html>
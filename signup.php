<?php

include 'connection.php';

$con = OpenCon();

if(empty($_GET)) {
	$msg = " ";
}else{
	$msg = $_GET['result'];
}

     // If form submitted, insert values into the database.
if (isset($_POST['phone'])){
        // removes backslashes
	$name = $_POST['fname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `users` WHERE phone_number='$phone'";
	$result = $con->query($sql);


	if ($result->num_rows > 0) {
		header("Location: signup.php?result=Mobile Number already Exists!");
	}else{
		$sql = "SELECT * FROM `users` WHERE email='$email'";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			header("Location: signup.php?result=Email already Exists!");
		}else{

			$query = "INSERT into `users` (full_name, phone_number, email, password) 
			VALUES ('$name', '$phone', '$email', '".md5($password)."')";
		}
        //trying to get last inserted id

	}if($con->query($query) === TRUE){
		$_SESSION['username'] = $row['full_name'];

		$_SESSION['phone'] = $row['phone_number'];


		header("Location: login.php?result=Registered Successfully!");
	}else{
            // echo "Error: " . $query . "<br>" . $con->error;
		header("Location: signup.php?result=Something Went! Try Again");
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- fontawesome cdn -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="css/graphic_design.css">
	<script src="js/buy_now.js"></script>
</head>
<body>


	<style type="text/css">
        .card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
   background-image: linear-gradient( 
90deg, rgb(61 85 117) 0%, rgb(107 142 187) 35%, rgb(71 97 130) 100%);
    border-bottom: 1px solid rgba(0,0,0,.125);
    color: white;
   }
    </style>





	<?php include_once 'inc/header.php'; ?>

	<?php include_once 'inc/navbar.php'; ?>

	

	<section class="garphics_content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5 py-5">
					<?php 
					if($msg == "Successfully saved!"){
						print '<h2 class="text-success" style="text-align: center">'.$msg.'</h2>';
					}else{
						print '<h2 class="text-danger" style="text-align: center">'.$msg.'</h2>';
					}
					?>
					<div class="card" id="form">
						<div class="card-header">
							<h3 class="mb-0 text-center">Sign Up</h3>
						</div>
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-row">
									<div class="col-md mb-3">
										<label>Name*</label>
										<input type="text" class="form-control" placeholder="Enter Full Name" name="fname" required>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-3">
										<label>Mobile*</label>
										<input type="tel" class="form-control" placeholder="Enter Mobile Number" name="phone" required>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-3">
										<label>Email*</label>
										<input type="text" class="form-control" placeholder="Enter Email" name="email" required>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-3">
										<label>Create Password*</label>
										<input type="password" class="form-control" placeholder="Enter Password" name="password" required>
									</div>
								</div>

								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										I Agree terms & Conditions
									</label>
								</div>
						
								<div class="form-row">
									<div class="col-md mb-3">
										<button type="submit" name="submit" class="btn btn-dark float-right">SUBMIT</button>
									</div>
								</div>

								<div class="form-row">
									<!-- <div class="col-md">
										<button type="submit" name="submit" class="btn btn-dark float-right">SUBMIT</button>
									</div> -->
									Already a Member? <a href="login.php" class="ml-2">Click Here to login</a>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	















	<?php include_once 'inc/footer.php'; ?>


</body>
</html>
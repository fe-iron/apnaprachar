
<?php include_once 'inc/head.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../admin-panel/inc/css/style.css">
</head>
<body>

	<section>
		<!-- large-screen-sidebarstarts -->
		<div class="sidebar">
			<div class="logo">
				<h3 class="">
					<img src="../images/logo.png">
				</h3>
			</div>
			<div class="" id="sidebar-here">
				<a href="index.php" class="list ">My Orders</a>
				<a href="account.php" class="active ">Account</a>
			</div>
		</div>

		<!-- large-screen-sidebar-ends -->





		<!-- small-screen-sidebar starts -->
		<div class="small-screen-sidebar">
			<div id="mySidenav" class="sidenav">
				<div class="logo bg-color-sidenav">
					<div class="d-flex bd-highlight">
						<div class=" bd-highlight">
							<h3 class="">
								<img src="../images/logo.png">
							</h3>
						</div>
						<div class="p-2 bd-highlight">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						</div>
					</div>
				</div>
				<div class="pt-0" id="sidebar-here">
					<div class="pt-3" id="sidebar-here">
						<a href="index.php" class="list ">My Orders</a>
						<a href="account.php" class="active ">Account</a>
					</div>
				</div>
			</div>
		</div>
		<!-- large-screen-sidebar-starts -->

		<div class="content">
			<?php include_once'inc/header.php'; ?>
			<div class="container py-5">
				<div class="row justify-content-center">
					<div class="col-md-6">
						<div class="card shadow">
							<nav class="navbar navbar-light border personal-detail">
								<a class="h4 text-dark font-weight-bold pt-2">Password</a>
								<form class="form-inline">
									<a class="btn btn-dark mb text-white" onclick="myFunction()">Change Password</a>

								</form>
							</nav>
							<div class="card-body">

								<div class="form-row my-3" id="password">
									<div class="col-md mb-2 text-center">
										<img src="../images/icons-key.png"><br>
										<label class="h6 mt-2">Password : 123jfdjgdf</label>
									</div>
								</div>
								<form class="m-3" id="myDIV" style="display: none;">
									<div >
										<div class="form-row my-3">
											<div class="col-md mb-2">
												<label>Enter Current Password *</label>
												<input type="text" class="form-control" id="name1"  placeholder="Enter Current Password" required="">
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md mb-2">
												<label>Enter New Password *</label>
												<input type="text" class="form-control" id="name3"  placeholder="Enter New Password">
											</div>
										</div>

										<div class="form-row">
											<div class="col-md mb-2">
												<label>Confirm New Paasword *</label>
												<input type="tel" class="form-control" id="name4"  placeholder="Confirm New Paasword">
											</div>
										</div>
									</div>

									<div class="form-row my-3">
										<div class="col-md mb-2">
											<button type="button" class="btn btn-success" id="name2">Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<form action="advertisement_table.php" method="post" name="advertisement_form">
			<input type="hidden" id="service_for" name="service_for">
		</form>
		<script type="text/javascript">
			function openNav() {
				document.getElementById("mySidenav").style.width = "200px";
			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
			}



			function enable() {

				document.getElementById("name1").disabled = false;
				document.getElementById("name1").placeholder = "Enter  Name";  
				document.getElementById("name3").disabled = false;
				document.getElementById("name3").placeholder = "Enter Email";   
				document.getElementById("name4").disabled = false;
				document.getElementById("name4").placeholder = "Enter Moble Number"; 
				
			}



		</script>

	</body>
	</html>
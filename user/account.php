
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
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="card my-5 shadow">
							<nav class="navbar navbar-light  venue-registration border-bottom">
								<a class="h4 text-dark font-weight-bold pt-2">Account</a>
							</nav>

							<div class="card-body text-center m-5">
								<div class="row">
									<div class="col-md">
										<a href="personal.php">
											<div class="card">
												<div class="card-body">
													<img src="../images/icons-user.png">
													<h6 class="mt-2">Personal Info</h6>
												</div>
											</div>
										</a>
									</div>

									<div class="col-md">
										<a href="password.php">
											<div class="card">
												<div class="card-body">
													<img src="../images/icons-key.png">
													<h6 class="mt-2">Change Password</h6>
												</div>
											</div>
										</a>
									</div>
								</div>
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

		</script>

	</body>
	</html>
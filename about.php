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
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
					<h2>About Us</h2>
					<p>Welcome To The World Of Graphics Design</p>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
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
				
				<p class="text-justify">Let Apna Prachar handle all of your digital hurdles like political campaign, advertisement, graphics designing, election management, promotional messages & calls, videos, celebrity shorts, election materials, and web development. </p>
			
				<p class="text-justify">Our team is dedicated and ambitious towards the work  to do honestly and truly put their best effort. we design a whole process of election through various Optimisation we have a very skillful and talented personalities in there specified field. Create impactful and powerful designs for winning the battle . The process of analysing with various tools and Measurement create slogans that impact the voters make a effective social media campaign and write versatile speeches to connect the people. We do advertising and promotion with various activities we make a short video on a candidate how he work and how he deliver the best.</p>

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






    </script>
    <script src="js/payment.js"></script>
</body>
</html>
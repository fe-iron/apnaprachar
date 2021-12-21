<?php  include_once 'inc/head.php'; ?>
<?php 
    include_once 'connection.php';

    $conn = OpenCon();
	if(isset($_GET['q'])){
		$this_id = $_GET['q'];
	}else{
		$this_id = '';
	}

    $query = "SELECT * FROM celebs WHERE id='$this_id'";

    $celebs = $conn->query($query);

    $text = '';
    if($celebs){
        if ($celebs->num_rows > 0) {
			while($row = $celebs->fetch_assoc()){
				$desc = $row['description'];
				$name = $row['name'];
				$photo = $row['photo'];
				$fb = $row['facebook_link'];
				$tw = $row['twitter_link'];
				$yt = $row['youtube_link'];
				$insta = $row['instagram_link'];
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lokesh Kulshrestha</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/buy_now.js"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<link rel="stylesheet" type="text/css" href="css/celebrity.css">
</head>
<body>

	<?php include_once 'inc/header.php'; ?>
	<?php include_once 'inc/navbar.php'; ?>

	<section class="celebrity_banner celebrity_banner1">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h2 class="text-center"><?php echo $name; ?></h2>
					<p class="text-center"><?php echo explode(".", $desc)[0]; ?>.</p>
					<!-- <nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Celebrity Short</li>
						</ol>
					</nav> -->
				</div>
			</div>
		</div>
	</section>

	<section class="img-detail">
		<div class="container">
			<div class="row">
				<div class="col-md text-center">
					<div class="card">
						<div class="img-box">
							<img src="admin-panel/upload/celebs/<?php echo $photo; ?>" alt="">
						</div>
						<div class="card-body text-center">
							
							<p class="mb-0"></p>
							<div class="icon my-2">
							<?php if($fb != ""){?>
								<a href="<?php echo $fb; ?>" target="_blank" class="">
									<img src="images/icons/fb.png" style="height: 25px;">
								</a>
							<?php } if($insta != ""){ ?>
								<a href="<?php echo $insta; ?>" class="ml-2" target="_blank">
									<img src="images/icons/instagram.png" style="height: 25px;">
								</a>
							<?php }if($yt != ""){?>
		                    	<a href="<?php echo $yt; ?>" target="_blank" class="ml-2">
									<img src="images/icons/yt.png" style="height: 25px;">
								</a>
							<?php }if($tw != ""){?>
						    	<a href="<?php echo $tw; ?>" target="_blank" class="ml-2">
									<img src="images/icons/tw.png" style="height: 25px;">
								</a>
								<?php }?>								
							</div>
						</div>

					</div>
					<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Book Now</button>
				</div>
			</div>
		</div>
	</section>

	<section class="profile_description">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Profile Description</h5>
						</div>
						<div class="card-body">
							<p class="card-text">
								<?php echo $desc; ?>								
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Naqui Hasan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<section class="">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md">
									<form>
										<div class="form-row">
											<div class="col mb-3">
												<label>Name*</label>
												<input type="text" class="form-control name" placeholder="Enter Your Name *" required="" />
											</div>
											
										</div>
										<div class="form-row">
											<div class="col mb-3">
												<label>Contact Number*</label>
												<input type="tel" class="form-control phone" placeholder="Enter Phone Number *" required="" />
											</div>
										</div>
										<div class="form-row">
											<div class="col mb-2">
												<label>Email Id*</label>
												<input type="email" class="form-control email" placeholder="Enter Email Id *" required="" />
											</div>
										</div>
										<div class="form-row">
											<div class="col mb-3">
												<label>Purpose For Hiring*</label>
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
											</div>
										</div>

										<div class="form-row">
											<div class="col mb-2">
												<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
				</div>
				
			</div>
		</div>
	</div>

	



	


	



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
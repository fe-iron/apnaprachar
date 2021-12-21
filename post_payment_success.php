<?php
	include 'connection.php';

    $con = OpenCon();

if(isset($_POST['mobile'])){
	$target_dir = "admin-panel/upload/";  
	$flag1 = false;
	$flag2 = false;
	$payment_id = $_POST['payment_id'];
	$amount = $_POST['amount'];
	$mobile = $_POST['mobile'];
	$name = $_POST['fname'];
	$city = $_POST['city'];
	$service_for  = $_POST['service_for'];

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = '';
	}
	

	$photo = $_FILES['photo']['name'];
	// echo $_FILES['photo']['name'];
	$target_file1 = $target_dir . basename($_FILES["photo"]["name"]);
	// Select file type
	$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
	// Valid file extensions
	$extensions_arr = array("jpg","jpeg","png");

	// Check extension
	if(in_array($imageFileType1,$extensions_arr) ){
	   // Upload file
	   if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_dir.$photo)){
		  // Insert record
		  $flag1 = true;
	   }
	}else{
		// echo $kyc;
		header("Location: index.php?result=Image Saving Failed!".$photo);
	}


	
	if(isset($_FILES['belonging']['name'])){
		$pictures = $_FILES['pictures']['name'];
		$target_file2 = $target_dir . basename($_FILES["pictures"]["name"]);
		// Select file type
		$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

		// Check extension
		if(in_array($imageFileType2,$extensions_arr)){
		// Upload file
		if(move_uploaded_file($_FILES['pictures']['tmp_name'],$target_dir.$pictures)){
			// Insert record
			$flag2 = true;
		}
		}else{
			// echo $bank_statement;
			header("Location: index.php?result=Belonging Image Saving Failed!".$pictures);
		}
	}else{
		$pictures = '';
	}
	


	if($flag1 || $flag2){
		$query = "INSERT INTO book_services (name, mobile, email, service_price, pictures, belonging_pictures1, service_for, payment_id)
				values('$name', '$mobile', '$email', '$amount', '$photo', '$pictures', '$service_for', '$payment_id')";
		 
		  $result = mysqli_query($con,$query);
		  if($result){
				// $_SESSION['loan_id'] = mysqli_insert_id($conn);
				$msg = "Successfully saved!";
				header("Location: index.php?result=".$msg);
		   }else{
			  //   echo mysqli_error($conn);
				$msg = "Update Failed!";
				// echo "update failed";
				header("Location: index.php?result=DB Saving Failed! ".$msg);
		   }
		   
	}
}
?>
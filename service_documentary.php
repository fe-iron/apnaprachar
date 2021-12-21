<?php
    include 'connection.php';
    $conn = OpenCon();
    if(isset($_POST['phone'])){
        
        $target_dir = "admin-panel/upload/";        
        $name = $_POST['name'];
        $phone = $_POST['mobile'];
        if(isset($_POST['email'])){
            $email  = $_POST['email'];
        }else{
            $email = '';
        }
        

        $budget  = $_POST['budget'];
        $service_for = $_POST['service_for'];

        $desc  = $_POST['desc'];

        if($flag1 && $flag2){
            $query = "INSERT INTO book_services (name, mobile, email, service_price, description, service_for)
                    values('$name', '$phone', '$email', '$price', '$desc', '$service_for')";
            
            $result = mysqli_query($conn,$query);
            if($result){
                    $_SESSION['message'] = "Successfully saved!";

			        header("Location: video.php");
            }else{
                //   echo mysqli_error($conn);
                    $_SESSION['message'] = "Update Failed!";

			        header("Location: video.php");
            }
            
        }
        header("Location: video.php");
    }
?>
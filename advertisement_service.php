<?php
    include 'connection.php';
    $conn = OpenCon();
    if(isset($_POST['phone'])){
                 
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email  = $_POST['email'];
            $budget  = $_POST['budget'];
            $desc  = $_POST['description'];
            $service_for  = $_POST['service_for'];
      
            
    
           
     $query = "INSERT INTO `book_services` (name,mobile,email,service_price,description,service_for) VALUES ('$name','$phone','$email','$budget','$desc','$service_for')";
                 
                  $result = mysqli_query($conn,$query);
                  if($result){
                        // $_SESSION['loan_id'] = mysqli_insert_id($conn);
                        $msg = "Successfully saved!";
                        header("Location: advertisement.php?result=".$msg);
                   }else{
                      //   echo mysqli_error($conn);
                        // $msg = "Update Failed!";
                        // echo "update failed";
                        header("Location: advertisement.php?result=DB Saving Failed!");
                   }
                   
            
        }
?>	
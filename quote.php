<?php
    include("connection.php");
    $conn = OpenCon();
    if(isset($_POST['mobile'])){
         $fname = $_POST['name'];
         $mobile = $_POST['mobile'];
         $email = $_POST['email'];         
         $desc = $_POST['desc'];

     
             $query = "INSERT INTO quote (name, mobile, email, description)
                         VALUES('$fname', '$mobile', '$email', '$desc')";
             $result = mysqli_query($conn,$query);
             if($result){
                   // $_SESSION['loan_id'] = mysqli_insert_id($conn);
                   $_SESSION['message'] = "Successfully Saved!";
              }else{
                //    echo mysqli_error($conn);
                   $_SESSION['message'] = "Update Failed!";
              }
             
              header("Location: index.php");
     }
?>
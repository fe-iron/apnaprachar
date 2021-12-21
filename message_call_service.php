<?php
    include 'connection.php';
    $conn = OpenCon();
    if(isset($_POST['phone'])){
                 
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email  = $_POST['email'];
            $msg_no  = $_POST['msg_no'];
            $msg_character  = $_POST['msg_character'];
            $desc  = $_POST['description'];
            $service_for  = $_POST['service_for'];
    
            
    
           
     $query = "INSERT INTO `message_calls` (name,mobile,email,no_of_message,msg_charachters,description,service_for) VALUES ('$name',$phone,'$email',$msg_no,$msg_character,'$desc','$service_for')";
                 
                  $result = mysqli_query($conn,$query);
                  if($result){
                        // $_SESSION['loan_id'] = mysqli_insert_id($conn);
                        $msg = "Successfully saved!";
                        header("Location:message_call.php?result=".$msg);
                   }else{
                      //   echo mysqli_error($conn);
                        // $msg = "Update Failed!";
                        // echo "update failed";
                        header("Location: :message_call.php?result=DB Saving Failed!");
                   }
                   
            
        }
?>	
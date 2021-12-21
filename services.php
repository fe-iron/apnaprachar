<?php
    include 'connection.php';
    $conn = OpenCon();
    if(isset($_POST['phone'])){
            $target_dir = "admin-panel/upload/";        
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email  = $_POST['email'];
            $belong  = $_POST['belong'];
            $price  = $_POST['price'];
            $occasion  = $_POST['occasion'];
            $desc  = $_POST['desc'];
            $service_for  = $_POST['service_for'];
    
            $photo = $_FILES['photo']['name'];
            $target_file1 = $target_dir . basename($_FILES["photo"]["name"]);
            // Select file type
            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png","pdf");
    
            // Check extension
            if( in_array($imageFileType1,$extensions_arr) ){
               // Upload file
               if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_dir.$photo)){
                  // Insert record
                  $flag1 = true;
               }
            }else{
                // echo $kyc;
                header("Location: graphic_design.php?result=Image Saving Failed!".$photo);
            }
    
    
            
            
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
                header("Location: graphic_design.php?result=Image Saving Failed!".$pictures);
            }
      
    
            if($flag1 && $flag2){
                $query = "INSERT INTO book_services (name, mobile, email, belong, service_price, occasion, pictures, belonging_pictures1, description, service_for)
                        values('$name', '$phone', '$email', '$belong', '$price', '$occasion', '$photo', '$pictures', '$desc', '$service_for')";
                 
                  $result = mysqli_query($conn,$query);
                  if($result){
                        // $_SESSION['loan_id'] = mysqli_insert_id($conn);
                        $msg = "Successfully saved!";
                        header("Location: graphic_design.php?result=".$msg);
                   }else{
                      //   echo mysqli_error($conn);
                        $msg = "Update Failed!";
                        // echo "update failed";
                        header("Location: graphic_design.php?result=DB Saving Failed!".$msg);
                   }
                   
            }
        }
?>	
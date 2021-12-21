<?php
if(empty($_GET)) {
	$msg = " ";
}else{
	$msg = $_GET['result'];
}
// function mail_attachment ($from , $to, $subject, $message, $attachment){
//     $fileatt = $attachment; // Path to the file
//     $fileatt_type = "application/octet-stream"; // File Type 
    
//     $start = strrpos($attachment, '/') == -1 ? 
//        strrpos($attachment, '//') : strrpos($attachment, '/')+1;
           
//     $fileatt_name = substr($attachment, $start, 
//        strlen($attachment)); // Filename that will be used for the 
//        // file as the attachment 
    

//     $email_from = $from; // Who the email is from
//     $subject = "New Attachment Message";
    
//     $email_subject =  $subject; // The Subject of the email 
//     $email_txt = $message; // Message that the email has in it 
//     $email_to = $to; // Who the email is to
    
    
//     $headers = "From: ".$email_from; 
//     $file = fopen($fileatt,'rb'); 
//     $data = fread($file,filesize($fileatt)); 
//     fclose($file); 
    
//     $msg_txt="\n\n You have recieved a new attachment message from $from";
//     $semi_rand = md5(time()); 
//     $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
//     $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . "
//        boundary=\"{$mime_boundary}\"";
    
//     $email_txt .= $msg_txt;
       
//     $email_message .= "This is a multi-part message in MIME format.\n\n" . 
//        "--{$mime_boundary}\n" . "Content-Type:text/html; 
//        charset = \"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . 
//        $email_txt . "\n\n";

//     $data = chunk_split(base64_encode($data));
    
//     $email_message .= "--{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" .
//        " name = \"{$fileatt_name}\"\n" . //"Content-Disposition: attachment;\n" . 
//        //" filename = \"{$fileatt_name}\"\n" . "Content-Transfer-Encoding: 
//        "base64\n\n" . $data . "\n\n" . "--{$mime_boundary}--\n";
           
//     $ok = mail($email_to, $email_subject, $email_message, $headers);
    
//     if($ok) {
//        echo "File Sent Successfully.";
//        unlink($attachment); // delete a file after attachment sent.
//     }else {
//        die("Sorry but the email could not be sent. Please go back and try again!");
//     }
// }

   include 'connection.php';
    $conn = OpenCon();
    if(isset($_POST['mobile'])){       
        $fname = $_POST['fname'];
        $mobile = $_POST['mobile'];
        $lname = $_POST['lname'];
        $desc = $_POST['desc'];
        $email = $_POST['email'];

        $target_dir = "admin-panel/upload/";   
        $photo = $_FILES['img']['name'];
            $target_file1 = $target_dir . basename($_FILES["img"]["name"]);
            // Select file type
            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png");
    
            // Check extension
            if( in_array($imageFileType1,$extensions_arr) ){
               // Upload file
               if(move_uploaded_file($_FILES['img']['tmp_name'],$target_dir.$photo)){
                  // Insert record
                  $flag1 = true;
               }
            }else{
                // echo $kyc;
                echo "Image Saving Failed!".$photo;
            }
    
        

//                     $to      = $email;
//                     $subject = 'Registration Successfull!';
                    
//                     $headers = 'From: info@apnaprachar.com' . "\r\n" .
//                         'Reply-To: info@apnaprachar.com' . "\r\n" .
//                         'X-Mailer: PHP/' . phpversion();
//                     $message = 'Registration Details' . "\n" . '
//                         Email: '. $email. "\n" . '
//                         Full Name: ' . $fname . $lname . "\n" . '
//                         Mobile: ' . $mobile . "\n" . '
//                         Description: ' . $desc . "\n" . 'Apna Prachar ';
        
//       $retval = mail_attachment($from, $to, $subject, $message, $img);

//       if( $retval == true ) {
//           echo "Message sent successfully...";
//        }else {
//           echo "Message could not be sent...";
//        }
        
    }


   /* 
 * Custom PHP function to send an email with multiple attachments 
 * $to Recipient email address 
 * $subject Subject of the email 
 * $message Mail body content 
 * $senderEmail Sender email address 
 * $senderName Sender name 
 * $files Files to attach with the email 
 */ 
   function multi_attach_mail($to, $subject, $message, $senderEmail, $senderName, $files = array()){ 
      // Sender info  
      $from = $senderName." <".$senderEmail.">";  
      $headers = "From: $from"; 

      // Boundary  
      $semi_rand = md5(time());  
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  

      // Headers for attachment  
      $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";  

      // Multipart boundary  
      $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
      "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";  

      // Preparing attachment 
      if(!empty($files)){ 
         for($i=0;$i<count($files);$i++){ 
            if(is_file($files[$i])){ 
                  $file_name = basename($files[$i]); 
                  $file_size = filesize($files[$i]); 
                  
                  $message .= "--{$mime_boundary}\n"; 
                  $fp =    @fopen($files[$i], "rb"); 
                  $data =  @fread($fp, $file_size); 
                  @fclose($fp); 
                  $data = chunk_split(base64_encode($data)); 
                  $message .= "Content-Type: application/octet-stream; name=\"".$file_name."\"\n" .  
                  "Content-Description: ".$file_name."\n" . 
                  "Content-Disposition: attachment;\n" . " filename=\"".$file_name."\"; size=".$file_size.";\n" .  
                  "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
            } 
         } 
      } 
      
      $message .= "--{$mime_boundary}--"; 
      $returnpath = "-f" . $senderEmail; 
      
      // Send email 
      $mail = mail($to, $subject, $message, $headers, $returnpath);  
      
      // Return true if email sent, otherwise return false 
      if($mail){ 
         return true; 
      }else{ 
         return false; 
      } 
   }


   // Email configuration 
   $to = $email; 
   $from = 'contact@pg3entertainment.in'; 
   $fromName = 'Apna Prachar'; 
   
   $subject = 'Send Email with Multiple Attachments in PHP by CodexWorld';  
   
   // Attachment files 
   $files = array( 
      'admin-panel/upload/'. $photo, 
      'admin-panel/upload/'. $photo, 
      'admin-panel/upload/'. $photo
   ); 
   
   $htmlContent = ' 
      <center><h3>Thanks for Registration with PG3 Entertainment</h3></center>
      <h4>These are the details that you shared with us.</h4> 
      <p><b>Total Attachments:</b> '.count($files).'</p>
      <p><b>Full Name:</b> '.$fname.' '.$lname.'</p>
      <p><b>Mobile Number:</b> '.$mobile.'</p>
      <p><b>Email:</b> '.$email.'</p>'; 
   
   // Call function and pass the required arguments 
   $sendEmail = multi_attach_mail($to, $subject, $htmlContent, $from, $fromName, $files); 
   
   // Email sending status 
   if($sendEmail){ 
      echo 'The email is sent successfully.'; 
   }else{ 
      echo 'Email sending failed!'; 
   }
?>

<!DOCTYPE html>
<html>
<body>
<?php 
					if($msg == "Successfully saved!"){
						print '<h2 class="text-success" style="text-align: center">'.$msg.'</h2>';
					}else{
						print '<h2 class="text-danger" style="text-align: center">'.$msg.'</h2>';
					}
					?>
<h2>HTML Forms</h2>

<form action="" method="post" enctype="multipart/form-data">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John" required><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe" required><br><br>
  <label for="lname">Mobile Number:</label><br>
  <input type="tel" id="" name="mobile" value="Enter mobile" required><br><br>
  <label for="lname">Description:</label><br>
  <input type="text" name="desc" value="Enter something" required><br><br>
  <label for="lname">Email:</label><br>
  <input type="email" id="" name="email" value="Enter email" required><br><br>
  <label for="lname">Upload:</label><br>
  <input type="file" id="" name="img" required><br><br>
  <input type="submit" value="Submit" name="submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called mail.</p>

</body>
</html>
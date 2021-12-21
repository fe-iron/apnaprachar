<?php

    include 'connection.php';

    $con = OpenCon();

    if(empty($_GET)) {
        $msg = " ";
    }else{
        $msg = $_GET['result'];
    }

    session_start();
    // If form submitted, insert values into the database.
if (isset($_POST['email'])){
    // removes backslashes
        $username = stripslashes($_REQUEST['email']);
            //escapes special characters in a string
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
    
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE email='$username'
        and password='".md5($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        
    if($rows==1){

            $row = $result->fetch_assoc();
            $_SESSION['username'] =  $row['full_name'];
            $_SESSION['email'] =  $row['email'];
            $msg = "Login Successfully!";
            header("Location: index.php?result=".$msg);
    }else{
        $msg = "Wrong Credentials!";   
    }
}

?>


<?php  include_once 'inc/head.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/graphic_design.css">
    <script src="js/buy_now.js"></script>
</head>
<body>


    <style type="text/css">
        .card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-image: linear-gradient( 
90deg, rgb(61 85 117) 0%, rgb(107 142 187) 35%, rgb(71 97 130) 100%);
    border-bottom: 1px solid rgba(0,0,0,.125);
    color: white;
   }
    </style>




    <?php include_once 'inc/header.php'; ?>

    <?php include_once 'inc/navbar.php'; ?>

    

    <section class="garphics_content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 py-5">
                    <?php 
                    if($msg == "Registered Successfully!"){
                        print '<h2 class="text-success" style="text-align: center">'.$msg.'</h2>';
                    }else{
                        print '<h2 class="text-danger" style="text-align: center">'.$msg.'</h2>';
                    }
                    ?>
                    <div class="card" id="form">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">

                                <div class="form-row">
                                    <div class="col-md mb-3">
                                        <label>Email*</label>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md mb-3">
                                        <label>password*</label>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                                    </div>
                                </div>

                                
                        
                                <div class="form-row">
                                    <div class="col-md mb-3">

                                        <button type="submit" name="submit" class="btn btn-dark float-right">SUBMIT</button>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <!-- <div class="col-md">
                                        <button type="submit" name="submit" class="btn btn-dark float-right">SUBMIT</button>
                                    </div> -->
                                    <div class="col-md">
                                        Register Now!! <a href="signup.php" class="ml-2 btn btn-info">Sign Up</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    















    <?php include_once 'inc/footer.php'; ?>

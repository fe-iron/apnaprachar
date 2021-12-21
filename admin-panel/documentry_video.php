<?php include_once'inc/head.php'; 

include '../connection.php';
include 'auth.php';    
$conn = OpenCon();

$sql = "SELECT * FROM book_services WHERE service_for='documentary'";

$result = $conn->query($sql);

?>

<link rel="stylesheet" type="text/css" href="inc/css/style.css">

<body>
  <section>
    <!-- large-screen-sidebarstarts -->
    <div class="sidebar">
      <div class="logo">
        <h3 class="">
          <img src="../images/logo.png">
        </h3>
      </div>
      <div class="" id="sidebar-here">
       <a href="graphic_design_table.php" class="list ">Graphic Design</a>
       <a href="video_table.php" class="active">Video</a>
       <a href="message_call_table.php" class="list ">Message & Call</a>
       <a href="advertisement.php" class="list ">Advertisement</a>
       <a href="celebrity_table.php" class="list">Celebrity Short</a>
       <a href="election_management.php" class="list ">Election Management</a>
       <a href="election_material.php">Election Material</a>
       <a href="web_app_development_table.php" class="">Web & App Development</a>
     </div>
   </div>

   <!-- large-screen-sidebar-ends -->

   <!-- small-screen-sidebar starts -->
   <div class="small-screen-sidebar">
    <div id="mySidenav" class="sidenav">
     <div class="logo bg-color-sidenav">

       <!--  <a href="index.php"><img src="images/wmk-final.png" height="60" width="100"> <span class="float-right"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></span></a> -->

       <div class="d-flex bd-highlight">
        <div class=" bd-highlight">
          <h3 class="">
            <img src="../images/logo.png">
          </h3>
        </div>
        <div class="p-2 bd-highlight">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
      </div>

    </div>
    <div class="pt-0" id="sidebar-here">
      <div class="pt-3" id="sidebar-here">
       <a href="graphic_design_table.php" class="list">Graphic Design</a>
       <a href="video_table.php" class="active">Video</a>
       <a href="message_call_table.php" class="list ">Message & Call</a>
       <a href="advertisement.php" class="list ">Advertisement</a>
       <a href="celebrity_table.php" class="list">Celebrity Short</a>
       <a href="election_management.php" class="list ">Election Management</a>
       <a href="election_material.php">Election Material</a>
       <a href="web_app_development_table.php" class="">Web & App Development</a>
     </div>
   </div>
 </div>
</div>
<!-- large-screen-sidebar-starts -->

<div class="content">

  <?php include_once'inc/header.php'; ?>

  <div class="container">

    <div class="row justify-content-center">
     <div class="col-md-11">
      <div class="card my-5 shadow">
        <nav class="navbar navbar-light  venue-registration border-bottom">
          <a class="h4 text-dark font-weight-bold pt-2">Documentry Video  </a>
          <div class="form-inline">
              <a href="#" class="btn btn-info text-white mr-2" onclick="myFunction()">Filter</a>
              <div class="filter-item" id="myDIV" style="display: none;">
                <form>
                  <div class="form-group">
                    <label for="formGroupExampleInput" class="mb-1">Date</label>
                    <input type="date" name="date" class="form-control mb-3" id="filter_date" placeholder="date" onchange="filter('date', 'documentary')">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2" class="mb-1">Status</label>
                    <select class="form-control"  onchange="filter('status', 'documentary')" id="filter_status">
                      <option value="">Select Status</option>
                      <option value="1">Complete</option>
                      <option value="0">Incomplete</option>
                    </select>
                  </div>
                </form>
              </div>
            <a href="video_table.php" class="btn btn-info">Back</a>
          </div>
        </nav>

        <div class="card-body text-center">

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="border">
                <tr>
                  <th scope="col" class="border-right text-center">Sr. No.</th>
                  <th scope="col" class="border-right text-center">Date</th>
                  <th scope="col" class="border-right text-center">Status</th>
                  <th scope="col" class="border-right text-center">Name</th>
                  <th scope="col" class="border-right text-center">Mobile</th>
                  <th scope="col" class="border-right text-center">Email</th>
                  <th scope="col" class="border-right text-center">Description</th>
                  <th scope="col" class="border-right text-center">Amount <br /> ( INR )</th>
                </tr>
              </thead>
              <tbody id="filter_tbody"> 
                <?php
                if ($result->num_rows > 0) {
                        // output data of each row
                  $text = '';
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
                    $i += 1;
                    $date = str_replace("-", "/", $row['date']);
                            $text= $text. '<tr class="border-bottom">
                            <td class="border-right border-left text-center">'.$i.'</td>
                            <td class="border-right border-left text-center">'.$date.'</td>';

                    if($row['status']){
                      $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                    }else{
                      $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `documentary_video.php`);">Processing</a></td>';
                    }
                    $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                    <td class="border-right text-center">'.$row['mobile'].'</td>
                    <td class="border-right text-center">'.$row['email'].'</td>
                    <td class="border-right text-center">'.$row['description'].'</td>
                    <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>
                    </tr> ';
                  }
                  echo $text;
                }
                ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>

</div>
</section>

<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  





</script>

</body>

</html>
<?php include_once'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">







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
        <a href="video_table.php">Video</a>
        <a href="message_call_table.php" class="list ">Message & Call</a>
        <a href="advertisement.php" class="list ">Advertisement</a>
        <a href="celebrity_table.php" class="list ">Celebrity Short</a>
        <a href="election_management.php" class="list ">Election Management</a>
        <a href="election_material.php" class="active">Election Material</a>
        <a href="web_app_development_table.php" class="">Web & App Development</a>
   </div>
 </div>

 <!-- large-screen-sidebar-ends -->





 <!-- small-screen-sidebar starts -->
 <div class="small-screen-sidebar">
  <div id="mySidenav" class="sidenav">
   <div class="logo bg-color-sidenav">
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
     <a href="graphic_design_table.php" class="list ">Graphic Design</a>
        <a href="video_table.php">Video</a>
        <a href="message_call_table.php" class="list ">Message & Call</a>
        <a href="advertisement.php" class="list ">Advertisement</a>
        <a href="celebrity_table.php" class="list ">Celebrity Short</a>
        <a href="election_management.php" class="list ">Election Management</a>
        <a href="election_material.php" class="active">Election Material</a>
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
      <div class="col-md-10">
        <div class="card my-5 shadow">
          <nav class="navbar navbar-light  venue-registration border-bottom">
            <a class="h4 text-dark font-weight-bold pt-2">Election Material List</a>
            <form class="form-inline">
              <!-- <a href="gallery_image_list.php" class="btn btn-primary">View news List</a> -->
            </form>
          </nav>

          <div class="card-body ">
          <div class="card mb-3">
              <div class="row no-gutters p-0">
                <div class="col-md-4 card-image p-3">
                  <p class="text-xenter text-dark font-weight-bold">Coming Soon!</p>
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    
                  </div>
                </div>
              </div>
            </div> 
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
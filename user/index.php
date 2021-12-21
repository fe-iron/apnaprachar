
<?php include_once 'inc/head.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../admin-panel/inc/css/style.css">
</head>
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
      <a href="index.php" class="list active">My Orders</a>
      <a href="account.php" class=" ">Account</a>
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
       <a href="index.php" class="list active">My Orders</a>
       <a href="account.php" class=" ">Account</a>
     </div>
   </div>
 </div>
</div>
<!-- large-screen-sidebar-starts -->

<div class="content">

  <?php include_once'inc/header.php'; ?>
  <div class="container py-5 wishlist">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <nav class="navbar navbar-light border venue-registration border-bottom">
            <a class="h4  text-white font-weight-bold pt-2"> My Order(1)</a>
            <form class="form-inline">

            </form>
          </nav>
          <div class="card-body border-bottom"> <!-- Put The Php Loop Here -->
            <h5 class="font-weight-bold">&#8377; 999 Facebook Graphic Design</h5>
            <h5 class="font-weight-bold text-success"> Price: ₹ 1178/- <small>( inc. all taxes )</small></h5>
            
            <div class="row">
              <div class="col-md">
                <h6 class="mb-0 font-weight-bold">Order Description</h6>
                <li>30 posters </li>
                <li> Festival Pack </li>
                <li> Calendar Year Pack </li>

                <h6 class="mb-0 font-weight-bold pt-3">Your Images</h6>
                <li>30 posters </li>

                <h6 class="mb-0 font-weight-bold pt-3">Belonging Images</h6>
                <li>30 posters </li>
              </div>

              <div class="col-md">
                <h6 class="mb-0 font-weight-bold">Name</h6>
                <p>Naqui Hasan</p>

                <h6 class="mb-0 font-weight-bold">Contact Number</h6>
                <p>9540126057 </p>

                <h6 class="mb-0 font-weight-bold">Email Id</h6>
                <p>naquijmi@gmail.com </p>
              </div>

              <div class="col-md">
               <h6 class="mb-0 font-weight-bold">Paid Amount</h6>
               <p class="text-success"> Price: ₹ 1178/- ( incl 18% GST ) </p>


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
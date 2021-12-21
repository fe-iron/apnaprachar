<?php include_once'inc/head.php'; ?>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">



<?php include_once 'inc/header.php'; ?> 
<?php include_once 'inc/navbar.php'; ?> 

<section>
  <div class="container">
    <div class="row justify-content-center py-5">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Admin Login</h3>
          </div>
          <div class="card-body">
            <form class="m-3" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password">
              </div>

              <input type="submit" name="submit" class="btn btn-success" value="login In">
              <!-- <button class="btn btn-success" type="submit" name="submit">Log In</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





</section> <?php include_once 'inc/footer.php'; ?>
</body>
</html>
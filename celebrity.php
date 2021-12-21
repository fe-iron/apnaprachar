<?php  include_once 'inc/head.php'; ?>
<?php 
    include_once 'connection.php';

    $conn = OpenCon();

    $query = "SELECT * FROM celebs WHERE tag='celebs'";

    $celebs = $conn->query($query);

    $text = '';
    if($celebs){
        if ($celebs->num_rows > 0) {
            // output data of each row
            $i = 0;
            while($row = $celebs->fetch_assoc()) {
                $i += 1;
                $text = $text . '<div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                <div class="card celebrity-profile">
                  <div class="celebrity-img-box">
                    <img src="admin-panel/upload/celebs/'.$row['photo'].'" alt="img" />
                  </div>
                  <div class="card-body text-center">
                    <h4>'.$row['name'].'</h4>
                    <p class="mb-0">'.explode(".", $row['description'])[0].'</p>

                    <div class="icon my-3">';

                    
                    if($row['facebook_link'] != ""){
                      $text = $text . '<a href="'.$row['facebook_link'].'" target="_blank" class=""><img
                      src="images/icons/fb.png" style="height: 25px;" /></a>';
                    }if($row['instagram_link'] != ""){
                      $text = $text . '<a href="'.$row['instagram_link'].'" target="_blank" class="">
                      <img src="images/icons/instagram.png" style="height: 25px;" /></a>';
                    }if($row['twitter_link'] != ""){
                      $text = $text . '<a href="'.$row['twitter_link'].'" target="_blank" class=""><img
                      src="images/icons/tw.png" style="height: 25px;" /></a>';
                    }if($row['youtube_link'] != ''){
                      $text = $text . '<a href="'.$row['youtube_link'].'" target="_blank" class=""><img
                      src="images/icons/yt.png" style="height: 25px;" /></a>';
                    }
                    $text = $text . '</div>
                    <a href="celebrity_detail.php?q='.$row['id'].'" class="btn btn-primary btn-block">Book Now!</a>
                  </div>
                </div>
              </div>';
                  
            }
        }
    }

      CloseCon($conn);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Celebrity</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="js/buy_now.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <link rel="stylesheet" type="text/css" href="css/celebrity.css" />
</head>

<body>
  <?php include_once 'inc/header.php'; ?>
  <?php include_once 'inc/navbar.php'; ?>

  <section class="celebrity_banner">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <h2>Celebrity Short</h2>
          <p>Promote your business With Celebrities</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Celebrity Short</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="celebrity_content">
    <div class="container py-5">
      <div class="row">

        <div class="col-md">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
              aria-controls="v-pills-home" aria-selected="true">Singer</a>
            <!-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Actor</a> -->
          </div>
        </div>

        <div class="col-md-10">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="container fb-inner-content">

                <div class="row">
                  <div class="col-md p-0">
                    <?php 
                      if(isset($_SESSION['message'])){ 
                        if($_SESSION['message'] == "Successfully Saved!"){ ?>
                      <p class="text-success text-center"><?php  echo $_SESSION['message'];  ?></p>
                      <?php }else{ ?>
                      <p class="text-danger text-center"><?php  echo $_SESSION['message'];  ?></p>
                      <?php } ?>
                      <?php unset($_SESSION['message']);
                      }
										?>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md p-0">
                    <div class="card mb-3">
                      <div class="card-header">
                        <h4 class="mb-0">Celebrities</h4>
                      </div>
                      <div class="card-body">
                        <div class="row mt-4">
                          <?php echo $text; ?>
<!--                           
                          <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                            <div class="card celebrity-profile">
                              <div class="celebrity-img-box">
                                <img src="images/celebrity/lokesh.jpeg" alt="" />
                              </div>
                              <div class="card-body text-center">
                                <h4>Lokesh Kulshrestha</h4>
                                <p class="mb-0">Lokesh Kulshrestha is versatile Singer. He sang Bollywood Hindi,
                                  Punjabi, Semi Classic, Bollywood Rock.....</p>

                                <div class="icon my-3">
                                  <a href="https://www.facebook.com/lokesh.kulshrestha.3/" target="_blank" class=""><img
                                      src="images/icons/fb.png" style="height: 25px;" /></a>
                                  <a href="https://www.instagram.com/singer_lokesh_kulshrestha/" class="ml-2"
                                    target="_blank"><img src="images/icons/instagram.png" style="height: 25px;" /></a>
                                  <a href="https://www.youtube.com/channel/UChDg_v04UDPykJIXA5NhAGg" target="_blank"
                                    class="ml-2"><img src="images/icons/yt.png" style="height: 25px;" /></a>
                                  <a href="https://twitter.com/Lokeshthechamp/" target="_blank" class="ml-2"><img
                                      src="images/icons/tw.png" style="height: 25px;" /></a>
                                </div>
                                <a href="celebrity_detail.php" class="btn btn-primary btn-block">Hire!</a>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                            <div class="card celebrity-profile">
                              <div class="celebrity-img-box">
                                <img src="images/celebrity/lokesh.jpeg" alt="" />
                              </div>
                              <div class="card-body text-center">
                                <h4>Naqui Hasan</h4>
                                <p class="mb-0">Naqui Hasan has a personality that is distinctive and cute which makes
                                  all the eyes get...</p>

                                <div class="icon my-3">
                                  <a href="https://www.facebook.com/ApnaPracharcom-110028404774788/" target="_blank"
                                    class="ml-3"><img src="images/icons/fb.png" style="height: 25px;" /></a>
                                  <a href="https://www.instagram.com/apna_prachar/" class="ml-2" target="_blank"><img
                                      src="images/icons/instagram.png" style="height: 25px;" /></a>

                                  <a href="https://www.youtube.com/channel/UChDg_v04UDPykJIXA5NhAGg" target="_blank"
                                    class="ml-2"><img src="images/icons/tw.png" style="height: 25px;" /></a>
                                </div>
                                <a href="celebrity_detail.php" class="btn btn-primary btn-block">Hire!</a>
                              </div>
                            </div>
                          </div> -->

                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="container insta-inner-content">
                  <div class="row">
                    <div class="col-md p-0">
                      <div class="card mb-3">
                        <div class="card-header">
                          <h5 class="mb-0">Documentry Video</h5>
                        </div>
                        <div class="card-body"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
          </div>
        </div>
      </div>
  </section>

  <?php include_once 'inc/footer.php'; ?>

  <script type="text/javascript">
    // stickyElem =
    // document.querySelector(".flex-column");

    /* Gets the amount of height
      of the element from the
      viewport and adds the
      pageYOffset to get the height
      relative to the page */
    //currStickyPos =
    //stickyElem.getBoundingClientRect().top + window.pageYOffset;

    //window.onscroll = function() {

    /* Check if the current Y offset
          is greater than the position of
          the element */
    //     if (window.pageYOffset > currStickyPos) {
    //     	stickyElem.style.position = "sticky";
    //     	stickyElem.style.top = "10px";

    //     } else {
    //     	stickyElem.style.position = "relative";
    //     	stickyElem.style.top = "initial";
    //     }
    // }

    // Script for add more button starts here
    $(document).ready(function () {
      var i = 0;
      $("#addmore").on("click", function (e) {
        e.preventDefault();
        if (i == 4) {
          alert("you are allowed to add only 5 images");
          return;
        }
        i++;
        $("#dynamictag").append('<div  id="row' + i + '"><input type="file" name="pictures' + i +
          '" class="form-control-file" id="Upload" required> <span class="btn btn-danger btn_remove" id="' +
          i + '">DELETE</span></div>');
      });

      $(document).on("click", ".btn_remove", function () {
        i--;
        var button_id = $(this).attr("id");
        $("#row" + button_id + "").remove();
      });
    });
    // Script for add more button ends here
  </script>
  <script src="js/payment.js"></script>
  <script src="js/upload.js"></script>
</body>

</html>
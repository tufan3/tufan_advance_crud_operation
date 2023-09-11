<?php
session_start();
if (!isset($_SESSION['user_email'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Tufan</title>


  <?php
  include "link.php";
  ?>
</head>

<body class="sub_page background_image logininfo">
  <div class="hero_area">

    <!-- header section strats -->
    <?php
    include "dashboardHeader.php";
    ?>
    <!-- end header section -->

  </div>


  <!-- who section -->
  <section class="who_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img class="opacity-75" src="images/about-us.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box text-white">
            <div class="heading_container">
              <h2 class="mx-auto">
                WHO AM I?
              </h2>
            </div>
            <p class="fs-5">
              I am <b class="text-info">Md Robiul Islam Tufan</b>. I have completed my B.sc in CSE at Daffodil
              International University.
              My
              keen interest in Front-End and Back-End Developer(PHP).
              <br>
              I can assure you that I am quick learner, adaptive as well as an energetic person.
            </p>
            <div>
              <a href="#">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end who section -->


  <!-- info section && footer section -->
  <?php
  include "footer.php";
  ?>
  <!-- info section && footer section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>

</html>
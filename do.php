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

  <title>Esigned</title>

  <?php
  include "link.php";
  ?>
</head>

<body class="sub_page background_image">
  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include "dashboardHeader.php";
    ?>
    <!-- end header section -->
  </div>

  <!-- do section -->

  <section class="do_section layout_padding mt-4">
    <div class="container text-white">
      <div class="heading_container">
        <h2>
          What we do
        </h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna
        </p>
      </div>
      <div class="do_container">
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-3.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              HTML5
            </h6>
          </div>
        </div>
        <div class="box arrow-end arrow_bg">
          <div class="img-box">
            <img src="images/d-4.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              CSS
            </h6>
          </div>
        </div>
        <div class="box arrow-start arrow_bg">
          <div class="img-box">
            <img src="images/js.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              JavaScript
            </h6>
          </div>
        </div>
        <div class="box arrow-start arrow_bg">
          <div class="img-box">
            <img src="images/php.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              PHP
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-2.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Development
            </h6>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="images/d-5.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Wordpress
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end do section -->

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
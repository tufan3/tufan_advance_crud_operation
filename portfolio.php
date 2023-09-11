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

<body class="sub_page background_image">
  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include "dashboardHeader.php";
    ?>
    <!-- end header section -->
  </div>


  <!-- work section -->
  <section class="work_section layout_padding mt-4 text-white">
    <div class="container">
      <div class="heading_container">
        <h2 class="mx-auto">
          CREATIVE WORKS
        </h2>
        <p>
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation
        </p>
      </div>
      <div class="work_container layout_padding2">
        <div class="box b-1">
          <img src="images/w-1.png" alt="">
        </div>
        <div class="box b-2">
          <img src="images/w-2.png" alt="">

        </div>
        <div class="box b-3">
          <img src="images/w-3.png" alt="">

        </div>
        <div class="box b-4">
          <img src="images/w-4.png" alt="">

        </div>
      </div>
    </div>
  </section>

  <!-- end work section -->

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
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

  <!-- contact section -->

  <section class="contact_section layout_padding mt-4">
    <div class="container">

      <div class="heading_container text-white">
        <h2>
          Request A Call Back
        </h2>
      </div>
      <div class="d-flex">
        <div class="col-md-5 mx-auto">
          <div class="contact-form me-4">
            <form action="contactProcess.php" method="POST">
              <div>
                <input class="bg-white opacity-75" type="text" placeholder="Full Name" id="name" name="name" required>
              </div>
              <div>
                <input class="bg-white opacity-75" type="text" placeholder="Phone Number" name="phone_number"
                  id="phone_number">
              </div>
              <div>
                <input class="bg-white opacity-75" type="email" placeholder="Email Address" id="email" name="email"
                  required>
              </div>
              <div>
                <textarea class="rounded-4 p-4 bg-white opacity-75" name="message" id="message" cols="50" rows="5"
                  placeholder="Message" required></textarea>
              </div>
              <div class="d-flex justify-content-center opacity-75">
                <button type="submit" class="btn_on-hover col-12 text-black fs-5 fw-bold">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-md-12 m-4 text-white">
            <div class="info_contact">
              <h5>
                Quick Contact
              </h5>
              <div class="d-flex gap-2 p-2">
                <div class="img-box">
                  <img class="" src="images/location-white.png" width="18px" alt="">
                </div>
                <p>
                  Ibrahimpur, Kafrul, Dhaka-1206
                </p>
              </div>
              <div class="d-flex gap-2 p-2">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  +8801303480281
                </p>
              </div>
              <div class="d-flex gap-2 p-2">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  robiultufan.dev@gmail.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->


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
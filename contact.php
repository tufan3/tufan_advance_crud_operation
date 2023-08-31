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

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php
    include "header.php";
    ?>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding mt-4">
    <div class="container">

      <div class="heading_container">
        <h2>
          Request A Call Back
        </h2>
      </div>
      <!-- <div class=""> -->
      <!-- <div class=""> -->
      <div class="d-flex">
        <div class="col-md-5 mx-auto">
          <div class="contact-form me-4">
            <form action="">
              <div>
                <input type="text" placeholder="Full Name ">
              </div>
              <div>
                <input type="text" placeholder="Phone Number">
              </div>
              <div>
                <input type="email" placeholder="Email Address">
              </div>
              <div>
                <input type="text" placeholder="Message" class="input_message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn_on-hover">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4 map_img-box">
          <img src="images/map-img.png" alt="">
        </div>
      </div>
      <!-- </div> -->
      <!-- </div> -->
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
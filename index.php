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

<body>
  <div class="hero_area">

    <!-- header section -->
    <?php
    include "dashboardHeader.php";
    ?>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        web agency
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                      </p>
                      <div class="">
                        <a style="text-decoration: none;" href="contact.php">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        web agency
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                      </p>
                      <div class="">
                        <a style="text-decoration: none;" href="contact.php">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        web agency
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                      </p>
                      <div class="">
                        <a style="text-decoration: none;" href="contact.php">
                          Contact us
                        </a>
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
    <!-- end slider section -->
  </div>

  <!-- do section -->

  <section class="do_section layout_padding">
    <div class="container">
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

  <!-- who section -->

  <section class="who_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/about-us.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                WHO AM I?
              </h2>
            </div>
            <p class="fs-5">
              I am Md Robiul Islam Tufan. I have completed my B.sc in CSE at Daffodil
              International University.
              My
              keen interest in Front-End and Back-End Developer(PHP).
              <br>
              I can assure you that I am quick learner, adaptive as well as an energetic person.
            </p>
            <div>
              <a style="text-decoration: none;" href="#">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end who section -->


  <!-- work section -->
  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
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

  <!-- client section -->
  <section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          WHAT CUSTOMERS SAY
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Tempor incididunt <br>
                  <span>
                    Dipiscing elit
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Tempor incididunt <br>
                  <span>
                    Dipiscing elit
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Tempor incididunt <br>
                  <span>
                    Dipiscing elit
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  Dipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- target section -->
  <section class="target_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              10+
            </h2>
            <h5>
              Years of Business
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              200+
            </h2>
            <h5>
              Projects Delivered
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              150+
            </h2>
            <h5>
              Satisfied Customers
            </h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="detail-box">
            <h2>
              100+
            </h2>
            <h5>
              Cups of Coffee
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end target section -->


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <div class="heading_container">
        <h2>
          Request A Call Back
        </h2>
      </div>
      <div class="">
        <div class="">
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
            <div class="col-md-5 map_img-box">
              <div class="col-md-12 m-4 text-black">
                <div class="info_contact">
                  <h5>
                    Contact Us
                  </h5>
                  <div class="d-flex p-2">
                    <div class="img-box">
                      <img class="w-50" src="images/location-black.png" width="18px" alt="">
                    </div>
                    <p>
                      Ibrahimpur, Kafrul, Dhaka-1206
                    </p>
                  </div>
                  <div class="d-flex p-2">
                    <div class="img-box">
                      <img class="w-50" src="images/telephone-black.png" alt="">
                    </div>
                    <p>
                      +8801303480281
                    </p>
                  </div>
                  <div class="d-flex p-2 gap-4">
                    <div class="img-box">
                      <img class="" src="images/email.png" alt="">
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
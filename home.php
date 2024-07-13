<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}



?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome Page</title>

    <!-- Favicons -->
  <link href="assets/img/favicon1.jpg" rel="icon">
  <!--<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  </head>

  <body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Pranay's </span>Creation</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
              <a href="logout.php">LOG OUT</a>
          </li>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  </header><!-- End Header -->

    <h1 class="text-center text-warning mt-5" >Welcome!
        <?php
            echo $_SESSION['username'];
        ?>
    </h1>

   <!-- ======= Services Section ======= -->
   <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Tutorials</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-laptop"></i> -->
                  </a>
                  <h4>Video Editing</h4>
                  <p>
                    <!-- Our video editing team is dedicated to crafting seamless and engaging narratives. From concept to final cut, we specialize in enhancing your visual stories and creating content that resonates with your audience. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/JgZcf-XnAOw?si=pLweQUQw34fjfzJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-camera"></i> -->
                  </a>
                  <h4>Letter Transparency</h4>
                  <p>
                    <!-- Immerse your audience in striking visuals with our photography services. From capturing candid moments to creating stunning portraits, our photographers have a keen eye for detail and a passion for telling stories through images. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/KnJsQ7rxx_M?si=4z2CjGA72NfYW04j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-headphones"></i> -->
                  </a>
                  <h4>8D Audio Cenversion</h4>
                  <p>
                    <!-- Immerse your audience in a three-dimensional audio experience with our 8D audio conversion services. Our audio specialists ensure that your music takes on a new dimension, offering a truly immersive and captivating sound. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/N85uWVPsnt8?si=A-Dcgj75whLTT7dh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-card-image"></i> -->
                  </a>
                  <h4>Graphic Desiging</h4>
                  <p>
                    <!-- Elevate your brand aesthetics with our skilled graphic designers. Whether it's creating eye-catching social media graphics, banners, or promotional materials, we bring your brand to life through visually stunning designs.                   -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/sqVWw8DutN0?si=xp7cdoyZi5sFla03" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-p-circle"></i> -->
                  </a>
                  <h4>Comic Logo Designs</h4>
                  <p>
                    <!-- Your brand identity starts with a logo. Our design team is committed to creating unique and memorable logos that capture the essence of your brand and make a lasting impression. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/Rnl-DW--QnI?si=eG1Dco7D4nxwZsJR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-journal-album"></i> -->
                  </a>
                  <h4>Classic Logo Design</h4>
                  <p>
                    <!-- Make a lasting first impression with captivating cover designs. Whether it's for your book, album, magzine, or any other project, our cover design team combines creativity and strategy to craft designs that entice and engage. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/hcG-ekUBOdg?si=Ll80Qni_rv0-t-iy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-book"></i> -->
                  </a>
                  <h4>Film Poster Design</h4>
                  <p>
                    <!-- Sharing knowledge is at the heart of our team. Dive into our tutorials where we break down the intricacies of video editing, graphic design, and audio conversion. Learn the skills to enhance your own creative endeavors. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/pSBcxTZm8Nk?si=H2C7EdYl4lad8t4v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-book"></i> -->
                  </a>
                  <h4>Trailer cut Syncronization</h4>
                  <p>
                    <!-- Sharing knowledge is at the heart of our team. Dive into our tutorials where we break down the intricacies of video editing, graphic design, and audio conversion. Learn the skills to enhance your own creative endeavors. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/e9ytXj63frM?si=27cVm99fjTLCTmFx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <!-- <i class="bi bi-book"></i> -->
                  </a>
                  <h4>Asthetic Logo Design</h4>
                  <p>
                    <!-- Sharing knowledge is at the heart of our team. Dive into our tutorials where we break down the intricacies of video editing, graphic design, and audio conversion. Learn the skills to enhance your own creative endeavors. -->
                    <iframe width="350" height="190" src="https://www.youtube.com/embed/jUYGFGBH6hQ?si=Ee5X99SgDbB66aoK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
        </div>
      </div>
    </div><!-- End Services Section -->

   

    <!--Designed By Section-->
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Pranay's Creation</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Designed by <a href="#">Ritesh Gadre</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!--End of Designed By Section-->



    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  </body>
</html>
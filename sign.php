<?php
$success=0;
$user=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    // $sql="insert into registration (username,password) 
    // values('$username','$password')";
    // $result=mysqli_query($con,$sql);

    // if($result){
    //     echo "Data inserted succesfully";
    // }else{
    //     die(mysqli_error($con));
    // }

    $sql="Select * from registration 
    where username='$username'";

    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo "User already exist";
            $user=1;

        }else{
            $sql="insert into registration (username,password) 
            values('$username','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
               // echo "Signup Successful";
               $success=1;
            }else{
                die(mysqli_error($con));
            }
        }
    }

    
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Signup page</title>

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
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html">About</a></li>
          <li><a class="nav-link scrollto" href="index.html">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html">Portfolio</a></li>
          
          <li><a class="nav-link scrollto" href="index.html">Contact</a></li>
          <li><a class="nav-link scrollto" href="#SIGNUP">SIGNUP</a></li>
          <li><a class="nav-link scrollto" href="http://localhost/registrations/signup1/login.php">LOGIN</a></li>

          <li>
            <div class="header-social-links d-flex">
              <!-- <a href="#" class="twitter"><i class="bu bi-twitter"></i></a> -->
              <a href="#" class="facebook"><i class="bu bi-youtube"></i></a>
              <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></a>
            </div>
          </li>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  </header><!-- End Header -->
  
  <?php
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> Ohh No Sorry! </strong> User already exist.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</button>
      </div>';
    }
  ?>

<?php
    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success! </strong> You are successfully signed up.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</button>
      </div>';
    }
  ?>


    <h1 class="text-center mt-5">Signup page</h1>
    <div class="container mt-5">
        <form action="sign.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Ener your Password" name="password">

            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
    </div>


    <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Pranay's </span>Creation</h2>
                </div>

                <p style="text-align: justify;">
                  We'd love to hear from you! Whether you have a project in mind, want to discuss a collaboration, or simply have questions, feel free to reach out to us. We're here to turn your creative ideas into reality.
                </p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-youtube"></i></a>
                    </li>
                    <!-- <li><a href="#"><i class="bi bi-twitter"></i></a></li> -->
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-6">
            <div class="footer-content">
              <div class="footer-head">
                <h4> Contact Information</h4>
                <p>
                  Connect with us on social media for updates, behind-the-scenes glimpses, and more:
                </p>
                <div class="footer-contacts">
                  <p><span>Phone :</span> +91 9665084301</p>
                  <p><span>General Inquiries :</span> pranayscreation36@gmail.com</p>
                  <p><span>Project Collaboration :</span> pranayscreation36@gmail.com</p>
                  <p><span>Working Hours :</span> 5pm-10pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
        </div>
      </div>
    </div>
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
    </div>
  </footer><!-- End  Footer -->

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
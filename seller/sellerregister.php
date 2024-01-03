<?php
include '../seller/connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    


    $sql = mysqli_query($conn , "INSERT INTO sellerregister (name,number,address,email,password) VALUES ('$name','$number','$address','$email','$password')");


    $row =mysqli_insert_id($conn);

    $login = mysqli_query($conn , "INSERT INTO login(login_id,email,password,role) VALUES ('$row','$email','$password' , 2)");


    if($sql){
        echo  '<div class="alert alert-light" role="alert">
         record insert
      </div>'
?>
<script>
    window.location.href="../user/index.php";
</script>
<?php
    }
}

















?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Groovin Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content ">
              <div class="card" style="width: 18rem;">
 
  <div class="card-body">
  <form action="" method="POST" >
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="NAME">
                        <label>Mobile</label>
                        <input type="mobile" name="number" class="form-control" placeholder="MOBILE">
                        <address>Address</address>
                        <textarea rows="3" name="address" class="form-control" placeholder="ADDRESS"></textarea>
                        <label>Email</label>
                        <input type="email" name="email" class="form-control " placeholder="EMAIL">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="PASSWORD">
                        <button type="submit" name="submit" class="btn btn-danger mt-4">Submit</button>
                        </form>
  </div>
</div>
            
              
              <div>
                <!--  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
        
          <!-- Slide 3 -->
          

        </div>

      <!--  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>-->

      </div>
    </div>
  </section><!-- End Hero -->




  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
</body>
</html>
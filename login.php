<?php
include '../project2/admin/connection.php';
session_start();


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql  = mysqli_query($conn , "SELECT *FROM login where  email='$email' and password='$password' ");
    if($sql)
    {
      $row = mysqli_fetch_assoc($sql);
      $count =mysqli_num_rows($sql);
      if($count == 1 && $row['role']==1)
      {
        $_SESSION['id'] = $row['login_id'];
        
          ?> 
        <script>
          window.location.href="./admin/index.php";
          </script>
          <?php
      }
           if($count == 1 && $row['role'] == 2)
           {
               $_SESSION['id'] = $row['login_id'];
               $id =$_SESSION['id'];
              $query = mysqli_query($conn, "SELECT *FROM sellerregister WHERE seller_id='$id'");
              $rows =mysqli_fetch_assoc($query);
              if($rows['approval_status'] == 1)
              {                 
                ?> 
                <script>
                  window.location.href="./seller/seller_home.php";
                  </script>
                  <?php
              }
            }
              ?>
<?php
                if($count == 1  && $row['role'] == 0)
                {
                    $_SESSION['id'] = $row['login_id'];
                    ?>
                    <script>
                    window.location.href="./user/user_home.php";
                    </script>
                    <?php
                }
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
  
  <link rel="icon" href="./user/assets/img/favicon.png">
  <link rel="apple-touch-icon" href="./user/assets/img/apple-touch-icon.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link rel="stylesheet" href="./user/assets/vendor/animate.css/animate.min.css">
  <link href="./user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./user/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="./user/assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="./user/assets/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="./user/assets/vendor/swiper/swiper-bundle.min.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="./user/assets/css/style.css">

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
    <div class="carousel-item active" style="background-image: url(./user/assets/img/slide/slide-1.jpg);">
    
            <div class="carousel-container">
            
              <div class="carousel-content">
              <div class="card" style="width: 18rem;">
 
 <div class="card-body">
              
                <form method="POST">
                    <label class="" style="text-align: left;">Email</label>
                    <input type="email" name="email" class="form-control " placeholder="Email">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password">
                    <button type="submit" name="submit" class="btn btn-success mt-4">login</button>
                </form>
              
             
              
              <div>
              </div>
                 
                </div>
              </div>
          </div>
            </div>
    </div>
          


   

        </div>

        

      </div>
    </div>
  </section><!-- End Hero -->


   

  <!-- Vendor JS Files -->
 
  <script src="./user/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./user/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  
  <script src="./user/assets/js/main.js"></script>

</body>

</html>
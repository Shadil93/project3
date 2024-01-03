<?php
include '../user/connecion.php';
$id = $_SESSION['id'];
if(isset($_POST['submit'])){
  
  $payment = $_POST['payment'];
  $address = $_POST['address'];
 // $product_name = $_POST['product_name'];
  //$product_price = $_POST['product_price'];

  $sql = mysqli_query($conn ,"INSERT INTO orderaddress(payment,address,)VALUES('$payment','$address')");
  
  if($sql){
    echo '<script>alert("order successfully")</script>';
    //echo '<script>window.location.href="payment.php";</script>';
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


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
    
    <h1 align="center" style="background-color: black; width:100%;color:white;">Payment Method</h1>
  <!-- Slide 1 -->

<div class="flex-container" style="display: flex; ">
        <div class="row" style="margin-left:5rem">
      <div class="card" style="width:37rem;margin-top:5rem;">
        <h3 style="text-align:center">ADDRESS</h3>
        
        <?php 
       
        $query = mysqli_query($conn , "SELECT *FROM userregister WHERE id='$id'");
        $data = mysqli_fetch_assoc($query);
        
?>
       <p>address:<?php echo  $data['address'];?></p>
        </div>
        <div class="col-4">
              <div class="card" style="width: 37rem;margin-top:5rem;">
 
        <div class="card-body">


    <form method="POST" >
      <!--  <label>Name</label>
        <input type="name" name="name" class="form-control" placeholder="name" required>
        <label>Mobile</label>
        <input type="mobile" name="mobile" class="form-control" placeholder="mobile">-
        <label>total price</label>
        <input type="price" name="price" class="form-control" placeholder="price">
        <label>qty</label>
        <input type="text" name="qty" class="form-control" placeholder="qty">-->
       <span>payment method</span>
        <select name="payment" class="form-control">
            <option value="cash on delivery "seleted>cash on delivery</option>
            <option value="credit cart">credit cart</option>
            <option value="paypal">paypal</option>
        </select>
        <!--<label>Address</label>
        <textarea type="address" name="address" class="form-control" placeholder="address"></textarea>
        <label for="">Pincode</label>
        <input type="text" name="pincode" class="form-control" placeholder="pincode">
        <label>locality/town</label>
        <input type="text" name="locality" class="form-control" placeholder="locality/town">-->
        <button type="submit" name="submit" class="btn btn-danger mt-2">order now</button>
    </form>
        </div>
         </div>
              </div>
              </div>
            
  
</div>
    
<div class="images" style="margin-left: 27% ; margin-top:24%"> 

    <img class="footer-bank-ssl" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-ssl.png" width="70" height="37">
     <img class="footer-bank-visa" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-visa.png" width="60" height="37"> 
     <img class="footer-bank-mc" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-mc.png" width="60" height="37"> 
     <img class="footer-bank-ae" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-ae.png" width="60" height="37">
      <img class="footer-bank-dc" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-dc.png" width="60" height="37">
       <img class="footer-bank-nb" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-nb.png" width="60" height="37"> 
       <img class="footer-bank-cod" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-cod.png" width="60" height="37"> 
       <img class="footer-bank-rupay" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-rupay.png" width="60" height="37">
        <img class="footer-bank-paypal" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-paypal.png" width="60" height="37"> 
        <img class="footer-bank-bhim" src="https://constant.myntassets.com/checkout/assets/img/footer-bank-bhim.png" width="60" height="37"> </div>
</div>
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
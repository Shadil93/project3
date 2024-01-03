<?php
include 'connection.php';
session_start();

//$query = mysqli_query($conn ,"SELECT *FROM selladdproduct");
if(isset($_POST['addcart'])){
  $product = $_POST['name'];
  $price  =$_POST['price'];
  $qty = 0;
  $images = $_POST['image'];

  $sql = mysqli_query($conn , "SELECT *FROM addcarT");

  if($sql){
    echo 'add to cart';
    echo '<script>window.href="addcart.php";</script>';
  }else{
    echo 'add a card';


  }
}
/*/
if (!empty($_SESSION["cartid"])) {
    $totalAll = 0;
    foreach ($_SESSION["addcart"] as $key => $value) {
  
  ?>
  
  <p style="float: right;" class="h4">Total Price: <?php echo $totalAll = $totalAll + ($value['qty']*$value['price']);
  
         ?></p>
  <?php/*
  }
  } 

if(isset($_POST['addcart']))
{
    $app->addToCart($_POST['id']);
}

if (isset($_GET['id_to_remove']) && isset($_GET['id_to_remove']) != '') {
    $app->removeProductFromCart($_GET['id_to_remove']);
}
*/
?>


                <?php 
                /*
                    if(isset($_SESSION['addcart']) && count($_SESSION['addcart']) > 0)
                    {
                        $entertainment = $_SESSION['shopping_cart'];
                    }*/


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
  ======================================================== --

  cdn bootstarp-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <table class="">
        <tr>
            <th>productname</th>
            <th>productprice</th>
            <th>qty</th>
            <th>productimage</th>
            <th colspan="2">action</th>
        </tr>
        
            
            <?php
          /*$item_number = 1;
            $total = 0;
            foreach ($entertainment as $product) {*/
            
            
            
                
?>
        
        <tr>
            <td value="<?php echo $data['name'];?>"></td>
            <td value="<?php echo $data['price'];?>"></td>

            <?php
         /*  $total += ((int)$product['price'] * $product['qty']);
                            $item_number++;
                }/*/
                            ?>
           
            <td><img src="./images/<?php echo $data['photo']; ?>" height="100px" width="100px"></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">edit</a></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">delete</a></td>
            <td><a href="edit.php?id=<?php echo $data['id'];?>" class="btn btn-success">edit</a></td>
                <td><a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-warning">delete</a></td>
        </tr>


        <?php

        
            ?>
    </table>



 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--bootstarp js-->
  
</body>
</html>
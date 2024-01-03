<?php
include '../user/connecion.php';

session_start();
if(isset($_POST['submit'])){
     $productname=$_POST['product_name'];
    $productprice =$_POST['product_price'];
   // $name =$_POST['name'];
    //$price=$_POST['price'];
    $qty = $_POST['qty'];
  // $productname=$_POST['productname'];
    //$productprice =$_POST['productprice'];
    $filename = $_FILES["images"]["name"];
    $tempname = $_FILES["images"]["tmp_name"];
    $folder = "../seller/images/" .$filename; 
    $image =$filename;
    $uploackok = 1;
    $imagesfiletype = strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    
    
    
    if($imagesfiletype /*="jpg" && $imagesfiletype!="png" && $imagesfiletype != "jpg"  && $imagesfiletype  != "gif"*/){
      echo "sorry ,only jpg ,jpeg , png & GIF files are allowed";
    
      $uploackok = 0;
    } if($uploackok ==0){
       echo "sorry";
    }else{
      move_uploaded_file($tempname,$folder);
    }
    $sql = mysqli_query($conn , "INSERT INTO orderaddress(produt_name,product_price,qty,images)VALUES('$productname','$productprice','$qty','$image')");
    if($sql){
       echo '<script>window.location.href="order.php"</script>';
    }
}


$query = mysqli_query($conn , "SELECT *FROM usercart ");









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
    
    <h1 align="center" style="background-color: black; width:100%;color:white;">MY CART</h1>
    <td><a href="user_home.php" class="btn btn-success"> shopping</a></td>

    <div class="container">
   
        <div class="row">

        <div class="col-3">

        </div>
        <div class="col-4">

    

        
<form method="POST">
        
<table class="table table-bordered table-danger" style="margin-left: 50px;";>
    
    <tr>
        <th scope="col">Name</th>
        <th scope="col">price</th>
        <th scope="col">images</th>
        <th scope="col" colspan="2">Action</th>
      
    </tr>
    <?php
  /*  $total = 0;
    if(isset($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {

    $sr = $key+1;
    $total=$total+value['price'];*/
?>
        <?php
     
     while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
          
            <td ><?php echo $data['name'];?></td>
            
            <td>$<?php echo number_format($data['price']);?> </td>
            
                
                    <!--<input type="hidden" name="update_qty"  value=" //echo $data['id'];?>">
                   <input type="number" name="qty" min="1" value=" //echo $data['qty'];?>">-->
                    <!--<td><a href="edit.php?=id //echo $data['id']; " class="btn btn-success">update</a></td-->  
            
        
           <!-- <td>$ // echo $sub_total = number_format($data['price'] * $data['qty']);?>/-</td>-->

            <td><img src="../seller/images/<?php echo $data['image'];?> " height="100px" width="100px"></td>
           <!-- <td><a href="edit.php?id=<?php // echo $data['id'];?>"   class="btn btn-success">edit</a></td>-->
            <td><a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-warning">Remove</a></td>
          <td><a href="placeorder.php?id=<?php echo $data['id'];?>" name="submit" class="btn btn-success">Buy</a></td>

        </tr>
        


     </form>
<?php

 //$grand_total += $sub_total;
        }
        ?>
        <tr>
     
    </tr>

   
    
</table>

    </div>
    </div>
    </div>
<!--  <td ><a href="order.php" class="btn btn-danger" style="margin-left:580px">proced to checkout</a></td>-->
  

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


<?php
include '../user/connecion.php';
session_start();
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT *FROM usercart WHERE id='$id'");
$row = mysqli_fetch_assoc($sql);

// if(isset($_POST['submit'])){

// } 





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
  <script>
   function myFunctionplus(inputField)
    {
    let currentValue = parseInt(inputField.previousElementSibling.value);
let price = document.getElementById("aa");
    if (!isNaN(currentValue)) {
      inputField.previousElementSibling.value = currentValue + 1;
      let b= inputField.previousElementSibling.value;
      price.value= parseInt(price.value* b);
    }
  }
  function myFunctionminus(inputField)
    {
      let currentValue = parseInt(inputField.nextElementSibling.value);
      let pr = document.getElementById("aa");

      if (!isNaN(currentValue && currentValue > 1)) {
        inputField.nextElementSibling.value = currentValue - 1;
        let c = inputField.nextElementSibling.value;
        pr.value = parseInt(pr.value * c);
  }
}

  </script>
</head>
<body>
<h1 align="center" style="background-color: black; width:100%;color:white;">VIEW CART</h1>
    <td><a href="user_home.php" class="btn btn-success">shopping</a></td>
 
<div class="container" style="margin-left: 30px;">
    <div class="row">
        <div class="col-3">

        </div>

        <div class="col-4">
          <table class="table table-bordered">
            <tr>
              <th>NAME</th>
              <th>PRICE</th>
              <th>IMAGE</th>
              <th>QTY</th>
              <th>ACTION</th>
              
            </tr>

          
                <tr>
                  <form method="POST">
                    <td><input type="text" value="<?php echo $row['name'];?>" style="border:hidden;"></td><br>
                    <td><input type="text" id="aa"  value="<?php echo $row['price'];?>"></td><br>
                    <td><img src="../seller/images/<?php echo $row['image'];?>"style="margin-right:77px;" height="100px" width="100px"></td><br>
                   
                         <td><button class="input-group-text decrement-btn"  onclick="myFunctionminus(this)">-</button>
                         <input type="text" class="form-control input-qty bg-white" value="1" disabled >
                         <button class="input-group-text increment-btn" onclick="myFunctionplus(this)">+</button>
                        </td>
                 
                    
                    <td><a href="order.php?id=<?php echo $row['id'];?> "class="btn btn-primary">order now</a></td>
</form>
                  
                    </tr>

        
        
  
</table>
        </div>
    </div>
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

  <script src="../user/qty.js"></script>
 
</body>
</html>
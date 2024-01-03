<?php 

include 'connection.php';

$query = mysqli_query($conn , "SELECT *FROM sellerregister");








?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
     
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
<div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
            
 
 
<div class="container">
<div class="row">

<div class="col-3">

 

</div>
<div class="col-4">



<table class="table table-bordred table-danger">

  <h1>SELLER</h1>
    <tr>
       
        <th>name</th>
        <th>number</th>
        <th>address</th>
        <th>email</th>
        <th>password</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
    while($data= mysqli_fetch_assoc($query)){
        ?>
    <tr>
        
        <td><?php echo $data['name'];?></td>
        <th><?php echo $data['number'];?></th>
        <th><?php echo $data['address'];?></th>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['password'];?></td>
      <!--<td><button  class="btn btn-success" id="myButton" onclick="myFunction(myButton)" >approve</button></td>-->
        <td>
          <?php 
          if($data['approval_status'] == 0)
          {
            ?>
        <a href="update.php?up_id=<?php echo $data['seller_id']; ?>" class="btn btn-success">approve</a> 
        <?php           
          }
          elseif($data['approval_status'] ==1)
          {
        ?>
        <a href="#" class="btn btn-warning">approved</a>
        <?php
            
          }
          ?>
        </td>
      </tr>
    <?php
    }
    ?>
 </div>
</div>
</table>
</div>
</div>


</div>
              </div>
            </div>
</div>
        </div>
      </div>
</section>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  /* function myFunction(myButton){
        // document.getElementById('myButton').innerHTML = "approved" ;
        let a = document.getElementById('myButton');
        // a.innerHTML="approved";
        // a.style.backgroundColor="red";
        if(a.innerHTML=="approve")
        {
          a.innerHTML="approved";
          a.style.backgroundColor="red";
        }
      
   }*/


    </script>
  

</body>

</html>
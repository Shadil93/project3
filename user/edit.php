<?php
include '../user/connecion.php';
session_start();
$id=$_GET['id'];
$row = mysqli_query($conn, "SELECT *FROM usercart WHERE id='$id'");

if(isset($_POST['submit'])){
  
}
/*if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = 1;
    //$productname=$_POST['productname'];
    //$productprice =$_POST['productprice'];
    $filename = $_FILES["images"]["name"];
    $tempname = $_FILES["images"]["tmp_name"];
    $folder = "../user/images/" .$filename; 
    $image =$filename;
    $uploackok = 1;
    $imagesfiletype = strtolower(pathinfo($folder,PATHINFO_EXTENSION));
    
    
    
    if($imagesfiletype !="jpg" && $imagesfiletype!="png" && $imagesfiletype != "jpg"  && $imagesfiletype  != "gif"){
      echo "sorry ,only jpg ,jpeg , png & GIF files are allowed";
    
      $uploackok = 0;
    } if($uploackok ==0){
       echo "sorry";
    }else{
      move_uploaded_file($tempname,$folder);
    }

$sql =mysqli_query($conn, "UPDATE `usercart` SET `name`='$name',`price`='$price',`qty`='$qty',`photo`='$image' WHERE id='$id'");

if($sql){
    echo '<script>alert("update successfuly")</script>';
    echo '<script>window.location.href="read.php"</script>';
}

}


*/
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
    <div class="container">
      <div class="row">
        <div class="col-3">

        </div>
        <div class="col-4 bg-warning  mt-4 p-4">
        <form method="POST">
        <!--<input type="text" name="name" class="form-control" value="<?php //echo $data["name"];?>"><br>
        <input type="text" name="price" class="form-control" value="<?php //echo $data['price'];?>"><br>-->
        <input type="qty" name="qty" class="form-control" value="<?php echo $data['qty'];?>"><br> 
        <!--<input type="file" name="photo" > -->
        <button type="submit" name="submit" class="btn btn-primary p-1 m-2" value="update" class="form-control">submit</button>
        </div>g
        </div>
    </div>
    </body>
</html>
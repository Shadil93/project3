<?php
$id=$_SESSION['id'];
if(isset($_POST['search'])){
  $search = $_POST['search'];
  $sql = mysqli_query($conn , "SELECT *FROM selladdproduct WHERE id='$id'");
  if($sql){
    $num = (mysqli_num_rows($sql) < 0);
    echo $num;
    $s = mysqli_fetch_assoc($sql);
  }else{

  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
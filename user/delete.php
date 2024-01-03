<?php
include '../user/connecion.php';


$id= $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM usercart WHERE id='$id'");



if($query){
    echo '<script>alert("delete successfully")</script>';
    echo '<script>window.location.href="viewcart.php";</script>';
}
?>

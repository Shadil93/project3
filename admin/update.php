<?php
session_start();
include 'connection.php';
$id=$_GET['up_id'];

$sql = mysqli_query($conn,"UPDATE sellerregister SET approval_status=1 WHERE seller_id='$id'");
if($sql)
{
    // echo '<script> alert("status updated"); </script>';
    echo '<script> window.location.href="viewseller.php" </script>';
}







?>
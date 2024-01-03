<?php
include 'connection.php';
session_start();
unset($_SESSION['id']);
header("location:../login.php");

?>

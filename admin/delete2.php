<?php 
include 'database/config.php';
$id = $_GET['id'];
$qtt = "DELETE FROM member WHERE id=$id ";
$qr = mysqli_query($db,$qtt);
header('location:members.php');
 ?>
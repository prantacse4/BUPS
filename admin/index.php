<?php 
include 'header.html';
include 'database/function.php';
if (!isset($_SESSION['email2'])) {
	$email = $_SESSION['email2'];
	header('location:login.php');
}
if (isset($_SESSION['email2'])) {
	$email = $_SESSION['email2'];
	$ses = "Logout";
	$ses2  = "logout.php";
}

$id=1;
$qz = "SELECT * FROM notice where id=$id";
 		$resz = mysqli_query($db,$qz);
 		$rowz = $resz->fetch_assoc();
 		$notice = $rowz['notices'];
 ?>




 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li><p id="p1">Give Notice</p></li></a>
		<a href="members.php"><li><p id="p2">Members</p></li></a>
		<a href="admin.php"><li><p id="p3">Admins</p></li></a>
		<a href="new.php"><li><p id="p4">New</p></li></a>
	</ul>
</div>
</center> 
</div>

<link rel="stylesheet" type="text/css" href="css/styleindex.css">
<center>
<div class="box">
<div class="index">
	<h1>Notice Board</h1>
	<div class="nts">
		<p><?php echo $notice; ?></p>
	</div>



<p>User :: <?php echo $email; ?></p>

</div>
   
</div>
<center>

<?php 
include 'footer.php';
 ?>

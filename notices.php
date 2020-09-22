<?php 
include 'header.html';
include 'database/function.php';

$id=1;
$qz = "SELECT * FROM notice where id=$id";
 		$resz = mysqli_query($db,$qz);
 		$rowz = $resz->fetch_assoc();
 		$notice = $rowz['notices'];
 ?>




 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li id="active"><p id="p1">Notices</p></li></a>
		<a  href="members.php"><li ><p id="p2">Members</p></li></a>
		<a href="<?php echo $sesd; ?>"><li ><p id="p3"><?php echo $ses; ?></p></li></a>
		<a href="<?php echo $ses2d; ?>"><li><p id="p4"><?php echo $ses2; ?></p></li></a>
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




</div>
   
</div>
<center>

<?php 
include 'footer.html';
 ?>

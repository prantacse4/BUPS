<?php 
include 'header.html';
include 'database/function.php';
?>





 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <link rel="stylesheet" type="text/css" href="css/index.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li><p id="p1">Notices</p></li></a>
		<a href="members.php"><li><p id="p2">Members</p></li></a>
		<a href="<?php echo $sesd; ?>"><li><p id="p3"><?php echo $ses; ?></p></li></a>
		<a href="<?php echo $ses2d; ?>"><li><p id="p4"><?php echo $ses2; ?></p></li></a>
	</ul>
</div>
</center> 
</div>

<link rel="stylesheet" type="text/css" href="css/index.css">
<center>
<div class="box">
<div class="index">


<?php
$qz = "SELECT * FROM post";
$resz = mysqli_query($db,$qz);
while($rowz = $resz->fetch_assoc()){
$heading = $rowz['heading'];
$image = $rowz['image'];
$textt = $rowz['textt'];
$id = $rowz['id'];
 ?>

<br><br>
	<p id="wee"><span id="we">TOPIC : </span><span><?php echo $heading ?></span></p>
	<br><br>
	<div class="img">
	<img src="admin/<?php echo $image ?>">
	</div>
	<br><br>






<div class="post">
	<p><?php echo $textt ?></p>
	   <br><br>
</div>

 <div class="qwe">
 	</div>
   <?php } ?>

   </div>
<br><br>
<table>
	<tr>
		<td><p>Page</p></td>
		<td><a href=""><p>1</p></a></td>
		<td><a href=""><p>2</p></a></td>
		<td><a href=""><p>3</p></a></td>
		<td><a href=""><p>4</p></a></td>
	</tr>
</table>
<p>User :: <?php echo $name; ?></p>
</center>
</div>
<?php 
include 'footer.html';
 ?>

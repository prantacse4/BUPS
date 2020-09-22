<?php 
include 'header.html';
include 'database/function.php';

if (!isset($_SESSION['name'])) {
	header('location:login.php');
}

 ?>
  <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li><p id="p1">Notices</p></li></a>
		<a  href="members.php"><li id="active"><p id="p2">Members</p></li></a>
		<a href="<?php echo $sesd; ?>"><li><p id="p3"><?php echo $ses; ?></p></li></a>
		<a href="<?php echo $ses2d; ?>"><li><p id="p4"><?php echo $ses2; ?></p></li></a>
	</ul>
</div>
</center> 
</div>

<center>
	<link rel="stylesheet" type="text/css" href="css/member.css">



	<div class="bx1">
		<form method="POST">
		<br><br>
<div class="members">
	<div class="mem1">
	<table>
		<tr>
			<td><h3>Name</h3></td>
			<td><h3>Dept</h3></td>
			<td><h3>Position</h3></td>
			<td><h3>Phone</h3></td>
		</tr>
	</table>
</div>







<div class="mem2">
<?php 
		$qr1 = "SELECT * FROM member";
		$qr2 = mysqli_query($db,$qr1);
 		while($row2 = mysqli_fetch_array($qr2)){
 			$firstname = $row2['firstname'];
 			$lastname = $row2['lastname'];
 			$name = $firstname." ".$lastname;
		?>
	<table>
		<tr>
			<td><a id="nbfs" href="profile2.php?id=<?php echo $row2['id']; ?>"><p><?php echo $name;?></p></a></td>
			<td><p><?php echo $row2['dept'];?>(<?php echo $row2['batch'];?>)</p></td>
			<td><p><?php echo $row2['position'];?></p></td>
			<td><p><?php echo $row2['phone'];?></p></td>
		</tr>
	</table>
</div>


</div>
<?php } ?>


<input type="submit" name="delete" value="DELETE MY PROFILE">
</center>
<br><br>
</form>
</div>

 <?php 
include 'footer.html';
 ?>





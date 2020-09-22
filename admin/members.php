<?php 
include 'header.html';
include 'database/function.php';

if (!isset($_SESSION['email2'])) {
	$email = $_SESSION['email2'];
	header('location:login.php');
}

 ?>
  <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li><p id="p1">Give Notice</p></li></a>
		<a href="members.php"><li id="active"><p id="p2">Members</p></li></a>
		<a href="admin.php"><li><p id="p3">Admins</p></li></a>
		<a href="new.php"><li><p id="p4">New</p></li></a>
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
			<td><h3>Action</h3></td>
		</tr>
	</table>
</div>







<div class="mem2 div2">
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
			<td><a id="nbfs" href="profile2.php?id=<?php echo $row2['id']; ?>"><?php echo $name;?></a></td>
			<td><?php echo $row2['dept'];?>(<?php echo $row2['batch'];?>)</td>
			<td><?php echo $row2['position'];?></td>
			<td><a href="delete2.php?id=<?php echo $row2['id']; ?>"><p>Delete</p></a></td>
		</tr>
	</table>
	<?php } ?>
</div>


</div>



</center>
<br><br>
</form>
</div>

 <?php 
include 'footer.php';
 ?>





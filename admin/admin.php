<?php 
include 'header.html';
include 'database/function.php';
if (isset($_SESSION['email2'])) {
	$email = $_SESSION['email2'];
}
if (!isset($_SESSION['email2'])) {
	$email = $_SESSION['email2'];
	header('location:login.php');
}
?>
 <link rel="stylesheet" type="text/css" href="css/styleheader.css">

 <link rel="stylesheet" type="text/css" href="css/admin.css">

 <div class="navbar">
	
	<ul>
		<ul>
		<a href="notices.php"><li><p id="p1">Give Notice</p></li></a>
		<a href="members.php"><li><p id="p2">Members</p></li></a>
		<a href="admin.php"><li id="active"><p id="p3">Admins</p></li></a>
		<a href="new.php"><li><p id="p4">New</p></li></a>
	</ul>
	</ul>
</div>
</center> 
</div>

<center>

<br><br>
<div class="bxc">
	<div class="div1">
	<table>
		<tr>
			<td>Email</td>
			<td>Password</td>
			<td>Action</td>
			<td>Update</td>
		</tr>
	</table>
</div>
<div class="div2">
	<?php 
		$qr1 = "SELECT * FROM admin";
		$qr2 = mysqli_query($db,$qr1);
 		while($row2 = mysqli_fetch_array($qr2)){
		?>

	<table>
		<tr>
			<td><?php echo $row2['email']; ?></td>
			<td>********</td>
			<td><a href="delete3.php?id=<?php echo $row2['id']; ?>"><p>Delete</p></a></td>
			<td><a href="update.php?id=<?php echo $row2['id']; ?>"><p>Update</p></a></td>
		</tr>
	</table>
	<?php } ?>
</div>
	
	

</form>



</div>
</center>


 <p>User :: <?php echo $email; ?></p>
 <?php 
include 'footer.php';
 ?>
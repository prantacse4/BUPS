<?php 
include 'header.html';
include 'database/function.php';
 ?>
<?php 
if (isset($_SESSION['email'])) {
	$email = $_SESSION['email'];

 $q = "SELECT * FROM member where '$email'=email";
 $res = mysqli_query($db,$q);
 $row = $res->fetch_assoc();
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$name = $firstname." ".$lastname;
	$img = "../".$row['image'];
}
 ?>





  <link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  	<link rel="stylesheet" type="text/css" href="css/profile.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li><p id="p1">Give Notice</p></li></a>
		<a href="members.php"><li><p id="p2">Members</p></li></a>
		<a href="admin.php"><li><p id="p3">Admins</p></li></a>
		<a href="signup.php"><li><p id="p4">New</p></li></a>
	</ul>
</div>
</center> 
</div>

<center>

<div class="profile">
	<div class="image">
		<img src="<?php echo $img;?>">
		<p id="lld"><?php echo $name; ?></p>
	</div>
	<div class="details">
		
	</div>
	<h2>USER</h2>
	<table>
		<tr>
			<td>Name</td>
			<td>: <?php echo $name; ?></td>
		</tr>
		<tr>
			<td>Batch</td>
			<td>: <?php echo $row['batch']; ?></td>
		</tr>
		<tr>
			<td>Session</td>
			<td>: <?php echo $row['session']; ?></td>
		</tr>
		<tr>
			<td>Dept</td>
			<td>: <?php echo $row['dept']; ?></td>
		</tr>
		<tr>
			<td>Hometown</td>
			<td>: <?php echo $row['hometown']; ?></td>
		</tr>
		<tr>
			<td>BloodGroup</td>
			<td>: <?php echo $row['bloodgroup']; ?></td>
		</tr>
		<tr>
			<td>Facebook</td>
			<td>: <?php echo $row['facebookid']; ?></td>
		</tr>
		<tr>
			<td>Position</td>
			<td>: <?php echo $row['position']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <?php echo $row['email']; ?></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>: <?php echo $row['phone']; ?></td>
		</tr>
	</table>

<p id="updatebtn"><a href="update.php">Update</a></p>
</div>
</center>




 <?php 
include 'footer.php';
 ?>




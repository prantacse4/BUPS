<?php 
include 'header.html';
include 'database/function.php';
 ?>
<?php 

 $id = $_GET['id'];
 $q = "SELECT * FROM admin where '$id'=id";
 $res = mysqli_query($db,$q);
 $row = $res->fetch_assoc();
$email = $row['email'];
$id = $row['id'];

 ?>





 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  	<link rel="stylesheet" type="text/css" href="css/profile.css">
  		<link rel="stylesheet" type="text/css" href="css/update.css">
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
<form method="POST" enctype="multipart/form-data">
<div class="profile">
	<div class="details">
		
	</div>

	<table>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
		</tr>
		
	</table>
	<div class="btnt">
		<button class="btn" name="updateinf">Update</button>
	</div>
	
</div>

</form>
</center>




 <?php 
include 'footer.php';
 ?>













<?php 
if (isset($_POST['updateinf'])) {
	$id = $id;
	$email = $_POST['email'];
	$password = $_POST['password'];



	$q = "UPDATE admin SET id=$id,email='$email',password='$password' WHERE id=$id ";
	$qr = mysqli_query($db,$q);

	header('location:admin.php');
	
}


 ?>





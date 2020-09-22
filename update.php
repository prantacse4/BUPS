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
	$id = $row['id'];
}
 ?>





 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  	<link rel="stylesheet" type="text/css" href="css/profile.css">
  		<link rel="stylesheet" type="text/css" href="css/update.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li><p id="p1">Notices</p></li></a>
		<a  href="members.php"><li ><p id="p2">Members</p></li></a>
		<a href="<?php echo $sesd; ?>"><li id="active"><p id="p3"><?php echo $ses; ?></p></li></a>
		<a href="<?php echo $ses2d; ?>"><li><p id="p4"><?php echo $ses2; ?></p></li></a>
	</ul>
</div>
</center> 
</div>

<center>
<form method="POST" enctype="multipart/form-data">
<div class="profile">
	<div class="image img">
		<img src="<?php echo $row['image'];?>">
	</div>
	<div class="details">
		
	</div>

	<table>
		<tr>
			<td>Firstname</td>
			<td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"></td>
		</tr>
		<tr>
			<td>Lastname</td>
			<td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"></td>
		</tr>
		<tr>
			<td>Batch</td>
			<td><input type="text" name="batch" value="<?php echo $row['batch']; ?>"></td>
		</tr>
		<tr>
			<td>Session</td>
			<td><input type="text" name="session" value="<?php echo $row['session']; ?>"></td>
		</tr>
		<tr>
			<td>Dept</td>
			<td><input type="text" name="dept" value="<?php echo $row['dept']; ?>"></td>
		</tr>
		<tr>
			<td>Hometown</td>
			<td><input type="text" name="hometown" value="<?php echo $row['hometown']; ?>"></td>
		</tr>
		<tr>
			<td>BloodGroup</td>
			<td><input type="text" name="bloodgroup" value="<?php echo $row['bloodgroup']; ?>"></td>
		</tr>
		<tr>
			<td>Facebook</td>
			<td><input type="text" name="facebookid" value="<?php echo $row['facebookid']; ?>"></td>
		</tr>
		<tr>
			<td>Position</td>
			<td><input type="text" name="position" value="<?php echo $row['position']; ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr>
	</table>
	<div class="btnt">
		<button class="btn" name="updateinf">Update</button>
	</div>
	
</div>

</form>
</center>




 <?php 
include 'footer.html';
 ?>













<?php 
if (isset($_POST['updateinf'])) {
	$id = $id;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$batch = $_POST['batch'];
	$session = $_POST['session'];
	$dept = $_POST['dept'];
	$hometown = $_POST['hometown'];
	$bloodgroup = $_POST['bloodgroup'];
	$facebookid = $_POST['facebookid'];
	$position = $_POST['position'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];




	$permited = array('jpg','jpeg','png','JPG','JPEG','PNG' );
				$file_name = $_FILES['image']['name'];
				$file_size = $_FILES['image']['size'];
				$file_temp = $_FILES['image']['tmp_name'];

				$div = explode('.', $file_name);
				$file_ext = strtolower(end($div));
				$unique_image = substr(md5(time()),0,10).'.'.$file_ext;
				$uploaded_image = "upload/".$unique_image;

 if(in_array($file_ext, $permited)===false)
	{
		array_push($errors,"You Can Upload Only JPG,JPEG,PNG");
	}
	else{
	move_uploaded_file($file_temp,$uploaded_image);
	$qta = "UPDATE member SET image='$uploaded_image' WHERE id=$id";
	$qrt = mysqli_query($db,$qta);
	}

















	$q = "UPDATE member SET id=$id, firstname='$firstname',lastname='$lastname',batch='$batch',session='$session',dept='$dept',hometown='$hometown',bloodgroup='$bloodgroup',facebookid='$facebookid',position='$position',email='$email',phone='$phone' WHERE id=$id ";
	$qr = mysqli_query($db,$q);

	header('location:profile.php');
	
}


 ?>





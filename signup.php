<?php 
include 'header.html';
include 'database/function.php';
 ?>
  <link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  		<link rel="stylesheet" type="text/css" href="css/update.css">
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
<center>
<div class="signup">
	<h2>Registration</h2>
	<?php include 'database/error.php'; ?>


	<div class="profile">
		<div class="image img">
		</div>
		<div class="details">
		
	</div>

	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="firstname" placeholder="Your firstname" required></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lastname" placeholder="Your lastname" required></td>
			</tr>
			<tr>
				<td>Batch</td>
				<td><input type="text" name="batch"  placeholder="Your Batch" required></td>
			</tr>
			<tr>
				<td>Session</td>
				<td><input type="text" name="session"  placeholder="Your session" required></td>
			</tr>
			<tr>
				<td>Dept</td>
				<td><input type="text" name="dept"  placeholder="Your Dept." required></td>
			</tr>
			<tr>
				<td>Hometown</td>
				<td><input type="text" name="hometown"  placeholder="Your hometown" required></td>
			</tr>
			<tr>
				<td>BloodGroup</td>
				<td><input type="text" name="bloodgroup"  placeholder="Your bloodgroup" required></td>
			</tr>
			<tr>
				<td>Facebook ID</td>
				<td><input type="text" name="facebookid" placeholder="Your facebook" Required></td>
			</tr>
			<tr>
				<td>Position
				</td>
				<td><input type="text" name="position" placeholder="Your position in BUPS" Required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="xyz@email.com" Required></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" placeholder="01XXXXXX" Required></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image" placeholder="image" Required></td>
			</tr>
		</table>
		<div class="btnt">
		<button class="btn" name="signup">Signup</button>
		</div>
		<p><a id="sgn" href="login.php">Already have account?Login here</a></p>
	</form>
</div>
</div>

</center>
 <?php 
include 'footer.html';
 ?>
 <?php if (isset($_POST['login'])) {
 	header('location:index.php');
 } ?>
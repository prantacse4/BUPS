<?php 
include 'header.html';
include 'database/function.php';
if (!isset($_SESSION['email2'])) {
	$email = $_SESSION['email2'];
	header('location:login.php');
}
 ?>
  <link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  		<link rel="stylesheet" type="text/css" href="css/update.css">
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
<center>
<div class="signup">
	<h2>ADD ADMIN</h2>
	<?php include 'database/error.php'; ?>


	<div class="profile">
		
		<div class="details">
		
	</div>

	<form method="POST" enctype="multipart/form-data">
		<table>
			
			
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="xyz@email.com" Required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" placeholder="******" Required></td>
			</tr>
		
		</table>
		<div class="btnt">
		<button class="btn" name="add">ADD</button>
		</div>
	
	</form>
</div>
</div>

</center>
 <?php 
include 'footer.php';
 ?>
 <?php if (isset($_POST['login'])) {
 	header('location:index.php');
 } ?>
<?php 
include 'header.html';
include 'database/function.php';
if (!isset($_SESSION['email2'])) {
	$email = $_SESSION['email2'];
	header('location:login.php');
}
if (isset($_SESSION['mgs'])) {
	$mgs = $_SESSION['mgs'];
}
 ?>

  <link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/notices.css">
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
		<br><br><br>

<form method="POST">
<div class="notice">

	<h1>Your Notice Will Be In The Website</h1>
	<?php include 'database/error.php'; ?>
	<textarea name="notices" placeholder="Write Your Notice..."></textarea>
	<br>
	<button class="btn" name="submit">Submit</button>
</div>
</form>

<br><br><br>
<a href="post.php"><p>You can Post From Here</p></a>
</center>

<?php 
if (isset($_POST['submit'])) {
	$notices = $_POST['notices'];
	$id = 1;
	$q = "UPDATE notice SET id=$id,notices='$notices' WHERE id=$id";
	$qr = mysqli_query($db,$q);
	header('location:index.php');


}

 ?>










 <?php 
include 'footer.php';
 ?>
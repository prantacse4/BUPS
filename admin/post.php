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
  <link rel="stylesheet" type="text/css" href="css/post.css">
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

<form method="POST" enctype="multipart/form-data">
<div class="notice">
	<br><br>

	<h1>PUBLISH POST</h1>
	<?php include 'database/error.php'; ?>
	<br><br>
	<h3>Heading For The Post</h3>
	<p><input type="text" name="heading" placeholder="Heading"></p>
	<textarea name="textt" placeholder="Write Your post..."></textarea>
	<br>
	<input type="file" name="image"><br><br>
	<button class="btn" name="post">Post</button>
	<br><br>
</div>
</form>

<br><br><br>

</center>


 <?php 
include 'footer.php';














 if (isset($_POST['post'])) {

	$heading = $_POST['heading'];
	$textt = $_POST['textt'];




	$permited = array('jpg','jpeg','png' );
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_temp = $_FILES['image']['tmp_name'];
	$div = explode('.', $file_name);
	$file_ext = strtolower(end($div));
	$unique_image = substr(md5(time()),0,10).'.'.$file_ext;
	$uploaded_image = "upload/".$unique_image;
	if(empty($file_name))
	{
		 array_push($errors," Image Not Inserted !");
	}
	else if($file_size>3000072)
	{
		array_push($errors," File Size Should be less than 3MB !");
	}
	else if(in_array($file_ext, $permited)===false)
	{
		array_push($errors,"You Can Upload Only JPG,JPEG,PNG");
	}

		
	if (count($errors) == 0) {
	move_uploaded_file($file_temp,$uploaded_image);




	$q = "INSERT INTO post(heading,textt,image) VALUES('$heading','$textt','$uploaded_image') ";
	$qr = mysqli_query($db,$q);
	header('location:index.php');

}
	
}


 ?>
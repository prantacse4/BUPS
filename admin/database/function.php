<?php 
include 'config.php';
 ?>
 <?php 
 session_start();
$errors = array();

 //INSERT
if (isset($_POST['add'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];



	$user_check_query = "SELECT * FROM admin WHERE email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
	if ($user) { 

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");

    }
  	}
	if (count($errors) == 0) {
	$q = "INSERT INTO admin(email,password) VALUES('$email','$password') ";
	$qr = mysqli_query($db,$q);
	header('location:../admin/admin.php');

}
	
}

//read



 if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	$rec = mysqli_query($db,"SELECT * FROM admin");
	while($record = mysqli_fetch_array($rec)){
	$email2 = $record['email'];
	$password = $record['password'];
	if($email2==$email && $password==$password)
	{
		$_SESSION['email2'] = $email;
		header('location:index.php');
	}
}

}




  ?>









 <?php 
if (isset($_POST['delete'])) {
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		$qz = "SELECT * FROM admin where '$email'=email";
 		$resz = mysqli_query($db,$qz);
 		$rowz = $resz->fetch_assoc();
 		$idz = $rowz['id'];
	}
	$qtt = "DELETE FROM admin WHERE id=$idz ";
	$qr = mysqli_query($db,$qtt);
	session_destroy();
	header('location:index.php');
}

  ?>
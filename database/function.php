<?php 
include 'config.php';
 ?>
 <?php 
 session_start();
$errors = array();

 //INSERT
if (isset($_POST['signup'])) {

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
	


	$permited = array('jpg','jpeg','png','JPG','JPEG','PNG');
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_temp = $_FILES['image']['tmp_name'];
	$div = explode('.', $file_name);
	$file_ext = strtolower(end($div));
	$unique_image = $email.'.'.$file_ext;
	$uploaded_image = "upload/".$unique_image;
	if(empty($file_name))
	{
		 array_push($errors," Image Not Inserted !");
	}
	else if($file_size>6000072)
	{
		array_push($errors," File Size Should be less than 6MB !");
	}
	else if(in_array($file_ext, $permited)===false)
	{
		array_push($errors,"You Can Upload Only JPG,JPEG,PNG");
	}

		
	
	





	
	$name = $firstname." ".$lastname;

	$user_check_query = "SELECT * FROM member WHERE phone='$phone' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
	if ($user) { 
    if ($user['phone'] === $phone) {
      array_push($errors, "Phone already exists.");
   	 }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists.");

    }
  	}
	if (count($errors) == 0) {
	move_uploaded_file($file_temp,$uploaded_image);




	$q = "INSERT INTO member(firstname,lastname,batch,session,dept,hometown,bloodgroup,facebookid,position,email,phone,image) VALUES('$firstname','$lastname','$batch','$session','$dept','$hometown','$bloodgroup','$facebookid','$position','$email','$phone','$uploaded_image') ";
	$qr = mysqli_query($db,$q);
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	header('location:../Univbu/index.php');

}
	
}

//read



 if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$rec = mysqli_query($db,"SELECT * FROM member");
	while($record = mysqli_fetch_array($rec)){
	$email2 = $record['email'];
	$phone2 = $record['phone'];
	$firstname = $record['firstname'];
	$lastname = $record['lastname'];
	$name = $firstname." ".$lastname;
	if($email2==$email && $phone2==$phone)
	{
		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		header('location:index.php');
	}
}

}




  ?>







<?php 

if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
	$ses = "Profile";
	$sesd = "profile.php";
	$ses2 = "Logout";
	$ses2d = "logout.php";
    
}
if (!isset($_SESSION['name'])) {
	$ses = "Signup";
	$sesd = "signup.php";
	$ses2 = "Login";
	$ses2d = "login.php";
	$name = "Not Logged In.";
}
 ?>





 <?php 
if (isset($_POST['delete'])) {
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		$qz = "SELECT * FROM member where '$email'=email";
 		$resz = mysqli_query($db,$qz);
 		$rowz = $resz->fetch_assoc();
 		$idz = $rowz['id'];
	}
	$qtt = "DELETE FROM member WHERE id=$idz ";
	$qr = mysqli_query($db,$qtt);
	session_destroy();
	header('location:index.php');
}

  ?>
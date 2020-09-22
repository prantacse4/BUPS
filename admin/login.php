<?php 
include 'header.html';
include 'database/function.php'
 ?>
 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <link rel="stylesheet" type="text/css" href="css/update.css">
 <link rel="stylesheet" type="text/css" href="css/profile.css">
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
<div class="login">
	<h2>Admin</h2>
	<form method="POST">
		<table class="tbl">
			<tr>
				<td><img id="imgs" src="img/email.png"></td>
				<td><input type="email" name="email" placeholder="xyz@email.com" Required></td>
			</tr>
			<tr>
				<td><img id="imgs" src="img/password.png"></td>
				<td><input type="password" name="password" placeholder="*****" Required></td>
			</tr>
		</table>
		<div class="btnt">
		<button class="btn" name="login">Login</button>
		</div>
	</form>
</div>
<p><a id="sgn" href="https://mbasic.facebook.com/messages/read/?fbid=100013141967706&_rdr">Forgot Account?Inform</a></p>
</center>
 <?php 
include 'footer.php';
 ?>



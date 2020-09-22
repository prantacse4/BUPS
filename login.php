<?php 
include 'header.html';
include 'database/function.php'
 ?>
 <link rel="stylesheet" type="text/css" href="css/styleheader.css">
 <link rel="stylesheet" type="text/css" href="css/update.css">
 <link rel="stylesheet" type="text/css" href="css/profile.css">
 <div class="navbar">
	
	<ul>
		<a href="notices.php"><li><p id="p1">Notices</p></li></a>
		<a href="members.php"><li><p id="p2">Members</p></li></a>
		<a href="<?php echo $sesd; ?>"><li><p id="p3"><?php echo $ses; ?></p></li></a>
		<a href="<?php echo $ses2d; ?>"><li id="active"><p id="p4"><?php echo $ses2; ?></p></li></a>
	</ul>
</div>
</center> 
</div>
<center>
<div class="login">
	<h2>Member</h2>
	<form method="POST">
		<table class="tbl">
			<tr>
				<td><img id="imgs" src="img/email.png"></td>
				<td><input type="email" name="email" placeholder="xyz@email.com" Required></td>
			</tr>
			<tr>
				<td><img id="imgs" src="img/phone.png"></td>
				<td><input type="text" name="phone" placeholder="01XX..." Required></td>
			</tr>
		</table>
		<div class="btnt">
		<button class="btn" name="login">Login</button>
		</div>
	</form>
</div>
<p><a id="sgn" href="https://mbasic.facebook.com/messages/read/?fbid=100013141967706&_rdr">Forgot Account?Inform</a></p>
<p><a id="sgn" href="signup.php">Do not have account?Signup here</a></p>
</center>
 <?php 
include 'footer.html';
 ?>



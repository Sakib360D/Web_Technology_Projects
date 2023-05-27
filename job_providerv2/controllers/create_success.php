
<?php
$username =$_POST['name'];
?>


<html>
<head>
	<title>Signup</title>
</head>
<body>
	<center>
	<fieldset>
			<legend>New User Created Successfully</legend>
		<table>
			<h1>Hello!</h1>
			<h2><?php echo "$username";?></h2>
		<h3>Your Account created successfully<h3>
			<a href="../views/login.php">Back To Login </a>
		</table>
	</form>
	</center>
</body>
</html>

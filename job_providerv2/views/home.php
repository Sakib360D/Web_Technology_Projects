<?php 
	require('header.php');
?>

<html>
<head>
	<style>
body {
  background-image: url('home_img.jpg');
}
	</style>
	<title>Job Provider</title>
</head>
<body>
	<center>
		<h1><u>Welcome to Online Job Portal!</u></h1>
		<fieldset style="background-color:orange;">
			<h1 style="background-color:green;">Job Provider</h1>
		</fieldset>
	</center>

<center>
	
	<fieldset style="background-color: darkcyan;">
<table>

<tr>
	<td>
		<button style="background-color:red;">
		<a  href="create.php"> <h1 style="background-color:whitesmoke;">Create Jobs</h1></a>
		</button> 
	</td>
</tr>

<tr>
	<td>
		<button style="background-color:red;">
		<a  href="Showjobs.php"> <h1 style="background-color:whitesmoke;">Show Available Jobs</h1></a>
		</button> 
	</td>
</tr>


<tr>
	<td>
		<button style="background-color:red;">
		<a  href="userlist.php"> <h1 style="background-color:whitesmoke;">Job seeker List</h1></a>
		</button> 
	</td>
</tr>

<tr>
	<td>
		<button style="background-color:red;">
		<a  href="profile.php"> <h1 style="background-color:whitesmoke;">Upload Profile Picture</h1></a>
		</button> 
	</td>
</tr>

<tr>
	<td>
		<button style="background-color:red;">
		<a  href="../controllers/logout.php"> <h1 style="background-color:red;">Log Out</h1></a>
		</button> 
	</td>
</tr>


	</table>
	
	</fieldset>
</center>
</body>
</html>
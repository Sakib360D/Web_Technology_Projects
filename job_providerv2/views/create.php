<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}
?>

<html>
<head>
	<style>  
body {
  background-image: url('registration.jpg');
}
</style>
	<title>Create New Jobs</title>
</head>
<body>
	<center>
        <button style="background-color:orange;">
        <a href="welcomev2.php">Back</a> </button> |
        <button style="background-color:orange;"><a href="logoutv2.php">logout</a></button>
       </center>
	<center>
		<fieldset style="background-color:cornflowerblue;">
			<h1 style="background-color:blueviolet;">Create Jobs</h1>
		</fieldset>


	<form method="post" action="create_success.php">


		<fieldset style="background-color:orange;">
			
			<table>
			<tr>
					<td>Company Name</td>
					<td><input type="name" name="name" value=""></td>
				</tr>
				<tr>
					<td>Job Type:</td>
					<td><input type="text" name="jobtype" value=""></td>
				</tr>
				<tr>
					<td>Salary</td>
					<td><input type="Salary" name="Salary" value=""></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address" value=""></td>
				</tr>
				
				<tr>
				
					<td></td>
					
				</tr>
				<td>
				
				</td>
				<td><input type="submit" name="submit" value="Create Job"></td>
			</table>
			
		</fieldset>
		</center>
	</form>
</body>
</html>
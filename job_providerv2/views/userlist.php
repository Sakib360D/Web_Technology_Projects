<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
	<style>
body {
  background-image: url('user_img.jpg');
}
	</style>
	<meta charset="utf-8">
	<title>User List</title>
</head>
<body>
	<center>
        <button style="background-color:orange;">
        <a href="welcomev2.php">Back</a> </button> |
        <button style="background-color:orange;"><a href="logoutv2.php">logout</a></button>
       </center>
       
 <fieldset style="background-color:burlywood;">
			<h1 align="center" style="background-color:blanchedalmond;">Job Seeker List!!!</h1>
		</fieldset>
<fieldset style="background-color: whitesmoke;">


<?php

//session

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}
//


/*$myfile = fopen('..\models\user.txt', 'r');
$id=0;
while(!feof($myfile)){

    $data = fgets($myfile);
}
*/

include 'configv2.php';

$selectquery =" select * from users ";
$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

while($insert = mysqli_fetch_array($query)){
?>

	<fieldset style="background-color: whitesmoke;">

	<table border="1" align="center">
	


	<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>Joined</th>

		</tr>

		<tr>
			<td><?php echo $insert['id'];?></td>
			<td><?php echo $insert['username'];?></td>
			<td><?php echo $insert['created_at'];?></td>

		</tr>

		<!-- <tr>
			<td><?php $id++; echo $id; ?></td>
			<td>morshed</td>
			<td>morshed@aiub.edu</td>
		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>diponkor</td>
			<td>diponkor@aiub.edu</td>

		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>Rofiq</td>
			<td>Rofiq@aiub.edu</td>

		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>Shofiq</td>
			<td>Shofiq@aiub.edu</td>

		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>Abdul</td>
			<td>Abdul@aiub.edu</td>

		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>Tony</td>
			<td>Tony@aiub.edu</td>

		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>Akash</td>
			<td>Akash@aiub.edu</td>

		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>Asif</td>
			<td>Asif@aiub.edu</td>

		</tr>
		<tr>
			<td><?php $id++; echo $id; ?></td>
			<td>Rizon</td>
			<td>Rizon@aiub.edu</td>

		</tr> -->

	</table>
	</fieldset>
</body>
</html>
<?php
}
?>
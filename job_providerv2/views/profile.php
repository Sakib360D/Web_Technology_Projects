<?php 
if(isset($_POST['submit'])) 

{
$filename = $_FILES['filename']['name']; 
$tmp_loc = $_FILES['filename']['tmp_name'];
$uploc = "../images/";
if (!empty($filename)) {
move_uploaded_file ($tmp_loc, $uploc.$filename); 
echo 'File  uploaded successfully';
} 
else{
echo 'Select a file!';}
}
?>
<center>
		<h1><u>Welcome to Online Job Portal!</u></h1>
		<fieldset style="background-color:orange;">
			<h1 style="background-color:green;">Picture Uploaded Successfully</h1>
		</fieldset>
	</center>
	<center>
        <button style="background-color:orange;">
        <a href="welcomev2.php">Back</a> </button> |
        <button style="background-color:orange;"><a href="logoutv2.php">logout</a></button>
       </center>

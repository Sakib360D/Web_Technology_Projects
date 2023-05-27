<?php
//$comp_name =$_POST['company_name'];
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}

 include 'configv2.php';


if(isset($_POST['submit'])){
	
	$jobtitle = $_POST['jobtitle'];
	$company_name = $_POST['company_name'];
	$job_details = $_POST['job_details'];
	$contact_info = $_POST['contact_info'];
	$salary = $_POST['salary'];

}

		$inserquery= "INSERT INTO createdjobs(jobtitle, company_name,contact_info,job_details, salary)
		values('$jobtitle', '$company_name','$contact_info','$job_details', '$salary')  ";

		$insert= mysqli_query($con,$inserquery);
		if($insert)
	{
		?>
		<script >
			alert("Job data added");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("Job data not added");
		</script>
		<?php
	}




?>

<html>
<head>
	<title>Job Created</title>
	<link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
	
	<center>
		<fieldset style="background-color:burlywood;">
			<h1 style="background-color:rebeccapurple;">Congratulation New Job Created Successfully!!!</h1>
		</fieldset>
	<fieldset style="background-color:skyblue;">
			
		<table>
			
			<h2>Job Title:<?php echo " $jobtitle";?></h2>
			<h2>Company name:<?php echo " $company_name";?></h2>
			<h2>Job Details:<?php echo " $job_details";?></h2>
			<h2>Contact Info:<?php echo " $contact_info";?></h2>
			<h2>Salary:<?php echo " $salary";?></h2>
			

		  <h3>Your  created a new job on behalf of <?php echo "$company_name";?> successfully!<h3>

			<a href="createjobsv2.php">Create Another Job </a>

			<button class ="floating-btn2" style="background-color:orange;">
       		<a href="welcomev2.php">Home</a> 
    	</button>

        <button class ="floating-btn" style="background-color:orange;">
        	<a href="logoutv2.php">logout</a>
    	</button>
    
		</table>
	</form>
	</center>
</body>
</html>

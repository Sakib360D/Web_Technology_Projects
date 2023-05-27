<?php
session_start();
 
//Checking user is already logged in or not
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
}

?>

<html>
<head>
	<style>  
.error {color: #FF0001;} 

body {
  background-image: url('registration.jpg');
}
</style> 
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<title>Create New Jobs</title>
</head>
<body>
	
	<div class="container">
	<div class="header">
		<h2>Create Jobs</h2>
	</div>


	<form method="post" action="create_success.php" id="form" class="form">

		<div class="form-control">
			<label for="jobtitle">Job Title</label>
			<input type="text" name="jobtitle" placeholder="Enter Job Name" id="jobname" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>

		<div class="form-control">
			<label for="company_name">Company Name</label>
			<input type="text" name="company_name" placeholder="Type Company Name" id="compname" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>

		

		<div class="form-control">
			<label for="contact_info">Contact Info</label>
			<input type="email" name="contact_info" placeholder="Type Email" id="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		
		
		<div class="form-control">
			<label for="salary">Salary</label>
			<input type="number" name="salary" placeholder="Salary" id="salary"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		
		<div class="form-control">
			<label for="job_details">Job Details</label>
<!-- <input type="text" name="job_details" placeholder="Job Details" id="jobdet" />-->			

 			<textarea   name="job_details" placeholder="Describe About Job"></textarea>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
	
		
		<input  style="background-color:yellowgreen;"type="submit" name="submit" value="submit"> 

	</form>
</div>


</div>
	
		
        <button class ="floating-btn2" style="background-color:orange;">
       		<a href="welcomev2.php">Back</a> 
    	</button>

        <button class ="floating-btn" style="background-color:orange;">
        	<a href="logoutv2.php">logout</a>
    	</button>
    

    
</body>
</html>
<!-- <script src="../js/createjobs_form_validation.js"></script> -->

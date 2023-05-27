<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

	<div class="fix container_full">
		<div class="fix container">
			<header>
	                <div class="header">
	                    <div class="undrmnu_srch floatright">
	                    	
        			<a href="logoutv2.php" class="btn btn-danger ml-3">Sign Out</a>
      							
	                            <input type="text" value="" name="s" id="input">
	                            <input type="submit" id="searchsubmit" value="Search">
	                                              
	                    </div> 
  						<a href="profilev2.php"><img id="header_logo" class="floatleft" src="img/profile.png" alt="logo_Image"/></a>
	                    <h2>User: <?php echo htmlspecialchars($_SESSION["username"]);?>.</h2>
	                    <img id="star_logo" src="img/done.png" alt="Star_Logo"/><span style="background-color:lightgreen;">Secured Login</span>
	                    <h3 class="my-5"> Welcome to our online job portal.</h1>
  	                    </div>
              </header>
		</div>
	</div>
 
	<center>
		<fieldset style="background-color:orange;">
			<h1 style="background-color:green;">Job Provider</h1>
		</fieldset>
	</center>
 

<center>

	<div class="fix container_full">
		<div class="fix container">
			<nav>
				
				<div id="nav">
					<ul>
						<li><a href="Homepage.php"class="btn btn-warning">Home</a></li>
						<li><a href="createjobsv2.php"class="btn btn-warning">Create Jobs</a></li>
						<li><a href="displayjobs.php"class="btn btn-warning">Available Jobs</a></li>
						<li><a href="userlist.php"class="btn btn-warning">Job seeker List</a></li>
						<li><a href="profile.php"class="btn btn-warning">Upload Profile Picture</a></li>
						<li><a href="profilev2.php" class="btn btn-warning">Profile</a></li>
						<li><a href="about_us.php" class="btn btn-warning">About Us</a></li>
						<li><a href="logoutv2.php" class="btn btn-warning">Log Out</a></li>
	                </ul>
				</div>
			</nav>
		</div>
	</div>


	
	<fieldset style="background-color: whitesmoke;">
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our online job portal.</h1>
	</fieldset>

	<div class="container_full">
		<div class="container">
	    	<div class="job_content1">
	    		<h1>Available <span style="color: #125E46;">Jobs</span></h1>
	    	</div>
	    </div>
    </div> 

    <center>

    <div class="container_full">
		<div class="container">
			<div class="job_content2">
				<img src="img/job_search.png"/>
				<h2>Searching Manager</h2>
				<p> Decide your delivery locations and working hours. No minimum shifts required. Join us. All job seekers are welcome. Deliver near your home and at your own convenience. Lifestyle benefits. Immediate hire. Attractive earnings. New joiner incentive. Be your own boss.</p> 
				<a class="reqst" href="applyjob.php">Apply</a>  <a class="reqst" href="job_details.php">Details</a> 
			</div>
		</div> 
    </div>

    <div class="container_full">
		<div class="container">
			<div class="job_content2">
				<img src="img/job_search.png"/>
				<h2>Searching Software Engineer</h2>
				<p> Decide your delivery locations and working hours. No minimum shifts required. Join us. All job seekers are welcome. Deliver near your home and at your own convenience. Lifestyle benefits. Immediate hire. Attractive earnings. New joiner incentive. Be your own boss.</p> 
				<a class="reqst" href="applyjob.php">Apply</a>  <a class="reqst" href="job_details.php">Details</a> 
			</div>
		</div> 
    </div>

    <div class="container_full">
		<div class="container">
			<div class="job_content2">
				<img src="img/job_search.png"/>
				<h2>Searching Web developer</h2>
				<p> Decide your delivery locations and working hours. No minimum shifts required. Join us. All job seekers are welcome. Deliver near your home and at your own convenience. Lifestyle benefits. Immediate hire. Attractive earnings. New joiner incentive. Be your own boss.</p> 
				<a class="reqst" href="applyjob.php">Apply</a>  <a class="reqst" href="job_details.php">Details</a> 
			</div>
		</div> 
    </div>

    <div class="container_full">
		<div class="container">
			<div class="job_content2">
				<img src="img/job_search.png"/>
				<h2>Searching Shopkeeper</h2>
				<p> Decide your delivery locations and working hours. No minimum shifts required. Join us. All job seekers are welcome. Deliver near your home and at your own convenience. Lifestyle benefits. Immediate hire. Attractive earnings. New joiner incentive. Be your own boss.</p> 
				<a class="reqst" href="applyjob.php">Apply</a>  <a class="reqst" href="job_details.php">Details</a> 
			</div>
		</div> 
    </div>

    <div class="container_full">
		<div class="container">
			<div class="job_content2">
				<img src="img/job_search.png"/>
				<h2>Searching Salesman</h2>
				<p> Decide your delivery locations and working hours. No minimum shifts required. Join us. All job seekers are welcome. Deliver near your home and at your own convenience. Lifestyle benefits. Immediate hire. Attractive earnings. New joiner incentive. Be your own boss.</p> 
				<a class="reqst" href="applyjob.php">Apply</a>  <a class="reqst" href="job_details.php">Details</a> 
			</div>
		</div> 
    </div>

</center>


    <div class="container_full">
		<div class="container">
			<div class="imagesforpartners">
                <h2>Our Partners</h2>
                <img src="img/kormojobs.png">
                <img src="img/linkedin.jpg">
                <img src="img/foodpanda.jpg">
                <img src="img/pathao.png">
				<img src="img/aiub.png">
                <img src="img/gp.png">
                <img src="img/bl.png">
                <img src="img/robi.png">
                <img src="img/airtel.png">


            </div>
		</div>
    </div>

    <div class="container_full">
		<div class="container">
			<footer>
				<div class="footer">
					<p>Copyright @2022. All Rights Reserved by onlinejobportal.com</p>
					<p><a style=color:#FF0000 href="about_us.php">Contact us</a></p>
				</div>
			</footer>
		</div>
	</div>
	   
	   
	
</center>
</body>
</html>
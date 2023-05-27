<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}
?>
 

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Available Jobs</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
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

    <div class="fix container_full">
        <div class="fix container">
            <nav>
                
                <div id="nav">
                    <ul>
                        <li><a href="welcomev2.php">Home</a></li>
                        <li><a href="userlist.php">Job Seeker</a></li>
                        <li><a href="profilev2.php">Job Provider</a></li>
                        <li><a href="Services.php">Our Users</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

	
		<tr align="center" >
            <th colspan="2" >
                <h1 style="background-color:DodgerBlue;">Available &nbsp Jobs</h1>
            </th>
        </tr>

</center>

<?php
//session


//

include 'configv2.php';

$selectquery =" select * from createdjobs ";
$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

while($getdata = mysqli_fetch_array($query)){
?>


<center>
<div class="container_full">
        <div class="container">
            <div class="job_content2">
                <img src="img/job_search.png"/>
                <h2>Searching:<?php echo $getdata['jobtitle'];?></h2>
                <p> 
                <b>Company name:<?php echo $getdata['company_name'];?></b>
                <br>
                <?php echo $getdata['job_details'];?>

            Decide your delivery locations and working hours. No minimum shifts required. Join us. All job seekers are welcome. Deliver near your home and at your own convenience. Lifestyle benefits. Immediate hire. Attractive earnings. New joiner incentive. Be your own boss.<br>
            <b>Contact Info:</b><?php echo $getdata['contact_info'];?>
            
        </p> 
        <h2>Salary:<?php echo $getdata['salary'];?></h2>
        <p>This job is posted from
                <b><?php echo $getdata['company_name'];?></b><br>

               <?php echo $getdata['job_details'];?>
            </p>
                <a class="reqst" href="applyjob.php">Apply</a>  <a class="reqst" href="job_details.php">Details</a> <a class ="floating-btn2" href="delete.php">Delete Job</a> 
                <br>
                <a class ="floating-btn" href="update.php">Update Job Information</a>
            </div>
        </div> 
    </div>

</center>


<?php
}
?>
<center>
<button class ="floating-btn2" style="background-color:orange;">
       		<a href="welcomev2.php">Home</a> 
    	</button>

        <button class ="floating-btn" style="background-color:orange;">
        	<a href="logoutv2.php">logout</a>
    	</button>
</center>
<footer>
                <div class="footer">
                    <p>Copyright @2022. All Rights Reserved by onlinejobportal.com</p>
                    <p><a style=color:#FF0000 href="about_us.php">Contact us</a></p>
                </div>
            </footer>
</body>
</html>
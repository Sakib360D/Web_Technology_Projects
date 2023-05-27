<?php

//session

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}
//

//database
include 'configv2.php';

$ids =$_SESSION["id"];
  

$showquery =" select * from users where id='$ids' ";

$showdata = mysqli_query($con,$showquery);

$getdata = mysqli_fetch_array($showdata);

//
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <center>
    <div class="wrapper">
        <h2><u>Job Provider</u></h2>
        <h2><u>Update Profile Information</u></h2>
        <p>Please fill this form to Update your account information.</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <a href="welcomev2.php" class="btn btn-primary">Back</a>
                
            <b>

            <div class="form-group">
                <br>
                <label style="background-color:orange">Account Type: Job Provider</label>
            </div>
 
            <div style="background-color:lightgreen;" class="form-group">
                <label>Job Provider Id: <?php echo $getdata['id']; ?></label>
            </div>
 



              <div class="form-group">
                <label>Upload Profile Picture</label>
                <input type="file" name="profile Picture" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
 

           


           <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $getdata['fullname']; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>  


            <div class="form-group">
                <label style="background-color:lightgreen">Username: <?php echo $getdata['username']; ?> </label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $getdata['username']; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div> 

          

            <div class="form-group">
                <label>Education</label>
                <input type="text" name="name" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $getdata['education']; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>  


            <div class="form-group">
                <label>Date of Birth</label>
                <input type="Date" name="name" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $getdata['dob']; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>  


            <div class="form-group">
                <label>Contact Info</label>
                <input type="text" name="name" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $getdata['fullname']; ?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>  



            
            
            <div class="form-group">
                <label>Joined : <?php echo $getdata['created_at']; ?> </label>
            </div>


          
            </b>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>

            
            <p>Already have an account? <a href="loginv2.php">Login here</a>.</p>
        </form>
    </div>
    </center>    
</body>
</html>
<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}


//database

include 'configv2.php';

$ids =$_SESSION["id"];
  

$showquery =" select * from users where id='$ids' ";

$showdata = mysqli_query($con,$showquery);

$getdata = mysqli_fetch_array($showdata);

//





if(isset($_POST['submit'])) 

{
$filename = $_FILES['filename']['name']; 
$tmp_loc = $_FILES['filename']['tmp_name'];
$uploc = "../images";
if (!empty($filename)) {
move_uploaded_file ($tmp_loc, $uploc.$filename); 
echo 'File  uploaded successfully';
} 
else{
echo 'Select a file!';}
}
?>
 

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <form  action="profile.php" method="POST" enctype="multipart/form-data">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>  Your Job provider Id is, <b><?php echo htmlspecialchars($_SESSION["id"]); ?></b>. </h1>

    <h1 class="my-5"><br><u>Your Information.</u></h1>
    
    <center>
      <!--  <fieldset style="border='1'">

           <label>Profile: <?php echo $getdata['profile_pic']; ?> </label>
           <br>
           <label>Full Name: <?php echo $getdata['fullname']; ?> </label>
            <br>
           <label>username: <?php echo $getdata['username']; ?> </label>
            <br>
           <label>Date of Birth: <?php echo $getdata['dob']; ?> </label>
            <br>
           <label>Education: <?php echo $getdata['education']; ?> </label>
            <br>
           <label>Joined at: <?php echo $getdata['created_at']; ?> </label>
           

       </fieldset>
 -->

            <a href="welcomev2.php" class="btn btn-primary">Back</a>

            <table border="1">

                <tr>
                    <td style="background-color:plum">Account Type: Job Provider </td>
                </tr>

                <tr>
                    <td>Job Provider Id: <?php echo $getdata['id']; ?> </td>
                </tr>


                <tr>
                    <td>Profile: <?php echo $getdata['profile_pic']; ?> </td>
                </tr>

                 <tr>
                    <td>Full Name: <?php echo $getdata['fullname']; ?> </td>
                </tr>

                 <tr>
                    <td style="background-color:lawngreen;">username: <?php echo  $getdata['username']; ?> [Unique] </td>
                </tr>

                 <tr>
                    <td>Date of Birth: <?php echo $getdata['dob']; ?>  </td>
                </tr>

                 <tr>
                    <td>Education: <?php echo $getdata['education']; ?>  </td>
                </tr>

                <tr>
                    <td style="background-color:lightgoldenrodyellow;" >Joined Date and Time: <?php echo $getdata['created_at']; ?>  </td>
                </tr>

                 <tr>
                    <td align="center" style="background-color:lightblue;" > <a href="reset_passv2.php" class="btn btn-warning">Reset Your Password</a> </td>
                </tr>


                <tr>
                    <td align="center" style="background-color:lightsteelblue;" ><a href="updateprofile.php" class="btn btn-secondary ml-2">Edit Information</a>
</td>
                </tr>




                <!--  <tr>
                    <td>
                    <form  action="profile.php" method="POST" enctype="multipart/form-data">
                    Select an Image for Your Profile.<br> <input type="file" name="filename"><br><br>
                    <input type="submit" value="Upload"> 
                    </form>
                    </td>
               </tr> -->
                   


           </table>
    </center>

   <br>
    <p>
        
        <a href="logoutv2.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
       
    </p>

    
	

</body>
</html>
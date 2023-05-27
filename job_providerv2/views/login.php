<?php 
    require"DbConnect.php";

?>
<!DOCTYPE html>
<html>
    <head>

    <title>Online Job Portal</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

    <body>
        <div class="fix container_full">
        <div class="fix container">
            <header>
                    <div class="header">
                        <div class="undrmnu_srch floatright">

                                <input type="text" value="" name="s" id="input">
                                <input type="submit" id="searchsubmit" value="Search">                  
                        </div> 
                        <a href="jobportal.html"><img id="header_logo" class="floatleft" src="img/logo.jpg" alt="logo_Image"/></a>
                        <h2 align="center">Online Job Portal</h2>
                        <h3 style="background-color:yellowgreen"><u>Job Seeker Section</u></h3>
                        <img id="star_logo" src="img/done.png" alt="Star_Logo"/><span style="background-color:lightgreen;">Verified Job Portal</span>
                        </div>
              </header>
        </div>
    </div>

    <div class="fix container_full">
        <div class="fix container">
            <nav>
                
                <div id="nav">
                    <ul>
                        <li><a href="Homepage.php">Home</a></li>
                        <li><a href="loginv2.php">Job Provider</a></li>
                        <li><a href="Services.php">Our Users</a></li>
                        <li><a href="AboutUs.php">About Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container_full">
        <div class="container">
            <div class="job_content1">
                <h1>Welcome to <span style="color: #725E46;">Online Job Portal</span></h1>
                <p>Online job portal is the world's largest professional Job Portal on the internet. You can use Online job portal to find the right job or internship, connect and strengthen professional relationships, and learn the skills you need to succeed in your career. You can access Online job portal from a desktop by your browser.</p>
            </div>
        </div>
    </div> 




         <?php 

            $flag=false;
            $userNameErr=$successfulMessage=$errorMessage=$passwordErr="";

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
            $userName=test_name($_POST['username']);
            $password=test_name($_POST['password']);

            if(empty($_POST['username']))
            {
                $userNameErr="* User name can not be empty.";
                $flag=true;
                
            }
            if(empty($_POST['password']))
            {
                $passwordErr="* Password can not be  empty.";
                $flag=true;
                
                
            }


            if(!$flag)
            {
                $result=login($userName,$password);

                if($result)
                {
                    session_start();
                    $_SESSION['userName']=$userName;
                    header("Location:job_seeker.php");
                                    


                }
                else
                {
                    $errorMessage="log in failed";
                }
                
            }
            

            }


            function test_name($data)
            {
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }

        ?>
        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="login" onsubmit="return isvalid()" >
            <center>
            <h1>Login Form</h1>
           
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" ><span id="userNameErr" style="color : red;"><?php echo $userNameErr; ?></span>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern=".{4,}" ><span id="passwordErr" style="color : red;"><?php echo $passwordErr; ?></span>
                 <br><br>
                <input type="submit" value="submit">
            

        </form>

        <p><a href="Registration.php"><b style="color:red;">Click here</b></a>  for registration.</p>
        </center>

        <span style =" color : green;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
         <span style =" color : green;"><?php echo "<b>" .$errorMessage  ."</b>"; ?></span>
        
         <script>
             function isvalid()
             {
                 var flag = true;
                 var userNameErr=document.getElementById("userNameErr");
                 var passwordErr=document.getElementById("passwordErr");

                 var username=document.forms["login"]["username"].value;
                 var password=document.forms["login"]["password"].value;

                 userNameErr.innerHTML="";
                 passwordErr.innerHTML="";
                 
                if(username ==="")
                {
                    userNameErr.innerHTML="* User name can not be empty.";
                    flag=false;
                }

                if(password ==="")
                {
                    passwordErr.innerHTML="* Password can not be empty.";
                    flag=false;
                }

                return flag;

             }
         </script>

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
                    <p>Contact us</p>
                </div>
            </footer>
        </div>
    </div>
    
    </body>
</html>
<?php 
    require "configv2.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
    </head>

    <body>
        <?php

             $fnameErr=$lnameErr=$genderErr=$dobErr=$errorMessage=$religionErr=$emailErr=$successfulMessage=$userNameErr=$passwordErr="";
             $fname=$lname=$gender=$dob=$religion=$present_address=$parmanent_address=$phone=$email=$link=$userName=$password="";
             
             
             $successfulMessage=$errorMessage="";
             $flag=false;
             
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                

                if(empty($_POST['fname']))
                {
                    $fnameErr="* First name can not be  empty.";
                    $flag=true;
                    
                }
                
                if(empty($_POST['lname']))
                {
                    $lnameErr="* Last name can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['gender']))
                {
                    $genderErr="* Gender  can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['dob']))
                {
                    $dobErr="* Date of birth can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['religion']))
                {
                    $religionErr="* Religion can not be empty";
                    $flag=true;
                }
                if(empty($_POST['email']))
                {
                    $emailErr="* Email can not be  empty.";
                    $flag=true;
                    
                }
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
                    $fname=test_name($_POST['fname']);
                    $lname=test_name($_POST['lname']);
                    $gender=test_name($_POST['gender']);
                    $dob=test_name($_POST['dob']);
                    $religion=test_name($_POST['religion']);
                    $present_address=test_name($_POST['address']);
                    $parmanent_address=test_name($_POST['paddress']);
                    $phone=test_name($_POST['phone']);
                    $email=test_name($_POST['email']);
                    $link=test_name($_POST['link']);
                    $userName=test_name($_POST['username']);
                    $password=test_name($_POST['password']);

                    
                    $result=register($fname,$lname,$gender,$dob,$religion,$present_address,$parmanent_address,$phone,$email,$link,$userName,$password);

                    if($result)
                    {
                        $successfulMessage= "Registration Successful";
                    }
                    else
                    {
                        $errorMessage="Registration Unsuccessful";
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

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="registration" onsubmit="return isvalid()">
            <h2>Registration Form:</h2>
            <fieldset>
                <legend>Basic Information:</legend>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" ><span id="fnameErr" style="color : red;"><?php echo $fnameErr; ?></span>
                <br><br>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" ><span id="lnameErr" style="color : red;"><?php echo $lnameErr; ?></span>
                <br><br>
                <label for ="gender">Gender :</label>
                <br>
                <input type="radio" id="male" name="gender" value="male" >
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female" >
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other" >
                <label for="other">Other</label>
                <span id="genderErr" style="color : red;"><?php echo $genderErr; ?></span>
                <br><br>
                <label for="dob">Date of Birth:</label>

                <input type="date" id="dob" name="dob" ><span id="dobErr" style="color : red;"><?php echo $dobErr; ?></span>
                <br><br>
                <label for="religion">Religion:</label>
                <select name="religion" id="religion" >
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Cristan">Cristan</option>
                    <option value="Buddhism">Buddhism</option>
                </select>
                <span id="religionErr" style="color : red;"><?php echo $religionErr; ?></span>
                
                <br>

            </fieldset>

            <fieldset>
                <legend>Contact Information:</legend>
                <label for="address">Present Address:</label>
                <br>
                <textarea name="address" id="address" cols="40" rows="3"></textarea>
                <br>
                <label for="paddress">Parmanent Address:</label>
                <br>
                <textarea name="paddress" id="paddress" cols="40" rows="3"></textarea>
                <br><br>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="12345-123456" pattern="[0-9]{5}[0-9]{6}">
                <br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="abcd@gmail.com" pattern=".+@+.+.com" ><span id="emailErr" style="color : red;"><?php echo $emailErr; ?></span>
                <br><br>
                <label for="link">Personal Website Link(url):</label>
                <input type="url" name="link" id="link">
                <br>
                <br>
                

            </fieldset>

            <fieldset>
                <legend>Account Information:</legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" ><span id="userNameErr" style="color : red;"><?php echo $userNameErr; ?></span>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern=".{4,}" ><span id="passwordErr" style="color : red;"><?php echo $passwordErr; ?></span>
                <br><br>
                <input type="submit" value="submit">
                <br><br>
                <span style =" color : green;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
                <span style =" color : green;"><?php echo "<b>" .$errorMessage  ."</b>"; ?></span>
            </fieldset>

            

        </form>
        <p><a href="loginv2.php"><b style="color:red;">Click here</b></a>  for login.</p>

        <script>
             function isvalid()
             {
                 var flag = true;

                 var fnameErr=document.getElementById("fnameErr");
                 var lnameErr=document.getElementById("lnameErr");
                 var genderErr=document.getElementById("genderErr");
                 var dobErr=document.getElementById("dobErr");
                 var religionErr=document.getElementById("religionErr");
                 var emailErr=document.getElementById("emailErr");
                 var userNameErr=document.getElementById("userNameErr");
                 var passwordErr=document.getElementById("passwordErr");

                 var fname=document.forms["registration"]["fname"].value;
                 console.log(fname);
                 var lname=document.forms["registration"]["lname"].value;
                 var gender=document.forms["registration"]["gender"].value;
                 var dob=document.forms["registration"]["dob"].value;
                 var religion=document.forms["registration"]["religion"].value;
                 var email=document.forms["registration"]["email"].value;
                 var username=document.forms["registration"]["username"].value;
                 var password=document.forms["registration"]["password"].value;

                 fnameErr.innerHTML="";
                 lnameErr.innerHTML="";
                 genderErr.innerHTML="";
                 dobErr.innerHTML="";
                 religion.innerHTML="";
                 emailErr.innerHTML="";
                 userNameErr.innerHTML="";
                 passwordErr.innerHTML="";

                 if(fname ==="")
                {
                    fnameErr.innerHTML="* First name can not be empty.";
                    flag=false;
                }
                if(lname ==="")
                {
                    lnameErr.innerHTML="* Last name can not be empty.";
                    flag=false;
                }
                if(gender ==="")
                {
                    genderErr.innerHTML="* Gender can not be empty.";
                    flag=false;
                }
                if(dob ==="")
                {
                    dobErr.innerHTML="* Date of birth can not be empty.";
                    flag=false;
                }
                if(religion ==="")
                {
                    religionErr.innerHTML="* Religion can not be empty.";
                    flag=false;
                }
                if(email ==="")
                {
                    emailErr.innerHTML="* Email can not be empty.";
                    flag=false;
                }
                

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

    </body>
</html>
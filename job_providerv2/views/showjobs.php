<?php
//session
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginv2.php");
    exit;
}
?>
<<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Available Jobs</title>
</head>
<body>
    <button class ="floating-btn2" style="background-color:orange;">
             <a href="welcomev2.php">Back</a> 
        </button>

   
        <button class ="floating-btn" style="background-color:orange;">
        <a href="logoutv2.php">logout</a>

        </button>
    
<form >

    <table border="1"  cellpadding="20"  width="700px"  align="center" style="background-color:MediumSeaGreen;">
        
        <tr align="center" >
            <th colspan="2" >
                <h1 style="background-color:DodgerBlue;">Available &nbsp Jobs</h1>
            </th>
        </tr>

        <tr>
<td>
        <center>
            <h2><u>Agro based</u></h2>
            
            <img src="agro.jpg" width="390" height="185">
        </center>
            <p>
                <b>Agro Farm Supervisor</b><br>

                Overall supervision of cattle and poultry farms. <br>
                Need to know how to set up and check up habitat for animals. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="salesman.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
</tr>





<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="bank.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Manufacturing</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Agro based</u></h2>
            
            <img src="agro.jpg" width="390" height="185">
        </center>
            <p>
                <b>Agro Farm Supervisor</b><br>

                Overall supervision of cattle and poultry farms. <br>
                Need to know how to set up and check up habitat for animals. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="salesman.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
</tr>


<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="officer.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Garments</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>


<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="officer.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Construction</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Engineer</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="officer.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Resturant</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Agro based</u></h2>
            
            <img src="agro.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Agro Farm Supervisor</b><br>

                Overall supervision of cattle and poultry farms. <br>
                Need to know how to set up and check up habitat for animals. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="salesman.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="bank.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>IT & Telecommunication</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>


<tr>
<td>
        <center>
            <h2><u>Agro based</u></h2>
            
            <img src="agro.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Agro Farm Supervisor</b><br>

                Overall supervision of cattle and poultry farms. <br>
                Need to know how to set up and check up habitat for animals. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="salesman.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
</tr>





<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="bank.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Beverage industry</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Salesman</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Agro based</u></h2>
            
            <img src="agro.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Agro Farm Supervisor</b><br>

                Overall supervision of cattle and poultry farms. <br>
                Need to know how to set up and check up habitat for animals. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="salesman.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
</tr>


<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="officer.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Job name</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b> Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>


<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="officer.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Job name</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="officer.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Job name</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Agro based</u></h2>
            
            <img src="agro.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Agro Farm Supervisor</b><br>

                Overall supervision of cattle and poultry farms. <br>
                Need to know how to set up and check up habitat for animals. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="salesman.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
</tr>

<tr>
<td>
        <center>
            <h2><u>Bank/Non-Bank institution</u></h2>
            
            <img src="bank.jpg"  width="390" height="185">
        </center>
            <p>
                <b>Supervisor</b><br>

                Overall supervision of bank security. <br>
                Need to know how to set up. <br>
            </p>

</td>
<td>
        <center>
            <h2><u>Job name</u></h2>
            
            <img src="job.jpg"  width="390" height="185">
        </center>
            <p>
        <ul>
                <b>Supervisor</b><br>

                "1-2 years of sales experience." <br>
              "A background in management, with a minimum of 2 years in a management role." <br>
              "Proven success as a developer." <br>
             "Experience directing projects and delegating tasks." <br>
         </ul>
            </p>

</td>
</tr>


        
        
        
    </table>
    </form>
</body>
</html>

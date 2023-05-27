<!DOCTYPE html>  
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
<form method="post" action="../controllers/createjobs_sets.php" >  

    
        <div class="form-control">
            <label for="jobname">Job Title</label>
            <input type="text" placeholder="Enter Job Name" id="jobname" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label for="company_name">Company Name</label>
            <input type="text" placeholder="Type Company Name" id="compname" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="job_details">Job Details</label>
            <input type="text" placeholder="Job Details" id="jobdet" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label for="contact_info">Contact Info</label>
            <input type="email" placeholder="Type Email" id="email" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        
        
        <div class="form-control">
            <label for="salary">Salary</label>
            <input type="number" placeholder="Salary" id="salary"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
    
    <br><br>  
    Agree to Terms of Service:  
    <input type="checkbox" name="agree">  
    <span class="error">*  </span>  
    <br><br>                            
    <input style="background-color:yellowgreen;"type="submit" name="submit" value="Submit">   
    <br><br>                             
  </form>  



</body>  
</html>  
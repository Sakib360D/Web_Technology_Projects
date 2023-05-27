console.log('js connection successful');
    function validate(){

      var first_name=document.getElementById('first_name').value;
      var last_name=document.getElementById('last_name').value;
      var gender;
      
      if(document.getElementById('male').checked)
      {
        gender=document.getElementById('male').value;
      }
      else if(document.getElementById('female').checked)
      {
        gender=document.getElementById('female').value;
      }
      else if(document.getElementById('other').checked)
      {
        gender=document.getElementById('other').value;
      }
      else
      {
        gender=null;
      }
      var birthdate=document.getElementById('birthdate').value;
      var relegion=document.getElementById('Relegion').value;
      var email=document.getElementById('email').value;
      var username=document.getElementById('username').value;
      var pass=document.getElementById('password').value;
      var errors = 0;
      
      if(first_name==="")
      {
        document.getElementById("firstnameError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(first_name!=="")
      {
        document.getElementById("firstnameError").innerText="";
      }
      if(last_name==="")
      {
        document.getElementById("lastnameError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(last_name!=="")
      {
        document.getElementById("lastnameError").innerText="";
      }
      if(gender==="")
      {
        document.getElementById("genderError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(gender!=="")
      {
        document.getElementById("genderError").innerText="";
      }
      if(birthdate==="")
      {
        document.getElementById("birthdateError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(birthdate!=="")
      {
        document.getElementById("birthdateError").innerText="";
      }
      if(relegion==="")
      {
        document.getElementById("relegionError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(relegion!=="")
      {
        document.getElementById("relegionError").innerText="";
      }
      if(email==="")
      {
        document.getElementById("emailError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(email!=="")
      {
        document.getElementById("emailError").innerText="";
      }
      if(username==="")
      {
        document.getElementById("usernameError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(username!=="")
      {
        document.getElementById("usernameError").innerText="";
      }
      if(pass==="")
      {
        document.getElementById("passwordError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(pass!=="")
      {
        document.getElementById("passwordError").innerText="";
      }
      if(errors > 0)
      {
        return false;
      }
      else
      {
        return true;
      }
      
    }
<!DOCTYPE html>
<html>
    <head>
       <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
<!--        <link rel="stylesheet" href="script.js">-->
        <script src="../JAVASCRIPT/script.js"></script>
        <script>
		function validateForm() 
		{
			var x = document.forms["myForm"]["username"].value;
			if (x == "") 
			{
				alert("Name must be filled out");
				return false;
			}

			var email = document.forms["myForm"]["mail"].value;
			if(email.indexOf("@",0)<0 && email.indexOf(".",0)<0)
			{
				alert("Please enter a valid e-mail address.");
				return false;
			}
			var mobile = document.forms["myForm"]["phone"].value;
			if(isNaN(null) || mobile.length < 10 || mobile.length > 10)
			{
				alert("Mobile no. is no valid");
				return false;
			}
			
			var gender = document.forms["myform"]["one"].value;
				if(gender == "")
				{
				alert(" select Gender ");
				return false;
				}
		}
	
</script>
    </head>
<body>
<h1 style="color:white" align="center">Register Form</h1>

<center>
    <form action="details.php" method="POST">
    <div class="container" id="label">
      <h1> Registration</h1>
      <p>Enter Your Details</p>
      <hr>
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter Name" name="firstname" required>
      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Name" name="lastname" required>
      
      <label for="email"><b>Enter Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
      
      <label for="phone"><b>Phone no</b></label>
      <input type="number" placeholder="Enter phone number" name="phone" pattern="[7-9]{1}[0-9]{9}"  required>
      <br>
      <label><b>Gender</b>  </label>
      
        <input type="radio" name="sex" value="Male">Male
        <input type="radio" name="sex" value="female">Female
        <br>
      <br><label for="add"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="add" required>
      
      <label for="age"><b>Age</b></label>
      <input type="number" placeholder="Enter Age" name="age" maxlength="3" required>

       <label for="password"><b>password</b></label>
      <input type="password" placeholder="Enter your password" name="password"  required>
        
    
  <a href="/PHP/userdashboard.php"> <button type="submit" class="signupbtn" name="submit">Register</button>  </a> 
    </div>
  </form>
    
</center>
</body>
</html>

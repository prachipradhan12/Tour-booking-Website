
<?php
session_start();
include 'config.php';
if(isset($_POST['login']))
{
$username=$_POST['username']; // Get username
$password=$_POST['password'];
    // get password
//query for match the user inputs
$ret=mysqli_query($con,"SELECT * FROM user_register WHERE firstname='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0)
{
$_SESSION['login']=$username; // hold the user name in session
$_SESSION['id']=$num['id']; // hold the user id in session
$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
$action="Login";//  query for inser user log in to data base
mysqli_query($con,"insert into user_register(firstname,lastname,email) values('".$_SESSION['id']."','".$_SESSION['login']."','$firstname','$lastname','$email')");
// code redirect the page after login
    
$extra="special package.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
// If the userinput no matched with database else condition will run
else
{
$_SESSION['msg']="Invalid username or password";
$extra="userdashboard.php";
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
 }
}
?>
  


<!DOCTYPE html>
<html>
    <head>
       <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../CSS/userstyle.css">

    </head>
<body>
<h1 style="color:white" align="center">Login</h2>

<center>
  <form name="myForm" action="" onsubmit="return validateForm()" method="post">
    <div class="container" id="label">
      <label for="name"><b>Username:</b></label>
	  <br>
	  <br>
      <input value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" type="text" placeholder="Enter Name username" name="username" >
	  <br>
	  <br>
		<label value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" for="password"><b>Password:</b></label>
		<br>
	  <br>
      <input type="password" placeholder="Enter your password" name="password" required> 
      <a class="linkd" href="../PHP/registerform.php">Create new account</a>
  <br>
        <br>
        
        <p><input type="checkbox" name="remember" /> Remember me
	</p>
	  <center>
        <button type="submit" class="signupbtn" name="login">Login</button>
		</center>
      </div>
    </div>
  </form>
    
</div>
</center>
</body>
</html>



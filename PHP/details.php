
        <?php 
        
        $connection = mysqli_connect('localhost','root','','tour',"3308");
if(!$connection)
{
    echo "Connected";
}

$email = $_POST['email'];
$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$age=$_POST['age'];
$address=$_POST['add'];
$gender=$_POST['sex'];       
$password=$_POST['password'];       
$user_registration_query =  "insert into user_register(firstname,lastname,email,phone,password,gender,age,address)
    values ('$firstname','$lastname','$email','$phone','$password','$gender','$age','$address')"; 
$user_registration_submit = mysqli_query($connection, $user_registration_query) or die(mysqli_error($connection));
?>	




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Traval's</title>

        <!-- Bootstrap core CSS -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
         <link href="../Bootstrap/bootstrap.css" rel="stylesheet">
          <link href="../CSS/packagedetails.css" rel="stylesheet">
        
        
          <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
         
        <link href="../Bootstrap/bootstrap.min.css">
    
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        
           <style>
ul {
  list-style-type: none;
  margin-left: 0px;
    margin-bottom:-5px;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: navy    ;
}
                .session{
            font-family: serif;
           font-weight: bolder;
           font-size: 20px;
           color: aliceblue;
           float: right;
        }
</style>
    </head>


    <body>
        
        <ul>
  <li><a class="active" href="../index.php">Home</a></li>
  <li><a href="/Without_reg/temp.php"></a></li>
  
           
</ul>
    </body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwi45qPFi9_lAhWi8HMBHbL2AqIQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.clipartwiki.com%2Ficlip%2FJTJTR_tick-mark-ok-perfect-check-done-tick-done%2F&psig=AOvVaw09zZ4acFTM3p9a9K54wrCk&ust=1573456273654058">
                
        <p style="font-size:20px;color:#5C5C5C;">Thank you for Register
            <br>
        <button> <a href="userdashboard.php">Login</a>   </button>
            </p>
    <br><br>
        </div>
        
	</div>
</div>

</html>
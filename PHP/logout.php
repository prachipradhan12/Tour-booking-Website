<?php
session_start();
include('config.php');
// Getting logout time in db
$username=$_SESSION['login']; // hold the user name in session
$uid=$_SESSION['id']; // hold the user id in session
$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
$action="Logout";
// query for inser user log in to data base
$query=mysqli_query($con,"insert into user_regsiter(firstname,lastname) values('$firstname','$lastname'");
if($query){
session_unset();
//session_destroy();
}
$_SESSION['msg']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="index.php";
</script>
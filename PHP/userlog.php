<?php
session_start();
include('config.php');
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>welcome</title>
</head>
<body bgcolor="#d6c2c2">
<p><a href="welcome.php">Welcome : <?php echo $_SESSION['login'];?> </a>| <a href="logout.php">Logout</a> </p>
<table align="center" border="1">
<tr>
<th>Sno.</th>
<th>User Id</th>
<th>User Name</th>
<th>User Ip</th>
<th>Action Performed</th>
<th>Login Time</th>
</tr>
<?php $query=mysqli_query($con,"select * from user_register where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['sex'];?></td>
</tr>
<?php $cnt=$cnt+1;
} ?>
</table>
</body>
</html>
<?php
} else{
header('location:logout.php');
}
?>
<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'tour');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME,"3308");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    echo"Connected";
}
?>
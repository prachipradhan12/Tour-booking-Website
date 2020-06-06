<?php

session_start();
if($_SESSION['login'])
{
?>
<!DOCTYPE html>
<html>
<head>
     <script>
		function validateForm() 
		{
			 var card = document.forms["myForm"]["cvv"].value;
			if(isNaN(null) || mobile.length < 3 || mobile.length > 3)
			{
				alert("CVV  is invalid");
				return false;
			}
			
            var card = document.forms["myForm"]["ccnum"].value;
			if(isNaN(null) || mobile.length < 16 || mobile.length > 16)
			{
				alert("CARD NO  is invalid");
				return false;
			}
		}
	
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
     table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

   td, th {
    border: 1px solid #ddd;
    padding: 8px;
  }

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
  }
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
   
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid black;
  border-radius: 3px;
}

input[type=text],select {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
    
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body >
<h2>Payment details</h2>
<div class="row">
  <div class="col-75">
      <form action="payment_database.php" method="post" name="myForm" onclick="validateForm()">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required maxlength="16">
            <label for="expmonth">Exp Month</label>
        <select name="expmonth"   style="width: 570px;">
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
               <option value="May">May</option>
             <option value="June">June</option>
             <option value="July">July</option>
             <option value="August">August</option>
             <option value="September">September</option>
             <option value="Octobar">Octobar</option>
             <option value="November">November</option>
             <option value="December">December</option>
            
                              </select>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <select name="expyear"   style="width: 570px;">
                    <option value="2019">2019</option>
                     <option value="2020">2020</option>
                     <option value="2021">2021</option>
                     <option value="2022">2022</option>
                     <option value="2023">2023</option>
                     <option value="2024">2024</option>
                     <option value="2025">2025</option>
                     <option value="2026">2026</option>
                     <option value="2027">2027</option>
                     <option value="2028">2028</option>
                     <option value="2029">2029</option>
                     <option value="2030">2030</option>
                    
                    
                           </select>
              </div>
              <div class="col-75">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352"  required maxlength="3">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
  <input type="submit" value="Continue to checkout" class="btn">   
      </form>
    </div>
  </div>
</body>
</html>

<?php
} else{
header('location:logout.php');
}


?>
 
 <?php
 $connection = mysqli_connect('localhost','root','','tour',"3308");
if(!$connection)
{
    echo "Connected";
}
$m1 = $_POST['n1'];
$m2 = $_POST['n2'];
$m3 = $_POST['n3'];
$m4 = $_POST['n4'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age   = $_POST['age'];
$address = $_POST['add'];
$package_city = $_POST['package'];       
$recipt_type = $_POST['recipt'];       
$user_registration_query ="insert into package_reg(Firstname,Lastname,email,Phone_no,Age,address,package_city,recipt_type,member1,member2,member3,member4)
    values ('$firstname','$lastname','$email','$phone','$age','$address','$recipt_type','$package_city','$m1','$m2','$m3','$m4')"; 
$user_registration_submit = mysqli_query($connection, $user_registration_query) or die(mysqli_error($connection));
?>	</p> 
 